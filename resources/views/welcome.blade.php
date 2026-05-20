<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nelson Shoes | Bespoke Nigerian Shoemaking</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=oswald:400,500,600,700|manrope:400,500,600,700" rel="stylesheet" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon-n.svg') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/everline.css') }}">
</head>

<body>
    <div class="site-wrap">
        @include('partials.header')

        <main>
            <section class="hero home-hero hero-rotator" data-hero-rotator>
                <article class="hero-slide is-active" data-hero-slide>
                    <img src="{{ asset('images/black-shiny-shoe.jpg') }}" alt="Midnight Patent one-of-one shoe" fetchpriority="high">
                    <div class="hero-copy">
                        <span class="eyebrow">One-of-one formalwear</span>
                        <h1>Midnight Patent</h1>
                        <p>A high-shine black statement pair built for private ceremonies, sharp suits, and rooms that notice detail.</p>
                        <div class="hero-actions">
                            <a class="btn btn-dark" href="{{ route('collection') }}#one-of-one">View rare pairs</a>
                            <a class="btn btn-light" href="{{ route('about') }}">The 86-Hour Philosophy</a>
                        </div>
                    </div>
                </article>
                <article class="hero-slide" data-hero-slide>
                    <img src="{{ asset('images/oxfor-leather-shoe.jpg') }}" alt="Odogwu Oxford leather shoe" loading="lazy">
                    <div class="hero-copy">
                        <span class="eyebrow">Hand-patina craft</span>
                        <h1>Odogwu Oxford</h1>
                        <p>Structured leather, warm patina, and a disciplined silhouette for everyday power dressing.</p>
                        <div class="hero-actions">
                            <a class="btn btn-dark" href="{{ route('collection') }}#men">Shop Oxfords</a>
                            <a class="btn btn-light" href="{{ route('academy') }}">Learn the craft</a>
                        </div>
                    </div>
                </article>
                <article class="hero-slide" data-hero-slide>
                    <img src="{{ asset('images/brown_suede_lohfers.jpg') }}" alt="Brown suede loafer" loading="lazy">
                    <div class="hero-copy">
                        <span class="eyebrow">Soft luxury</span>
                        <h1>Ikoyi Loafer</h1>
                        <p>A quieter profile in rich suede, made for clean weekends, gallery evenings, and Lagos movement.</p>
                        <div class="hero-actions">
                            <a class="btn btn-dark" href="{{ route('collection') }}#men">Shop loafers</a>
                            <a class="btn btn-light" href="{{ route('collection') }}#accessories">View accessories</a>
                        </div>
                    </div>
                </article>
                <div class="hero-rotator-controls">
                    <button type="button" class="hero-rotator-btn hero-rotator-btn-prev" data-hero-prev aria-label="Previous slide">&lt;</button>
                    <button type="button" class="hero-rotator-btn hero-rotator-btn-next" data-hero-next aria-label="Next slide">&gt;</button>
                </div>
                <div class="hero-rotator-dots" data-hero-dots aria-label="Hero slide indicators"></div>
            </section>

            <section class="categories">
                <a id="mens" class="category-card" href="{{ route('collection') }}#men">
                    <img src="{{ asset('images/brown-man-s-leather-derby-shoes.jpg') }}" alt="Men's bespoke leather shoes" loading="lazy">
                    <span class="pill category-pill">Men's Shoes</span>
                </a>
                <a id="womens" class="category-card" href="{{ route('collection') }}#women">
                    <img src="{{ asset('images/brown_suede_lohfers.jpg') }}" alt="Women's handmade loafers" loading="lazy">
                    <span class="pill category-pill">Women's Shoes</span>
                </a>
            </section>

            <section id="new-arrivals" class="section">
                <div class="section-head">
                    <div>
                        <span class="section-label">Latest Drop</span>
                        <h2 class="section-title">Workshop arrivals.</h2>
                    </div>
                    <a class="text-link" href="{{ route('collection') }}">View all</a>
                </div>
                <div class="arrivals-belt-wrap">
                    <div class="arrivals-nav mobile-only-arrivals-nav">
                        <button type="button" class="arrivals-nav-btn arrivals-nav-btn-prev" data-arrivals-prev aria-label="Scroll arrivals left">&lt;</button>
                        <button type="button" class="arrivals-nav-btn arrivals-nav-btn-next" data-arrivals-next aria-label="Scroll arrivals right">&gt;</button>
                    </div>
                    <div class="drop-belt" data-arrivals-belt>
                        @foreach ($latestProducts as $product)
                            <article class="card {{ !empty($product['limited_edition']) ? 'card-one-of-one' : '' }}">
                                <div class="card-media">
                                    @if(!empty($product['sold_out']))
                                        <span class="card-badge sold-out">Sold Out</span>
                                    @endif
                                    <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}" loading="eager" decoding="async">
                                </div>
                                <div class="card-copy">
                                    @php
                                        $cardFlag = null;
                                        if (!empty($product['limited_edition'])) {
                                            if (!empty($product['limited_edition_count']) && $product['limited_edition_count'] == 1) {
                                                $cardFlag = 'One of One';
                                            } elseif (!empty($product['limited_edition_count'])) {
                                                $cardFlag = 'Limited to ' . $product['limited_edition_count'] . ' Pairs';
                                            } else {
                                                $cardFlag = 'Limited Edition';
                                            }
                                        } elseif (!empty($product['created_at']) && \Illuminate\Support\Carbon::parse($product['created_at'])->gt(\Illuminate\Support\Carbon::now()->subDays(21))) {
                                            $cardFlag = 'Fresh Drop';
                                        }
                                    @endphp
                                    <span class="card-flag">{{ $cardFlag ?? 'New' }}</span>
                                    <h3>{{ $product['name'] }}</h3>
                                    <p>₦{{ number_format((float)$product['price'], 0) }}</p>
                                    <a class="card-action" href="{{ route('collection') }}?product={{ $product['id'] }}#{{ $product['section'] }}">View pair</a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    <div class="arrivals-dots mobile-only-arrivals-dots" data-arrivals-dots aria-label="Arrivals slide indicators"></div>
                </div>
            </section>

            <section class="split-feature feature-one-of-one">
                <div class="split-copy">
                    <span class="section-label">One of One</span>
                    <h2>Rare pairs, never repeated.</h2>
                    <p>Every patina, polish, and sole finish carries the mark of the hand. When a pair leaves the workshop, its exact expression leaves with it.</p>
                    <a class="btn btn-dark" href="{{ route('collection') }}#one-of-one">Explore rare pairs</a>
                </div>
                <div class="split-image">
                    <img src="{{ asset('images/black-shiny-shoe.jpg') }}" alt="High shine black bespoke shoe" loading="lazy">
                </div>
            </section>

            <section class="section academy-promo">
                <div class="section-head">
                    <div>
                        <span class="section-label">Academy</span>
                        <h2 class="section-title">Learn from the best.</h2>
                    </div>
                    <a class="text-link" href="{{ route('academy') }}">Explore</a>
                </div>
                <div class="academy-promo-grid">
                    <div>
                        <p>Train under a workshop philosophy built on leather anatomy, structural integrity, and the art of patina. Limited spaces, serious instruction.</p>
                        <div class="section-actions">
                            <a class="btn btn-dark" href="{{ route('academy') }}">View the masterclass</a>
                            <a class="btn btn-outline" href="https://wa.me/2347037371590?text=Hello%2C%20I%20want%20to%20inquire%20about%20the%20Nelson%20Shoes%20Academy." target="_blank" rel="noreferrer">Ask on WhatsApp</a>
                        </div>
                    </div>
                    <div class="academy-promo-image">
                        <img src="{{ asset('images/shoemaker-workshop-making-shoes academy.jpg') }}" alt="Nelson Shoes Academy workshop" loading="lazy">
                    </div>
                </div>
            </section>

            <section class="section editorial-strip">
                <div class="section-head">
                    <div>
                        <span class="section-label">Heritage</span>
                        <h2 class="section-title">Built for ceremony, pressure, and presence.</h2>
                    </div>
                </div>
                <div class="movement-grid">
                    <article class="movement-card"><img src="{{ asset('images/brown-man-s-leather-derby-shoes.jpg') }}" alt="Brown derby editorial" loading="lazy"></article>
                    <article class="movement-card"><img src="{{ asset('images/shoemaker-workshop-making-shoes academy.jpg') }}" alt="Shoemaking workshop" loading="lazy"></article>
                    <article class="movement-card"><img src="{{ asset('images/abbeylein-shoes-wooden_crocs_1920.jpg') }}" alt="Luxury shoe editorial" loading="lazy"></article>
                    <article class="movement-card"><img src="{{ asset('images/oxfor-leather-shoe.jpg') }}" alt="Oxford leather shoe" loading="lazy"></article>
                </div>
            </section>

            <section class="newsletter">
                <div class="newsletter-copy">
                    <span class="section-label">Private list</span>
                    <h2>Receive releases, fittings, and academy openings first.</h2>
                </div>
                <form class="newsletter-form">
                    <input type="email" placeholder="Email address" aria-label="Email Address">
                    <button type="button">Sign Up</button>
                </form>
            </section>
        </main>
        @include('partials.footer')
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

    @include('partials.cart')

    <script src="{{ asset('js/nelson-interactions.js') }}" defer></script>
</body>

</html>
