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
        <div class="promo-bar">
            <span class="promo-desktop-only">Nationwide delivery across Nigeria on selected orders</span>
            <span class="promo-desktop-only">Lagos, NG</span>
            <span class="promo-mobile-only">Nelson Shoes 🇳🇬</span>
        </div>

        <header class="top-header">
            <button type="button" class="mobile-menu-toggle" aria-label="Toggle navigation" aria-expanded="false">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>
            <div class="mobile-icons">
                <button type="button" aria-label="Search" class="icon-btn">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </button>
                <button type="button" aria-label="Cart" class="icon-btn">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                </button>
            </div>
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
                <div class="header-icons">
                    <button type="button" aria-label="Search" class="icon-btn">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    </button>
                    <button type="button" aria-label="Profile" class="icon-btn">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    </button>
                    <button type="button" aria-label="Cart" class="icon-btn">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                    </button>
                </div>
            </nav>
        </header>

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
                    <img src="{{ asset('images/oxfor-leather-shoe.jpg') }}" alt="Odogwu Oxford leather shoe">
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
                    <img src="{{ asset('images/brown_suede_lohfers.jpg') }}" alt="Brown suede loafer">
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
            </section>

            <section class="categories">
                <a id="mens" class="category-card" href="{{ route('collection') }}#men">
                    <img src="{{ asset('images/brown-man-s-leather-derby-shoes.jpg') }}" alt="Men's bespoke leather shoes">
                    <span class="pill category-pill">Men's Shoes</span>
                </a>
                <a id="womens" class="category-card" href="{{ route('collection') }}#women">
                    <img src="{{ asset('images/brown_suede_lohfers.jpg') }}" alt="Women's handmade loafers">
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
                <div class="drop-belt">
                    @foreach ($latestProducts as $product)
                        <article class="card {{ $product['category'] === 'one-of-one' ? 'card-one-of-one' : '' }}">
                            <div class="card-media"><img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}" loading="eager" decoding="async"></div>
                            <div class="card-copy">
                                <span class="card-flag">{{ $product['badge'] ?? 'New' }}</span>
                                <h3>{{ $product['name'] }}</h3>
                                <p>{{ $product['price'] }}</p>
                                <a class="card-action" href="{{ route('collection') }}#{{ $product['section'] }}">View pair</a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </section>

            <section class="split-feature">
                <div class="split-copy">
                    <span class="section-label">One of One</span>
                    <h2>Rare pairs, never repeated.</h2>
                    <p>Every patina, polish, and sole finish carries the mark of the hand. When a pair leaves the workshop, its exact expression leaves with it.</p>
                    <a class="btn btn-dark" href="{{ route('collection') }}#one-of-one">Explore rare pairs</a>
                </div>
                <div class="split-image">
                    <img src="{{ asset('images/black-shiny-shoe.jpg') }}" alt="High shine black bespoke shoe">
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
                            <a class="btn btn-outline" href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20to%20inquire%20about%20the%20Nelson%20Shoes%20Academy." target="_blank" rel="noreferrer">Ask on WhatsApp</a>
                        </div>
                    </div>
                    <div class="academy-promo-image">
                        <img src="{{ asset('images/shoemaker-workshop-making-shoes academy.jpg') }}" alt="Nelson Shoes Academy workshop">
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
                    <article class="movement-card"><img src="{{ asset('images/brown-man-s-leather-derby-shoes.jpg') }}" alt="Brown derby editorial"></article>
                    <article class="movement-card"><img src="{{ asset('images/shoemaker-workshop-making-shoes academy.jpg') }}" alt="Shoemaking workshop"></article>
                    <article class="movement-card"><img src="{{ asset('images/abbeylein-shoes-wooden_crocs_1920.jpg') }}" alt="Luxury shoe editorial"></article>
                    <article class="movement-card"><img src="{{ asset('images/oxfor-leather-shoe.jpg') }}" alt="Oxford leather shoe"></article>
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

        <footer id="support" class="footer">
            <div class="footer-columns heritage-footer">
                <div>
                    <h4>Shop</h4>
                    <a href="{{ route('collection') }}">Collection</a>
                    <a href="{{ route('collection') }}#one-of-one">One-of-One</a>
                    <a href="{{ route('collection') }}#custom-order">Custom Order</a>
                    <a href="{{ route('collection') }}#accessories">Accessories</a>
                </div>
                <div>
                    <h4>Academy</h4>
                    <a href="{{ route('academy') }}">Masterclass</a>
                    <a href="{{ route('academy') }}#programs">Curriculum</a>
                    <a href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20to%20inquire%20about%20the%20Academy." target="_blank" rel="noreferrer">Enroll</a>
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
                    <a href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20to%20shop%20from%20Nelson%20Shoes." target="_blank" rel="noreferrer">WhatsApp</a>
                </div>
            </div>
            <div class="footer-bottom">Copyright 2026 Nelson Shoes. All Rights Reserved.</div>
        </footer>
    </div>

    <script src="{{ asset('js/nelson-interactions.js') }}" defer></script>
</body>

</html>
