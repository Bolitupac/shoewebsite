<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'address_line_1' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'items' => ['required', 'array', 'min:1'],
            'items.*.name' => ['required', 'string'],
            'items.*.price' => ['required', 'string'],
            'items.*.size' => ['required'],
            'items.*.quantity' => ['required', 'integer', 'min:1'],
            'total' => ['required', 'numeric', 'min:0'],
        ]);

        $order = Order::create([
            'order_number' => $this->generateOrderNumber(),
            'email' => $validated['email'],
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'address_line_1' => $validated['address_line_1'],
            'city' => $validated['city'],
            'state' => $validated['state'],
            'items' => $validated['items'],
            'total' => $validated['total'],
            'status' => 'pending',
        ]);

        $this->sendOrderEmails($order);

        return response()->json([
            'success' => true,
            'order_id' => $order->order_number,
            'redirect_url' => route('checkout.success', ['order' => $order->order_number]),
        ]);
    }

    public function success(Order $order)
    {
        return view('checkout-success', compact('order'));
    }

    private function generateOrderNumber(): string
    {
        do {
            $orderNumber = 'NS-' . now()->format('Ymd') . '-' . strtoupper(Str::random(6));
        } while (Order::where('order_number', $orderNumber)->exists());

        return $orderNumber;
    }

    private function sendOrderEmails(Order $order): void
    {
        $apiKey = (string) config('services.brevo.api_key');
        $senderEmail = (string) config('services.brevo.sender_email');
        $senderName = (string) config('services.brevo.sender_name');
        $ownerEmail = (string) config('services.brevo.owner_email');

        if ($apiKey === '' || $senderEmail === '') {
            Log::warning('Brevo email sending skipped because configuration is incomplete.', [
                'order_number' => $order->order_number,
            ]);

            return;
        }

        $customerName = trim($order->first_name . ' ' . $order->last_name);
        $emails = [
            [
                'to' => [['email' => $order->email, 'name' => $customerName]],
                'subject' => 'Your Nelson Shoes order ' . $order->order_number,
                'htmlContent' => View::make('emails.order-confirmation', [
                    'order' => $order,
                    'recipientName' => $customerName,
                    'headline' => 'Your order is confirmed.',
                    'intro' => 'Thank you for choosing Nelson Shoes. Your order has been received and is now being prepared with the care expected of a luxury house.',
                    'closing' => 'Store your order reference safely. We recommend keeping this email for delivery follow-up and support.',
                ])->render(),
            ],
        ];

        if ($ownerEmail !== '') {
            $emails[] = [
                'to' => [['email' => $ownerEmail, 'name' => 'Nelson Shoes']],
                'subject' => 'Admin Alert: New Nelson Shoes order ' . $order->order_number,
                'htmlContent' => View::make('emails.order-confirmation', [
                    'order' => $order,
                    'recipientName' => 'Nelson Shoes Admin',
                    'headline' => 'A new customer order has been placed.',
                    'intro' => 'A customer has completed checkout. This is the internal admin notification for order intake and fulfillment follow-up.',
                    'closing' => 'This admin alert was sent automatically by the Nelson Shoes checkout system.',
                ])->render(),
            ];
        }

        foreach ($emails as $email) {
            try {
                $response = Http::timeout(15)->withHeaders([
                    'api-key' => $apiKey,
                    'accept' => 'application/json',
                    'content-type' => 'application/json',
                ])->post('https://api.brevo.com/v3/smtp/email', [
                    'sender' => [
                        'name' => $senderName,
                        'email' => $senderEmail,
                    ],
                    'to' => $email['to'],
                    'subject' => $email['subject'],
                    'htmlContent' => $email['htmlContent'],
                ])->throw();

                Log::info('Brevo email sent for order.', [
                    'order_number' => $order->order_number,
                    'recipient' => $email['to'][0]['email'] ?? null,
                    'subject' => $email['subject'],
                    'brevo_response' => $response->json(),
                ]);
            } catch (\Throwable $exception) {
                Log::error('Brevo email failed for order.', [
                    'order_number' => $order->order_number,
                    'recipient' => $email['to'][0]['email'] ?? null,
                    'message' => $exception->getMessage(),
                ]);
            }
        }
    }
}
