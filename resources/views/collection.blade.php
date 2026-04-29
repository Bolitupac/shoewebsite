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
        $products = [
            [
                'id' => 'midnight-patent',
                'name' => 'Midnight Patent',
                'price' => 'N19,999,999',
                'category' => 'one-of-one',
                'section' => 'one-of-one',
                'image' => 'images/black-shiny-shoe.jpg',
                'description' => 'High-shine black patent leather built for formal entrances and private ceremonies.',
                'colour' => 'Black Polished Calf',
                'badge' => 'One of One',
            ],
            [
                'id' => 'ivory-ceremony',
                'name' => 'Ivory Ceremony',
                'price' => 'N25,100,000',
                'category' => 'one-of-one',
                'section' => 'one-of-one',
                'image' => 'images/bridegroom-s-shoes-with-other-wedding-details.jpg',
                'description' => 'A bright ceremonial pair shaped for weddings, receptions, and clean evening dress.',
                'colour' => 'Ivory Calf',
                'badge' => 'Limited 1 of 3',
            ],
            [
                'id' => 'odogwu-oxford',
                'name' => 'Odogwu Oxford',
                'price' => 'N1,850,000',
                'category' => 'oxford',
                'section' => 'men',
                'image' => 'images/oxfor-leather-shoe.jpg',
                'description' => 'Structured oxford with a hand-patina finish and disciplined formal silhouette.',
                'colour' => 'Cognac Patina',
                'badge' => 'Oxford',
            ],
            [
                'id' => 'lekki-derby',
                'name' => 'Lekki Derby',
                'price' => 'N1,650,000',
                'category' => 'derby',
                'section' => 'men',
                'image' => 'images/brown-man-s-leather-derby-shoes.jpg',
                'description' => 'A grounded brown derby shaped for business movement and weekend polish.',
                'colour' => 'Brown Burnished Calf',
                'badge' => 'Derby',
            ],
            [
                'id' => 'ikoyi-loafer',
                'name' => 'Ikoyi Loafer',
                'price' => 'N1,999,999',
                'category' => 'loafer',
                'section' => 'men',
                'image' => 'images/brown_suede_lohfers.jpg',
                'description' => 'Soft suede loafer with a composed profile for daily luxury.',
                'colour' => 'Brown Suede',
                'badge' => 'Loafer',
            ],
            [
                'id' => 'soft-loafer',
                'name' => 'Soft Loafer',
                'price' => 'N1,999,999',
                'category' => 'loafer',
                'section' => 'women',
                'image' => 'images/abbeylein-shoes-wooden_crocs_1920.jpg',
                'description' => 'Neutral loafer with a quiet luxury finish and easy day-to-night styling.',
                'colour' => 'Sand Suede',
                'badge' => 'Loafer',
            ],
            [
                'id' => 'formal-white',
                'name' => 'Formal White',
                'price' => 'N2,100,000',
                'category' => 'oxford',
                'section' => 'women',
                'image' => 'images/bridegroom-s-shoes-with-other-wedding-details.jpg',
                'description' => 'Minimal white formal pair for ceremonies and sharp event dressing.',
                'colour' => 'White Calf',
                'badge' => 'Oxford',
            ],
            [
                'id' => 'derby-prime',
                'name' => 'Derby Prime',
                'price' => 'N1,980,000',
                'category' => 'derby',
                'section' => 'newly-made',
                'image' => 'images/brown-man-s-leather-derby-shoes.jpg',
                'description' => 'Latest derby refinement with stronger structure and balanced formal edge.',
                'colour' => 'Dark Tan Calf',
                'badge' => 'Fresh Drop',
                'hidden' => true,
            ],
            [
                'id' => 'jet-black-build',
                'name' => 'Jet Black Build',
                'price' => 'N2,080,000',
                'category' => 'oxford',
                'section' => 'newly-made',
                'image' => 'images/black-shiny-shoe.jpg',
                'description' => 'New-season black finish with sharper detailing and formal energy.',
                'colour' => 'Jet Black Calf',
                'badge' => 'Fresh Drop',
                'hidden' => true,
            ],
            [
                'id' => 'heritage-belt',
                'name' => 'Heritage Belt',
                'price' => 'N180,000',
                'category' => 'belt',
                'section' => 'accessories',
                'image' => 'images/brown-man-s-leather-derby-shoes.jpg',
                'description' => 'Full-grain leather belt with a clean buckle finish built for formal wear.',
                'colour' => 'Brown',
                'badge' => 'Belt',
            ],
            [
                'id' => 'calf-wallet',
                'name' => 'Calf Wallet',
                'price' => 'N140,000',
                'category' => 'wallet',
                'section' => 'accessories',
                'image' => 'images/black-shiny-shoe.jpg',
                'description' => 'Slim calf leather wallet with disciplined stitching and quiet structure.',
                'colour' => 'Black',
                'badge' => 'Wallet',
            ],
        ];
    @endphp

    <div class="site-wrap">
        <div class="promo-bar">
            <span>Bespoke orders open for Lagos fittings</span>
            <span>Nelson Shoes</span>
        </div>

        <header class="top-header">
            <nav class="header-nav header-nav-left" aria-label="Primary left">
                <a class="{{ request()->routeIs('home') ? 'is-active' : '' }}" href="{{ route('home') }}">Home</a>
                <a href="{{ route('home') }}#mens">Men</a>
                <a href="{{ route('home') }}#womens">Women</a>
                <a href="{{ route('collection') }}#accessories">Accessories</a>
            </nav>
            <a class="brand brand-centered" href="{{ route('home') }}">Nelson Shoes</a>
            <nav class="header-nav header-nav-right" aria-label="Primary right">
                <a class="{{ request()->routeIs('collection') ? 'is-active' : '' }}" href="{{ route('collection') }}">Collection</a>
                <a class="{{ request()->routeIs('academy') ? 'is-active' : '' }}" href="{{ route('academy') }}">Academy</a>
                <a class="{{ request()->routeIs('about') ? 'is-active' : '' }}" href="{{ route('about') }}">About</a>
                <a class="{{ request()->routeIs('support') ? 'is-active' : '' }}" href="{{ route('support') }}">Support</a>
            </nav>
        </header>

        <main>
            <section class="collection-hero">
                <div>
                    <span class="eyebrow">The workshop selection</span>
                    <h1>Collection</h1>
                    <p>Sharp formal pairs, quiet loafers, and one-of-one patina work made for clients who notice the hours.</p>
                </div>
                <a class="btn btn-dark" href="#custom-order">Start custom order</a>
            </section>

            <section class="collection-shell">
                <aside class="filter-sidebar" aria-label="Sort and filter">
                    <div class="filter-panel" data-filter-panel>
                        <button class="filter-toggle" type="button" data-filter-toggle aria-expanded="false">Sort &amp; Filter</button>
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
                </aside>

                <div class="collection-content">
                    <section id="custom-order" class="custom-order">
                        <span class="eyebrow">Custom Order</span>
                        <h2>Build a pair around your event, stance, and size.</h2>
                        <p>Send your preferred leather, color direction, occasion, and sizing notes. The workshop will guide the next step on WhatsApp.</p>
                        <div class="section-actions">
                            <a class="btn btn-dark" href="https://wa.me/{{ $whatsappNumber }}?text=Hello%2C%20I%20want%20to%20place%20a%20custom%20Nelson%20Shoes%20order." target="_blank" rel="noreferrer">Start Custom Order</a>
                            <a class="btn btn-outline" href="https://wa.me/{{ $whatsappNumber }}?text=Hello%2C%20I%20want%20to%20ask%20about%20custom%20shoe%20designs." target="_blank" rel="noreferrer">Ask a Question</a>
                        </div>
                    </section>

                    @foreach (['one-of-one' => 'Rare Pairs.', 'men' => 'Men.', 'women' => 'Women.', 'newly-made' => 'Fresh Drop.', 'accessories' => 'Wallets & Belts.'] as $section => $title)
                        <section id="{{ $section }}" class="catalog-section">
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
                                    <article class="product-card card {{ !empty($product['hidden']) ? 'card-hidden' : '' }}"
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

        <footer class="footer">
            <div class="footer-columns heritage-footer">
                <div>
                    <h4>Shop</h4>
                    <a href="{{ route('collection') }}">Collection</a>
                    <a href="#one-of-one">One-of-One</a>
                    <a href="#custom-order">Custom Order</a>
                    <a href="#accessories">Accessories</a>
                </div>
                <div>
                    <h4>Academy</h4>
                    <a href="{{ route('academy') }}">Masterclass</a>
                    <a href="{{ route('academy') }}#programs">Curriculum</a>
                    <a href="https://wa.me/{{ $whatsappNumber }}?text=Hello%2C%20I%20want%20to%20inquire%20about%20the%20Academy." target="_blank" rel="noreferrer">Enroll</a>
                </div>
                <div>
                    <h4>About</h4>
                    <a href="{{ route('about') }}">86-Hour Philosophy</a>
                    <a href="{{ route('about') }}#process">Process</a>
                    <a href="{{ route('about') }}#heritage">Heritage</a>
                </div>
                <div>
                    <h4>Support</h4>
                    <a href="{{ route('support') }}">Shipping</a>
                    <a href="{{ route('support') }}">Returns</a>
                    <a href="https://wa.me/{{ $whatsappNumber }}?text=Hello%2C%20I%20want%20to%20shop%20from%20Nelson%20Shoes." target="_blank" rel="noreferrer">WhatsApp</a>
                </div>
            </div>
            <div class="footer-bottom">Copyright 2026 Nelson Shoes. All Rights Reserved.</div>
        </footer>
    </div>

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
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
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

    <script src="{{ asset('js/nelson-interactions.js') }}" defer></script>
</body>

</html>
