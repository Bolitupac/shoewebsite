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
            margin-bottom: 3rem;
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
            <a href="{{ route('collection') }}" class="btn btn-dark">Return to Collection</a>
        </div>
    </main>

    @include('partials.footer')
</body>
</html>
