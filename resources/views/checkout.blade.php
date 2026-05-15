<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout | Nelson Shoes</title>
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
            border-radius: 8px;
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
            border-radius: 8px;
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
            border-radius: 6px;
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
            border-radius: 4px;
            font-size: 1rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            cursor: pointer;
            margin-top: 2rem;
            transition: all 0.2s;
            position: relative;
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
    @include('partials.header')

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
                            <input type="email" required placeholder="you@example.com">
                        </div>
                    </div>
                    
                    <h3 style="font-size: 1.1rem; margin-bottom: 1rem;">Shipping Address</h3>
                    <div class="form-grid" style="margin-bottom: 1.5rem;">
                        <div class="input-group">
                            <label>First Name</label>
                            <input type="text" required>
                        </div>
                        <div class="input-group">
                            <label>Last Name</label>
                            <input type="text" required>
                        </div>
                    </div>
                    <div class="form-grid full" style="margin-bottom: 1.5rem;">
                        <div class="input-group">
                            <label>Address Line 1</label>
                            <input type="text" required>
                        </div>
                    </div>
                    <div class="form-grid" style="margin-bottom: 2rem;">
                        <div class="input-group">
                            <label>City</label>
                            <input type="text" required>
                        </div>
                        <div class="input-group">
                            <label>State / Province</label>
                            <input type="text" required>
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
                    
                    <button type="submit" class="pay-btn" id="pay-action-btn">Pay Now</button>
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
                
                return `
                    <div class="summary-item">
                        <img src="${item.image}" alt="${item.name}">
                        <div class="summary-item-details">
                            <div class="summary-item-name">${item.name}</div>
                            <div class="summary-item-meta">Size: ${item.size} &nbsp;|&nbsp; Qty: ${item.quantity}</div>
                        </div>
                        <div class="summary-item-price">${formatPrice(itemTotal)}</div>
                    </div>
                `;
            }).join('');
            
            document.getElementById('checkout-subtotal').textContent = formatPrice(subtotal);
            document.getElementById('checkout-total').textContent = formatPrice(subtotal);
            
            document.getElementById('checkout-form').addEventListener('submit', (e) => {
                e.preventDefault();
                const btn = document.getElementById('pay-action-btn');
                btn.classList.add('loading');
                
                setTimeout(() => {
                    localStorage.removeItem('nelson_cart'); // clear cart
                    window.location.href = '/checkout/success';
                }, 2000);
            });
        });
    </script>
</body>
</html>
