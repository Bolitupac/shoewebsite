<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nelson Shoes | Collection</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=oswald:400,500,600,700|manrope:400,500,600,700" rel="stylesheet" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon-n.svg') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/everline.css') }}">
</head>

<body>
    @php
        $whatsappNumber = '2340000000000';
    @endphp

    <div class="site-wrap">
        @include('partials.header')

        <main>
            <section class="collection-hero">
                <div>
                    <span class="eyebrow">The workshop selection</span>
                    <h1>Collection</h1>
                </div>
            </section>

            <section class="collection-shell">
                <aside class="filter-sidebar" aria-label="Sort and filter">
                    <button class="filter-toggle" type="button" data-filter-toggle aria-expanded="false">Sort &amp; Filter</button>
                    <div class="filter-panel" data-filter-panel>
                        <div class="filter-header">
                            <h2>Filters</h2>
                            <button class="icon-btn" type="button" data-filter-close aria-label="Close filters">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                            </button>
                        </div>
                        <div class="filter-body">
                            <span class="section-label">Sort &amp; Filter</span>
                            <div class="filter-group">
                                <h4>Product</h4>
                                <label><input type="checkbox" data-filter-product value="Shoes"> Shoes</label>
                                <label><input type="checkbox" data-filter-product value="Wallets"> Wallets</label>
                                <label><input type="checkbox" data-filter-product value="Belts"> Belts</label>
                            </div>
                            <div class="filter-group">
                                <h4>Shoe Type</h4>
                                <label><input type="checkbox" data-filter-shoe-type value="Loafer"> Loafer</label>
                                <label><input type="checkbox" data-filter-shoe-type value="Penny Loafer"> Penny Loafer</label>
                                <label><input type="checkbox" data-filter-shoe-type value="Oxford"> Oxford</label>
                                <label><input type="checkbox" data-filter-shoe-type value="Derby"> Derby</label>
                                <label><input type="checkbox" data-filter-shoe-type value="One-of-One"> One-of-One</label>
                            </div>
                            <div class="filter-group">
                                <h4>Colour</h4>
                                <label><input type="checkbox" data-filter-colour value="Beige"> Beige</label>
                                <label><input type="checkbox" data-filter-colour value="Black"> Black</label>
                                <label><input type="checkbox" data-filter-colour value="Brown"> Brown</label>
                                <label><input type="checkbox" data-filter-colour value="Burgundy"> Burgundy</label>
                                <label><input type="checkbox" data-filter-colour value="Cedar"> Cedar</label>
                                <label><input type="checkbox" data-filter-colour value="Navy / Blue"> Navy / Blue</label>
                                <label><input type="checkbox" data-filter-colour value="Rosewood"> Rosewood</label>
                            </div>
                            <div class="filter-group">
                                <h4>Construction Type</h4>
                                <label><input type="checkbox" data-filter-construction value="Bologna"> Bologna</label>
                                <label><input type="checkbox" data-filter-construction value="Cemented"> Cemented</label>
                                <label><input type="checkbox" data-filter-construction value="Lockstitch"> Lockstitch</label>
                                <label><input type="checkbox" data-filter-construction value="Moccasin"> Moccasin</label>
                            </div>
                            <div class="filter-group">
                                <h4>Fitting Type</h4>
                                <label><input type="checkbox" data-filter-fitting value="G"> G</label>
                            </div>
                            <div class="filter-group">
                                <h4>Gender</h4>
                                <label><input type="checkbox" data-filter-gender value="Men"> Men</label>
                                <label><input type="checkbox" data-filter-gender value="Women"> Women</label>
                            </div>
                            <div class="filter-group">
                                <h4>Last Shape</h4>
                                <label><input type="checkbox" data-filter-last value="436"> 436</label>
                            </div>
                            <div class="filter-group">
                                <h4>Material / Finish</h4>
                                <label><input type="checkbox" data-filter-material value="Calf"> Calf</label>
                                <label><input type="checkbox" data-filter-material value="Suede"> Suede</label>
                                <label><input type="checkbox" data-filter-material value="Patina"> Patina</label>
                            </div>
                            <div class="filter-group">
                                <h4>Sole Type</h4>
                                <label><input type="checkbox" data-filter-sole value="Leather"> Leather</label>
                            </div>
                        </div>
                        <div class="filter-footer">
                            <button class="btn btn-dark w-100" style="width: 100%" type="button" data-filter-close>Apply Filters</button>
                        </div>
                    </div>
                </aside>

                <div class="collection-content">
                    <section id="custom-order" class="custom-order">
                        <button class="custom-order-close" type="button" data-custom-order-close aria-label="Close custom order">X</button>
                        <span class="eyebrow">Custom Order</span>
                        <h2>Build a pair around your event, stance, and size.</h2>
                        <p>Send your preferred leather, color direction, occasion, and sizing notes. The workshop will guide the next step on WhatsApp.</p>
                        <div class="section-actions">
                            <a class="btn btn-dark" href="https://wa.me/{{ $whatsappNumber }}?text=Hello%2C%20I%20want%20to%20place%20a%20custom%20Nelson%20Shoes%20order." target="_blank" rel="noreferrer">Start Custom Order</a>
                        </div>
                    </section>

                    @foreach (['one-of-one' => 'Rare Pairs.', 'men' => 'Men.', 'women' => 'Women.', 'newly-made' => 'Fresh Drop.', 'accessories' => 'Wallets & Belts.'] as $section => $title)
                        <section id="{{ $section }}" class="catalog-section" data-initial-visible="{{ $section === 'one-of-one' ? 2 : 4 }}">
                            <div class="section-intro">
                                <div>
                                    <span class="section-label">{{ str_replace('-', ' ', $section) }}</span>
                                    <h2>{{ $title }}</h2>
                                </div>
                            </div>
                            <div class="product-grid" data-section-grid>
                                @foreach ($products as $product)
                                    @continue($product['section'] !== $section)
                                    @php
                                        $orderText = rawurlencode('Hello, I am interested in the ' . $product['name'] . ' in size 6.');
                                    @endphp
                                    <article class="product-card card {{ !empty($product['hidden']) ? 'card-hidden' : '' }} {{ $product['category'] === 'one-of-one' ? 'card-one-of-one' : '' }}"
                                        data-product-card
                                        data-id="{{ $product['id'] }}"
                                        data-name="{{ $product['name'] }}"
                                        data-price="{{ $product['price'] }}"
                                        data-category="{{ $product['category'] }}"
                                        data-colour="{{ $product['colour'] }}"
                                        data-description="{{ $product['description'] }}"
                                        data-whatsapp-number="{{ $whatsappNumber }}">
                                        <div class="card-media">
                                            <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}" loading="eager" decoding="async">
                                        </div>
                                        <div class="card-copy">
                                            @if ($product['category'] === 'one-of-one')
                                                <span class="card-flag">One of One</span>
                                            @endif
                                            <h2>{{ $product['name'] }}</h2>
                                            <div class="row">
                                                <span>{{ $product['price'] }}</span>
                                                <a class="card-action" href="https://wa.me/{{ $whatsappNumber }}?text={{ $orderText }}" target="_blank" rel="noreferrer">Buy Now</a>
                                            </div>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                            @if (collect($products)->where('section', $section)->where('hidden', true)->isNotEmpty())
                                <div class="see-more-wrap">
                                    <button class="btn btn-outline see-more" type="button" data-see-more aria-expanded="false">See more</button>
                                </div>
                            @endif
                        </section>
                    @endforeach
                </div>
            </section>
        </main>
        @include('partials.footer')
    </div>

    @include('partials.cart')

    <div class="product-modal" data-product-modal aria-hidden="true">
        <button class="product-modal-backdrop" type="button" data-close-modal aria-label="Close product details"></button>
        <div class="product-modal-panel" role="dialog" aria-modal="true" aria-labelledby="product-modal-title">
            <button class="product-modal-close" type="button" data-close-modal aria-label="Close product details">X</button>
            <div class="product-modal-media">
                <img src="" alt="" data-modal-image>
                <div class="product-modal-media-badge">Nelson Shoes Workshop</div>
            </div>
            <div class="product-modal-copy">
                <div class="product-modal-header">
                    <p class="product-modal-notice">Typically takes two weeks to make</p>
                    <h2 id="product-modal-title" data-modal-title></h2>
                    <div class="product-modal-price" data-modal-price></div>
                </div>
                <div class="product-modal-summary">
                    <div class="product-meta">
                        <p class="meta-label">Colour</p>
                        <p class="meta-value" data-modal-colour></p>
                    </div>
                    <div class="product-meta">
                        <p class="meta-label">Shoe Size (UK)</p>
                        <div class="size-row">
                            <select aria-label="Shoe Size UK" data-modal-size>
                                <option value="40">40</option>
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
                            <a class="size-guide-link" href="#" data-size-guide>Size Guide</a>
                        </div>
                    </div>
                </div>
                <div class="detail-block">
                    <h3>Product Description</h3>
                    <p data-modal-description></p>
                </div>
                <div class="detail-block">
                    <h3>Detailed Information</h3>
                    <ul class="detail-list" data-modal-info></ul>
                </div>
                <div class="product-modal-actions">
                    <a class="btn btn-dark" href="#" target="_blank" rel="noreferrer" data-modal-order>Order via WhatsApp</a>
                </div>
                <div class="recommended-block">
                    <h3>Recommended Items</h3>
                    <div class="recommended-grid" data-recommended-grid></div>
                </div>
            </div>
        </div>
    </div>

    <div class="size-guide-modal" data-size-guide-modal aria-hidden="true">
        <button class="size-guide-backdrop" type="button" data-close-size-guide aria-label="Close size guide"></button>
        <div class="size-guide-panel" role="dialog" aria-modal="true" aria-labelledby="size-guide-title">
            <button class="size-guide-close" type="button" data-close-size-guide aria-label="Close size guide">X</button>
            <h2 id="size-guide-title">Size Guide</h2>
            <p class="size-guide-copy">Nigerian made Men’s shoes (and boots) are generally made in fittings E, F, G and H and these can be classified simplistically as follows:</p>
            <p class="size-guide-fit-codes">E = NARROW &nbsp; F = REGULAR &nbsp; G = WIDE &nbsp; H = EXTRA WIDE</p>
            <p class="size-guide-copy">The bulk of our styles are made in F fitting, as statistics show that worldwide this is the most appropriate fitting for a majority of males, but we also offer a good selection of G fitting shoes.</p>
            <table class="size-guide-table">
                <thead><tr><th>UK</th><th>EU</th><th>US</th><th>CM</th><th>INCH</th></tr></thead>
                <tbody>
                    <tr><td>6</td><td>40</td><td>7</td><td>25.4</td><td>10</td></tr>
                    <tr><td>6.5</td><td>41</td><td>7.5</td><td>25.8</td><td>10 1/8</td></tr>
                    <tr><td>7</td><td>41 - 42</td><td>8</td><td>26</td><td>10 1/4</td></tr>
                    <tr><td>7.5</td><td>42</td><td>8.5</td><td>26.7</td><td>10 1/2</td></tr>
                    <tr><td>8</td><td>43</td><td>9</td><td>27.3</td><td>10 3/4</td></tr>
                    <tr><td>8.5</td><td>43-44</td><td>9.5</td><td>27.7</td><td>10 7/8</td></tr>
                    <tr><td>9</td><td>44</td><td>10</td><td>27.9</td><td>11</td></tr>
                    <tr><td>9.5</td><td>44-45</td><td>10.5</td><td>28.6</td><td>11 1/4</td></tr>
                    <tr><td>10</td><td>45</td><td>11</td><td>29.2</td><td>11 1/2</td></tr>
                    <tr><td>10.5</td><td>45-46</td><td>11.5</td><td>29.5</td><td>11 5/8</td></tr>
                    <tr><td>11</td><td>46</td><td>12</td><td>29.8</td><td>11 3/4</td></tr>
                    <tr><td>12</td><td>48</td><td>13</td><td>30.5</td><td>12</td></tr>
                    <tr><td>13</td><td>49</td><td>14</td><td>31.1</td><td>12 1/4</td></tr>
                    <tr><td>14</td><td>50</td><td>15</td><td>31.7</td><td>12 1/2</td></tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="{{ asset('js/nelson-interactions.js') }}" defer></script>
</body>

</html>
