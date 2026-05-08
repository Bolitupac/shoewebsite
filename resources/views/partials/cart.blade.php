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
                        <th class="cart-col-qty">Quantity</th>
                        <th class="cart-col-total">Total</th>
                        <th class="cart-col-action">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="cart-row" data-cart-row>
                        <td>
                            <div class="cart-item-product">
                                <img src="{{ asset('images/black-shiny-shoe.jpg') }}" alt="Ledley - Black Deerskin" class="cart-item-image">
                                <div>
                                    <p class="cart-item-name">Ledley - Black Deerskin</p>
                                </div>
                            </div>
                            <p class="cart-item-sub">Shoe Size (UK): 6</p>
                        </td>
                        <td>
                            <div class="cart-price-cell">
                                <span class="cart-price-value">₦322,500.00</span>
                                <button type="button" class="btn btn-outline cart-mobile-edit-btn" data-cart-edit-toggle aria-expanded="false">Edit</button>
                            </div>
                        </td>
                        <td class="cart-col-qty">
                            <div class="cart-qty">
                                <span>Quantity</span>
                                <strong>1</strong>
                            </div>
                        </td>
                        <td class="cart-col-total">₦322,500.00</td>
                        <td class="cart-col-action">
                            <button type="button" class="btn btn-outline cart-remove-btn">Remove</button>
                        </td>
                    </tr>
                    <tr class="cart-row-mobile-details" data-cart-row-details aria-hidden="true">
                        <td colspan="2">
                            <div class="cart-row-mobile-details-inner">
                                <div class="cart-row-mobile-stats">
                                    <div class="cart-row-mobile-block">
                                        <span>Quantity</span>
                                        <div class="cart-mobile-qty-stepper" data-cart-qty-stepper>
                                            <button type="button" class="cart-qty-btn" data-cart-qty-minus aria-label="Decrease quantity">-</button>
                                            <strong data-cart-qty-value>1</strong>
                                            <button type="button" class="cart-qty-btn" data-cart-qty-plus aria-label="Increase quantity">+</button>
                                        </div>
                                    </div>
                                    <div class="cart-row-mobile-size">
                                        <label for="cart-mobile-size-1">Shoe Size</label>
                                        <select id="cart-mobile-size-1" name="cart_mobile_size_1">
                                            <option value="40" selected>40</option>
                                            <option value="41">41</option>
                                            <option value="42">42</option>
                                            <option value="43">43</option>
                                            <option value="44">44</option>
                                            <option value="45">45</option>
                                            <option value="46">46</option>
                                            <option value="47">47</option>
                                            <option value="48">48</option>
                                            <option value="49">49</option>
                                            <option value="50">50</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="cart-row-mobile-actions">
                                    <button type="button" class="btn btn-outline cart-remove-btn">Remove</button>
                                    <button type="button" class="btn btn-outline cart-update-inline-btn">Update Cart</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="cart-note">You are shopping in UK sizing. For conversion information, please see our <a href="#" data-size-guide>Size Guide</a>.</p>
        <div class="cart-summary">
            <div class="cart-summary-row"><span>Subtotal</span><strong>₦322,500.00</strong></div>
            <p>Tax included and shipping calculated at checkout</p>
        </div>
        <div class="cart-actions">
            <button type="button" class="btn btn-outline cart-update-btn" data-cart-update-btn>Update Basket</button>
            <a href="#" class="btn btn-dark">Checkout</a>
        </div>
    </aside>
</div>
