<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout | Nelson Shoes</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=oswald:400,500,600,700|manrope:400,500,600,700" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/everline.css') }}">
    <style>
        .checkout-page {
            padding: 4rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
            min-height: 80vh;
        }
        .checkout-header {
            text-align: center;
            margin-bottom: 3rem;
        }
        .checkout-header h1 {
            font-family: 'Oswald', sans-serif;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            font-size: 2.5rem;
        }
        .checkout-grid {
            display: grid;
            grid-template-columns: 1fr 400px;
            gap: 4rem;
        }
        
        /* Form Side */
        .checkout-form-section {
            background: #fff;
            padding: 2.5rem;
            border-radius: 0;
            border: 1px solid #eee;
        }
        .checkout-form-section h2 {
            font-size: 1.25rem;
            margin-bottom: 1.5rem;
            font-weight: 600;
        }
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }
        .form-grid.full {
            grid-template-columns: 1fr;
        }
        .input-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }
        .input-group label {
            font-size: 0.85rem;
            font-weight: 500;
            color: #555;
        }
        .input-group input, .input-group select {
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-family: inherit;
            font-size: 0.95rem;
            outline: none;
        }
        .input-group input:focus, .input-group select:focus {
            border-color: #111;
        }
        
        /* Summary Side */
        .checkout-summary-section {
            background: #fafaf9;
            padding: 2.5rem;
            border-radius: 0;
            border: 1px solid #eee;
            position: sticky;
            top: 100px;
            height: fit-content;
        }
        .checkout-summary-section h2 {
            font-size: 1.25rem;
            margin-bottom: 1.5rem;
            font-weight: 600;
        }
        .summary-items {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        .summary-item {
            display: flex;
            gap: 1rem;
            align-items: center;
        }
        .summary-item img {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 0;
            border: 1px solid #eee;
        }
        .summary-item-details {
            flex: 1;
        }
        .summary-item-name {
            font-weight: 600;
            font-size: 0.95rem;
        }
        .summary-item-meta {
            font-size: 0.85rem;
            color: #666;
            margin-top: 0.25rem;
        }
        .summary-item-price {
            font-weight: 600;
        }
        
        .summary-totals {
            border-top: 1px solid #ddd;
            padding-top: 1.5rem;
        }
        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.75rem;
            font-size: 0.95rem;
            color: #555;
        }
        .summary-row.total {
            font-weight: 700;
            color: #111;
            font-size: 1.25rem;
            margin-top: 1rem;
            border-top: 1px solid #ddd;
            padding-top: 1rem;
        }
        
        .pay-btn {
            width: 100%;
            padding: 1rem;
            background: #111;
            color: #fff;
            border: none;
            border-radius: 0;
            font-size: 1rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            cursor: pointer;
            margin-top: 1rem;
            transition: all 0.2s;
            position: relative;
        }
        .whatsapp-btn {
            width: 100%;
            padding: 1rem;
            background: transparent;
            color: #111;
            border: 1px solid #111;
            border-radius: 0;
            font-size: 1rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            cursor: pointer;
            margin-top: 1rem;
            transition: all 0.2s;
            text-align: center;
            display: inline-block;
            text-decoration: none;
        }
        .whatsapp-btn:hover {
            background: #f9f9f9;
        }
        .pay-btn:hover {
            background: #333;
        }
        .pay-btn.loading {
            background: #666;
            color: transparent;
            pointer-events: none;
        }
        .pay-btn.loading::after {
            content: "";
            position: absolute;
            left: 50%;
            top: 50%;
            width: 20px;
            height: 20px;
            border: 2px solid #fff;
            border-top-color: transparent;
            border-radius: 50%;
            transform: translate(-50%, -50%);
            animation: spin 0.8s linear infinite;
        }
        
        @keyframes spin {
            to { transform: translate(-50%, -50%) rotate(360deg); }
        }

        @media (max-width: 991px) {
            .checkout-grid {
                grid-template-columns: 1fr;
            }
            .checkout-summary-section {
                order: -1;
                position: static;
            }
        }
        @media (max-width: 500px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="promo-bar">
        <span class="promo-desktop-only">Secure Checkout Environment</span>
        <span class="promo-desktop-only">Nelson Shoes</span>
        <span class="promo-mobile-only">Secure Checkout</span>
    </div>

    <header class="top-header" style="justify-content: space-between;">
        <a href="javascript:history.back()" class="btn" style="padding: 4px 8px; font-size: 10px; text-decoration: none; border: none; min-height: auto;">&larr; Back</a>
        <a class="brand brand-centered" href="{{ route('home') }}">Nelson Shoes</a>
        <a href="{{ route('home') }}" class="btn" style="padding: 4px 8px; font-size: 10px; text-decoration: none; border: none; min-height: auto;">Homepage</a>
    </header>
    
    <main class="checkout-page">
        <div class="checkout-header">
            <h1>Secure Checkout</h1>
            <p>Complete your purchase</p>
        </div>
        
        <div class="checkout-grid">
            <div class="checkout-form-section">
                <h2>Shipping & Payment Details</h2>
                <form id="checkout-form">
                    <div class="form-grid full" style="margin-bottom: 2rem;">
                        <div class="input-group">
                            <label>Email Address</label>
                            <input type="email" name="email" required placeholder="you@example.com">
                        </div>
                    </div>
                    
                    <h3 style="font-size: 1.1rem; margin-bottom: 1rem;">Shipping Address</h3>
                    <div class="form-grid" style="margin-bottom: 1.5rem;">
                        <div class="input-group">
                            <label>First Name</label>
                            <input type="text" name="first_name" required>
                        </div>
                        <div class="input-group">
                            <label>Last Name</label>
                            <input type="text" name="last_name" required>
                        </div>
                    </div>
                    <div class="form-grid full" style="margin-bottom: 1.5rem;">
                        <div class="input-group">
                            <label>Address Line 1</label>
                            <input type="text" name="address_line_1" required>
                        </div>
                    </div>
                    <div class="form-grid" style="margin-bottom: 2rem;">
                        <div class="input-group">
                            <label>City</label>
                            <input type="text" name="city" required>
                        </div>
                        <div class="input-group">
                            <label>State / Province</label>
                            <input type="text" name="state" required>
                        </div>
                    </div>
                    
                    <h3 style="font-size: 1.1rem; margin-bottom: 1rem;">Payment Method</h3>
                    <div class="form-grid full">
                        <div class="input-group">
                            <label>Card Number (Demo)</label>
                            <input type="text" placeholder="0000 0000 0000 0000" maxlength="19" required>
                        </div>
                    </div>
                    <div class="form-grid" style="margin-top: 1.5rem;">
                        <div class="input-group">
                            <label>Expiry Date</label>
                            <input type="text" placeholder="MM/YY" maxlength="5" required>
                        </div>
                        <div class="input-group">
                            <label>CVV</label>
                            <input type="password" placeholder="123" maxlength="4" required>
                        </div>
                    </div>
                    
                    <div style="display: flex; gap: 1rem; margin-top: 2rem;">
                        <button type="submit" class="pay-btn" id="pay-action-btn" style="margin-top: 0; flex: 1;">Pay Now</button>
                        <a href="#" class="whatsapp-btn" id="whatsapp-checkout-btn" style="margin-top: 0; flex: 1;">Checkout with WhatsApp</a>
                    </div>
                </form>
            </div>
            
            <div class="checkout-summary-section">
                <h2>Order Summary</h2>
                <div class="summary-items" id="checkout-items">
                    <!-- Items injected by JS -->
                </div>
                
                <div class="summary-totals">
                    <div class="summary-row">
                        <span>Subtotal</span>
                        <span id="checkout-subtotal">₦0.00</span>
                    </div>
                    <div class="summary-row">
                        <span>Shipping</span>
                        <span>Free</span>
                    </div>
                    <div class="summary-row total">
                        <span>Total</span>
                        <span id="checkout-total">₦0.00</span>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('partials.footer')
    <script src="{{ asset('js/nelson-interactions.js') }}" defer></script>

    <script>
        const getCart = () => JSON.parse(localStorage.getItem('nelson_cart') || '[]');
        const formatPrice = (priceNum) => '₦' + priceNum.toLocaleString('en-NG', {minimumFractionDigits: 2, maximumFractionDigits: 2});
        const parsePrice = (priceStr) => Number(priceStr.replace(/[^0-9.-]+/g, ''));
        
        document.addEventListener('DOMContentLoaded', () => {
            const cart = getCart();
            const itemsContainer = document.getElementById('checkout-items');
            
            if (cart.length === 0) {
                window.location.href = '/collection';
                return;
            }
            
            let subtotal = 0;
            
            itemsContainer.innerHTML = cart.map(item => {
                const itemTotal = parsePrice(item.price) * item.quantity;
                subtotal += itemTotal;
                const sizeDisplay = (item.size && item.size !== 'N/A') ? `Size: ${item.size} &nbsp;|&nbsp; ` : '';
                
                return `
                    <div class="summary-item">
                        <img src="${item.image}" alt="${item.name}" class="img-lazy" loading="lazy" decoding="async">
                        <div class="summary-item-details">
                            <div class="summary-item-name">${item.name}</div>
                            <div class="summary-item-meta">${sizeDisplay}Qty: ${item.quantity}</div>
                        </div>
                        <div class="summary-item-price">${formatPrice(itemTotal)}</div>
                    </div>
                `;
            }).join('');
            
            document.getElementById('checkout-subtotal').textContent = formatPrice(subtotal);
            document.getElementById('checkout-total').textContent = formatPrice(subtotal);
            
            document.getElementById('checkout-form').addEventListener('submit', async (e) => {
                e.preventDefault();
                const btn = document.getElementById('pay-action-btn');
                btn.classList.add('loading');

                const form = e.currentTarget;
                const formData = new FormData(form);
                const payload = {
                    email: formData.get('email'),
                    first_name: formData.get('first_name'),
                    last_name: formData.get('last_name'),
                    address_line_1: formData.get('address_line_1'),
                    city: formData.get('city'),
                    state: formData.get('state'),
                    items: cart,
                    total: subtotal,
                };

                try {
                    const response = await fetch("{{ route('checkout.order') }}", {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name=\"csrf-token\"]').content,
                        },
                        body: JSON.stringify(payload),
                    });

                    if (!response.ok) {
                        throw new Error('Unable to save order');
                    }

                    const result = await response.json();

                    localStorage.removeItem('nelson_cart'); // clear cart
                    window.location.href = result.redirect_url;
                } catch (error) {
                    btn.classList.remove('loading');
                    alert('We could not save your order. Please try again.');
                }
            });

            document.getElementById('whatsapp-checkout-btn').addEventListener('click', (e) => {
                e.preventDefault();
                let text = 'Hello, I would like to order the following items from my cart:\n\n';
                cart.forEach(item => {
                    const sizeText = (item.size && item.size !== 'N/A') ? `Size: ${item.size}, ` : '';
                    text += `- ${item.name} (${sizeText}Qty: ${item.quantity}) - ${item.price} each\n`;
                });
                text += `\nTotal: ${formatPrice(subtotal)}`;
                
                window.open('https://wa.me/2347037371590?text=' + encodeURIComponent(text), '_blank');
            });
        });
    </script>
</body>
</html>
