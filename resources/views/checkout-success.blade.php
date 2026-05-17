<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order Successful | Nelson Shoes</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=oswald:400,500,600,700|manrope:400,500,600,700" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/everline.css') }}">
    <style>
        .success-page {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 70vh;
            text-align: center;
            padding: 2rem;
        }
        .success-content {
            max-width: 600px;
        }
        .success-icon {
            width: 80px;
            height: 80px;
            background: #111;
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem;
        }
        .success-icon svg {
            width: 40px;
            height: 40px;
        }
        .success-title {
            font-family: 'Oswald', sans-serif;
            font-size: 2.5rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 1rem;
        }
        .success-message {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 2rem;
            line-height: 1.6;
        }
        .order-reference-card {
            margin: 0 auto 2rem;
            padding: 1.5rem;
            border: 1px solid #d9c7a1;
            background: linear-gradient(135deg, #f8f3ea 0%, #fffdf9 100%);
            max-width: 460px;
        }
        .order-reference-label {
            display: block;
            font-size: 0.78rem;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            color: #8a6a2f;
            margin-bottom: 0.75rem;
        }
        .order-reference-value {
            display: block;
            font-family: 'Oswald', sans-serif;
            font-size: 2rem;
            letter-spacing: 0.08em;
            color: #111;
            margin-bottom: 0.75rem;
        }
        .order-reference-note {
            margin: 0;
            color: #5f5649;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    @include('partials.header')

    <main class="success-page">
        <div class="success-content">
            <div class="success-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
            </div>
            <h1 class="success-title">Order Confirmed</h1>
            <p class="success-message">Thank you for choosing Nelson Shoes. Your order has been successfully placed. We will contact you shortly regarding the shipping timeline and fitting confirmation.</p>
            <div class="order-reference-card">
                <span class="order-reference-label">Your Order Reference</span>
                <span class="order-reference-value">{{ $order->order_number }}</span>
                <p class="order-reference-note">Store this order ID safely. You will need it for future support, delivery follow-up, or order reference.</p>
            </div>
            <a href="{{ route('collection') }}" class="btn btn-dark">Return to Collection</a>
        </div>
    </main>

    @include('partials.footer')
</body>
</html>
