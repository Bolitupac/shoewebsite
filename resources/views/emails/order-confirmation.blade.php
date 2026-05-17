<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $headline }}</title>
</head>
<body style="margin:0; padding:0; background-color:#f5f1ea; color:#1a1a1a; font-family:Georgia, 'Times New Roman', serif;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background:linear-gradient(180deg, #f7f2e8 0%, #efe4d2 100%); margin:0; padding:32px 16px;">
        <tr>
            <td align="center">
                <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="max-width:680px; background:#ffffff; border:1px solid #ddcfb8;">
                    <tr>
                        <td style="padding:40px 48px; background:#111111; color:#f4ead7; text-align:center;">
                            <div style="font-size:12px; letter-spacing:0.45em; text-transform:uppercase; margin-bottom:14px;">Nelson Shoes</div>
                            <div style="font-size:34px; line-height:1.2; margin:0;">Luxury crafted for distinction.</div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:40px 48px 24px;">
                            <p style="margin:0 0 16px; font-size:16px; line-height:1.7;">{{ $recipientName }},</p>
                            <h1 style="margin:0 0 18px; font-size:30px; line-height:1.2; font-weight:normal;">{{ $headline }}</h1>
                            <p style="margin:0; font-size:16px; line-height:1.8; color:#463f35;">{{ $intro }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:0 48px 32px;">
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="border:1px solid #d8c3a0; background:#fbf7f0;">
                                <tr>
                                    <td style="padding:24px 28px;">
                                        <div style="font-size:11px; letter-spacing:0.3em; text-transform:uppercase; color:#8a6a2f; margin-bottom:10px;">Order Reference</div>
                                        <div style="font-size:28px; line-height:1.2; color:#111111;">{{ $order->order_number }}</div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:0 48px 16px;">
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse;">
                                <tr>
                                    <td style="padding:12px 0; border-bottom:1px solid #ece3d5; font-size:14px; color:#6d6458;">Customer</td>
                                    <td style="padding:12px 0; border-bottom:1px solid #ece3d5; font-size:14px; text-align:right;">{{ $order->first_name }} {{ $order->last_name }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:12px 0; border-bottom:1px solid #ece3d5; font-size:14px; color:#6d6458;">Email</td>
                                    <td style="padding:12px 0; border-bottom:1px solid #ece3d5; font-size:14px; text-align:right;">{{ $order->email }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:12px 0; border-bottom:1px solid #ece3d5; font-size:14px; color:#6d6458;">Shipping</td>
                                    <td style="padding:12px 0; border-bottom:1px solid #ece3d5; font-size:14px; text-align:right;">{{ $order->address_line_1 }}, {{ $order->city }}, {{ $order->state }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:12px 0; font-size:14px; color:#6d6458;">Total</td>
                                    <td style="padding:12px 0; font-size:18px; text-align:right;">₦{{ number_format((float) $order->total, 2) }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:0 48px 12px;">
                            <div style="font-size:11px; letter-spacing:0.3em; text-transform:uppercase; color:#8a6a2f; margin-bottom:14px;">Order Items</div>
                            @foreach ($order->items as $item)
                                <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="margin-bottom:12px; border:1px solid #ece3d5; background:#fffdfa;">
                                    <tr>
                                        <td style="padding:16px 18px;">
                                            <div style="font-size:16px; margin-bottom:6px;">{{ $item['name'] ?? 'Item' }}</div>
                                            <div style="font-size:13px; color:#6d6458; line-height:1.7;">
                                                Qty: {{ $item['quantity'] ?? 1 }}
                                                | Size: {{ $item['size'] ?? 'N/A' }}
                                                | Price: {{ $item['price'] ?? 'N/A' }}
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:12px 48px 40px;">
                            <p style="margin:0; font-size:15px; line-height:1.8; color:#463f35;">{{ $closing }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:28px 48px; background:#161616; color:#d7c8ad; text-align:center;">
                            <div style="font-size:12px; letter-spacing:0.24em; text-transform:uppercase; margin-bottom:10px;">Nelson Shoes</div>
                            <div style="font-size:13px; line-height:1.8; color:#c5b79d;">Crafted luxury footwear and leather essentials.</div>
                            <div style="font-size:12px; line-height:1.8; color:#9f937e; margin-top:14px;">
                                <a href="https://nsshoewebsite.onrender.com" style="color:#e4d6ba; text-decoration:none;">Website</a>
                                &nbsp;|&nbsp;
                                <a href="{{ route('collection') }}" style="color:#e4d6ba; text-decoration:none;">Collection</a>
                                &nbsp;|&nbsp;
                                <a href="{{ route('support') }}" style="color:#e4d6ba; text-decoration:none;">Support</a>
                            </div>
                            <div style="margin-top:16px; color:#ffb9ad; font-size:11px; line-height:1.5; font-weight:bold; text-transform:uppercase; letter-spacing:0.06em;">
                                Demo only. Not real commerce and not affiliated with Nelson Shoes.
                            </div>
                            <div style="font-size:11px; color:#8e846f; margin-top:14px;">© 2026 bolitupac. All rights reserved.</div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
