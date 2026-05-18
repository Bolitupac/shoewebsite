<div class="cart-drawer" data-cart-drawer aria-hidden="true">
    <button class="cart-drawer-backdrop" type="button" data-close-cart aria-label="Close shopping basket"></button>
    <aside class="cart-drawer-panel" role="dialog" aria-modal="true" aria-labelledby="cart-drawer-title">
        <button class="cart-drawer-close" type="button" data-close-cart aria-label="Close shopping basket">X</button>
        <div class="cart-drawer-header">
            <h2 id="cart-drawer-title">Luxury Cart</h2>
        </div>
        <div class="cart-drawer-table-wrap">
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th class="cart-col-qty">Quantity</th>
                        <th class="cart-col-total">Total</th>
                        <th class="cart-col-action">Action</th>
                    </tr>
                </thead>
                <tbody id="cart-items-container">
                    <!-- Cart items injected by JS -->
                </tbody>
            </table>
        </div>
        <p class="cart-note">You are shopping in EU sizing. For conversion information, please see our <a href="#" data-size-guide>Size Guide</a>.</p>
        <div class="cart-summary">
            <div class="cart-summary-row"><span>Subtotal</span><strong id="cart-subtotal">₦0.00</strong></div>
            <p>Tax included and shipping calculated at checkout</p>
        </div>
        <div class="cart-actions">
            <button type="button" class="btn btn-outline cart-update-btn" data-cart-update-btn>Update Basket</button>
            <a href="#" class="btn btn-dark" id="checkout-btn">Checkout</a>
        </div>
    </aside>
</div>
