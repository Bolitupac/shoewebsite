<div class="cart-drawer" data-cart-drawer aria-hidden="true">
    <button class="cart-drawer-backdrop" type="button" data-close-cart aria-label="Close shopping basket"></button>
    <aside class="cart-drawer-panel" role="dialog" aria-modal="true" aria-labelledby="cart-drawer-title">
        <button class="cart-drawer-close" type="button" data-close-cart aria-label="Close shopping basket">X</button>
        <div class="cart-drawer-header">
            <h2 id="cart-drawer-title">Luxury Cart</h2>
            <a href="{{ route('collection') }}">Continue shopping</a>
        </div>
        <div class="cart-drawer-table-wrap">
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="cart-item-product">
                                <img src="{{ asset('images/black-shiny-shoe.jpg') }}" alt="Ledley - Black Deerskin" class="cart-item-image">
                                <div>
                                    <p class="cart-item-name">Ledley - Black Deerskin</p>
                                </div>
                            </div>
                            <p class="cart-item-sub">Shoe Size (UK): 6</p>
                        </td>
                        <td>₦322,500.00</td>
                        <td>
                            <div class="cart-qty">
                                <span>Quantity</span>
                                <strong>1</strong>
                            </div>
                        </td>
                        <td>₦322,500.00</td>
                        <td>
                            <button type="button" class="btn btn-outline cart-remove-btn">Remove</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="cart-note">You are shopping in UK sizing. For conversion information, please see our Size Guide.</p>
        <div class="cart-summary">
            <div class="cart-summary-row"><span>Subtotal</span><strong>₦322,500.00</strong></div>
            <p>Tax included and shipping calculated at checkout</p>
        </div>
        <div class="cart-actions">
            <button type="button" class="btn btn-outline">Update Basket</button>
            <a href="#" class="btn btn-dark">Checkout</a>
        </div>
    </aside>
</div>
