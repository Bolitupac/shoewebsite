<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Everline Shoes | Home</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=oswald:400,500,600,700|manrope:400,500,600,700" rel="stylesheet" />
    <!-- Modular CSS -->
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/buttons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cards.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
    <div class="site-wrap">
        <div class="promo-bar">
            <div class="content-width" style="display:grid;grid-template-columns:1fr auto;align-items:center;gap:14px;">
                <span>Nationwide delivery across Nigeria on selected orders</span>
                <span>Lagos, NG</span>
            </div>
        </div>

        <div class="content-width">
            <header class="top-header">
                <a class="brand" href="{{ route('home') }}">Everline Shoes</a>
                <nav class="header-nav">
                    <a href="#mens">Men</a>
                    <a href="#womens">Women</a>
                    <a href="#new-arrivals">New Arrivals</a>
                    <a href="{{ route('collection') }}">Collection</a>
                    <a href="#sale">Sale</a>
                    <a href="#about">About</a>
                    <a href="#support">Support</a>
                </nav>
                <div class="header-icons">
                    <span>♡</span>
                    <span>👜</span>
                    <span>◌</span>
                </div>
            </header>
        </div>

        <section class="hero">
            <img src="{{ asset('images/vintage-paper-table-shoe-polishing-tools-jobs-career-concept.jpg') }}" alt="Statement shoe hero image">
            <div class="hero-copy">
                <h1>Every Step Tells a Story. Make Yours Unforgettable.</h1>
                <p>
                    Designed for the Nigerian mover who values comfort and craft. Each pair tells its story in clean lines, rich texture, and effortless movement.
                </p>
                <div class="hero-actions">
                    <a class="btn" href="{{ route('collection') }}">Shop Now</a>
                    <a class="btn-link" href="#new-arrivals">Learn more</a>
                </div>
            </div>
        </section>

        <div class="content-width">
            <section class="categories">
                <a id="mens" class="category-card" href="{{ route('collection') }}">
                    <img src="{{ asset('images/brown-man-s-leather-derby-shoes.jpg') }}" alt="Men's shoes category">
                    <span class="pill category-pill">Men's Shoes</span>
                </a>
                <a id="womens" class="category-card" href="{{ route('collection') }}">
                    <img src="{{ asset('images/brown_suede_lohfers.jpg') }}" alt="Women's shoes category">
                    <span class="pill category-pill">Women's Shoes</span>
                </a>
            </section>

            <section id="new-arrivals" class="section">
                <div class="section-head">
                    <h2 class="section-title">Shop The Latest Drop</h2>
                </div>
                <div class="drop-belt">
                    <article class="card">
                        <div class="card-top">
                            <span class="card-flag">New</span>
                            <span class="card-like">♡</span>
                            <img src="{{ asset('images/black-shiny-shoe.jpg') }}" alt="Black techno sneaker">
                        </div>
                        <div class="card-copy">
                            <h3>Techno Fabric</h3>
                            <p>N1,999,999</p>
                            <div class="card-bottom">
                                <span></span>
                                <a class="card-action" href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20to%20order%20the%20Techno%20Fabric%20pair." target="_blank" rel="noreferrer">Add</a>
                            </div>
                        </div>
                    </article>
                    <article class="card">
                        <div class="card-top">
                            <span class="card-flag">New</span>
                            <span class="card-like">♡</span>
                            <img src="{{ asset('images/abbeylein-shoes-wooden_crocs_1920.jpg') }}" alt="Women's statement sneaker">
                        </div>
                        <div class="card-copy">
                            <h3>Victoria Runner</h3>
                            <p>N2,450,000</p>
                            <div class="card-bottom">
                                <span></span>
                                <a class="card-action" href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20to%20order%20the%20Victoria%20Runner." target="_blank" rel="noreferrer">Add</a>
                            </div>
                        </div>
                    </article>
                    <article class="card">
                        <div class="card-top">
                            <span class="card-flag">New</span>
                            <span class="card-like">♡</span>
                            <img src="{{ asset('images/oxfor-leather-shoe.jpg') }}" alt="Luxury suede shoe">
                        </div>
                        <div class="card-copy">
                            <h3>Odogwu Suede</h3>
                            <p>N1,850,000</p>
                            <div class="card-bottom">
                                <span></span>
                                <a class="card-action" href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20to%20order%20the%20Odogwu%20Suede%20pair." target="_blank" rel="noreferrer">Add</a>
                            </div>
                        </div>
                    </article>
                    <article class="card">
                        <div class="card-top">
                            <span class="card-flag">New</span>
                            <span class="card-like">♡</span>
                            <img src="{{ asset('images/bridegroom-s-shoes-with-other-wedding-details.jpg') }}" alt="Formal white line shoe">
                        </div>
                        <div class="card-copy">
                            <h3>Formal White</h3>
                            <p>N2,100,000</p>
                            <div class="card-bottom">
                                <span></span>
                                <a class="card-action" href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20to%20order%20the%20Formal%20White%20pair." target="_blank" rel="noreferrer">Add</a>
                            </div>
                        </div>
                    </article>
                    <article class="card">
                        <div class="card-top">
                            <span class="card-flag">New</span>
                            <span class="card-like">♡</span>
                            <img src="{{ asset('images/brown-man-s-leather-derby-shoes.jpg') }}" alt="Brown leather derby">
                        </div>
                        <div class="card-copy">
                            <h3>Lekki Derby</h3>
                            <p>N1,650,000</p>
                            <div class="card-bottom">
                                <span></span>
                                <a class="card-action" href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20to%20order%20the%20Lekki%20Derby." target="_blank" rel="noreferrer">Add</a>
                            </div>
                        </div>
                    </article>
                    <article class="card">
                        <div class="card-top">
                            <span class="card-flag">New</span>
                            <span class="card-like">♡</span>
                            <img src="{{ asset('images/brown_suede_lohfers.jpg') }}" alt="Brown suede loafers">
                        </div>
                        <div class="card-copy">
                            <h3>Ikoyi Loafer</h3>
                            <p>N1,999,999</p>
                            <div class="card-bottom">
                                <span></span>
                                <a class="card-action" href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20to%20order%20the%20Ikoyi%20Loafer." target="_blank" rel="noreferrer">Add</a>
                            </div>
                        </div>
                    </article>
                    <article class="card">
                        <div class="card-top">
                            <span class="card-flag">New</span>
                            <span class="card-like">♡</span>
                            <img src="{{ asset('images/shoe.webp') }}" alt="Street luxury sneaker">
                        </div>
                        <div class="card-copy">
                            <h3>Naija Street One</h3>
                            <p>N2,750,000</p>
                            <div class="card-bottom">
                                <span></span>
                                <a class="card-action" href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20to%20order%20the%20Naija%20Street%20One." target="_blank" rel="noreferrer">Add</a>
                            </div>
                        </div>
                    </article>
                    <article class="card">
                        <div class="card-top">
                            <span class="card-flag">New</span>
                            <span class="card-like">♡</span>
                            <img src="{{ asset('images/vintage-paper-table-shoe-polishing-tools-jobs-career-concept.jpg') }}" alt="Atelier polish kit shoe">
                        </div>
                        <div class="card-copy">
                            <h3>Atelier Reserve</h3>
                            <p>N3,200,000</p>
                            <div class="card-bottom">
                                <span></span>
                                <a class="card-action" href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20to%20order%20the%20Atelier%20Reserve." target="_blank" rel="noreferrer">Add</a>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            <section class="one-of-one">
                <div class="one-of-one-head">
                    <div>
                        <span class="one-of-one-eyebrow">One of One</span>
                        <h2>Rare Pairs.</h2>
                    </div>
                    <a class="one-of-one-link" href="{{ route('collection') }}#one-of-one">View All</a>
                </div>
                <div class="grid-premium-home">
                    <article class="card-p">
                        <div class="card-p-media">
                            <img src="{{ asset('images/black-shiny-shoe.jpg') }}" alt="Midnight Patent">
                        </div>
                        <span class="card-p-badge">Limited &mdash; 1 of 1</span>
                        <div class="card-p-copy">
                            <h3>Midnight Patent</h3>
                            <p>High-shine black finish crafted for formal statements. One pair only.</p>
                            <div class="card-p-row">
                                <span class="card-p-price">N1,999,999</span>
                                <a class="btn-p" href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20Midnight%20Patent." target="_blank" rel="noreferrer">Order</a>
                            </div>
                        </div>
                    </article>
                    <article class="card-p">
                        <div class="card-p-media">
                            <img src="{{ asset('images/bridegroom-s-shoes-with-other-wedding-details.jpg') }}" alt="Ivory Ceremony">
                        </div>
                        <span class="card-p-badge">Limited &mdash; 1 of 1</span>
                        <div class="card-p-copy">
                            <h3>Ivory Ceremony</h3>
                            <p>Clean white statement pair for weddings, receptions, and private entries.</p>
                            <div class="card-p-row">
                                <span class="card-p-price">N2,100,000</span>
                                <a class="btn-p" href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20Ivory%20Ceremony." target="_blank" rel="noreferrer">Order</a>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            <section class="feature-banner">
                <div class="feature-copy">
                    <h2>Designed for You - The Custom Edition</h2>
                    <p>Personalize your sole, pick your finish, and own your step.</p>
                    <a class="btn" href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20to%20create%20my%20custom%20pair." target="_blank" rel="noreferrer">Create Your Pair</a>
                </div>
                <div class="custom-visual">
                    <img src="{{ asset('images/abbeylein-shoes-wooden_crocs_1920.jpg') }}" alt="Custom edition sneaker">
                </div>
            </section>

            <section class="section">
                <div class="section-head">
                    <h2 class="section-title">Join the Movement</h2>
                </div>

                <div class="movement-grid">
                    <article class="movement-card">
                        <img src="{{ asset('images/black-shiny-shoe.jpg') }}" alt="Editorial styling image one">
                        <div class="movement-meta">
                            <span class="look-link">View Looks</span>
                            <span class="look-link">N1,999,999</span>
                        </div>
                    </article>
                    <article class="movement-card">
                        <img src="{{ asset('images/vintage-paper-table-shoe-polishing-tools-jobs-career-concept.jpg') }}" alt="Editorial styling image two">
                        <div class="movement-meta">
                            <span class="look-link">View Looks</span>
                            <span class="look-link">N3,200,000</span>
                        </div>
                    </article>
                    <article class="movement-card">
                        <img src="{{ asset('images/brown-man-s-leather-derby-shoes.jpg') }}" alt="Editorial styling image three">
                        <div class="movement-meta">
                            <span class="look-link">View Looks</span>
                            <span class="look-link">N1,650,000</span>
                        </div>
                    </article>
                    <article class="movement-card">
                        <img src="{{ asset('images/brown_suede_lohfers.jpg') }}" alt="Editorial styling image four">
                        <div class="movement-meta">
                            <span class="look-link">View Looks</span>
                            <span class="look-link">N1,999,999</span>
                        </div>
                    </article>
                    <article class="movement-card">
                        <img src="{{ asset('images/oxfor-leather-shoe.jpg') }}" alt="Editorial styling image five">
                        <div class="movement-meta">
                            <span class="look-link">View Looks</span>
                            <span class="look-link">N1,850,000</span>
                        </div>
                    </article>
                    <article class="movement-card">
                        <img src="{{ asset('images/bridegroom-s-shoes-with-other-wedding-details.jpg') }}" alt="Editorial styling image six">
                        <div class="movement-meta">
                            <span class="look-link">View Looks</span>
                            <span class="look-link">N2,100,000</span>
                        </div>
                    </article>
                </div>
            </section>

            <section class="newsletter">
                <div class="newsletter-copy">
                    <h2>Get 10% off your first pair. Subscribe for exclusive drops &amp; stories.</h2>
                </div>
                <form class="newsletter-form">
                    <input type="email" placeholder="E-mail Address" aria-label="Email Address">
                    <button type="button">Sign Up</button>
                </form>
            </section>

            <section class="benefits">
                <div class="benefit">
                    <span>◫</span>
                    <strong>Secure Checkout</strong>
                </div>
                <div class="benefit">
                    <span>⌁</span>
                    <strong>Responsive Shipping</strong>
                </div>
                <div class="benefit">
                    <span>⌂</span>
                    <strong>Pick Up In Store</strong>
                </div>
                <div class="benefit">
                    <span>⊞</span>
                    <strong>Store Appointments</strong>
                </div>
            </section>

            <footer class="footer">
                <div class="footer-columns">
                    <div>
                        <h4>Shop</h4>
                        <div class="footer-list">
                            <a href="#mens">Men</a>
                            <a href="#womens">Women</a>
                            <a href="#new-arrivals">New Arrivals</a>
                            <a href="#sale">Sale</a>
                        </div>
                    </div>
                    <div id="support">
                        <h4>Support</h4>
                        <div class="footer-list">
                            <a href="#">FAQ</a>
                            <a href="#">Contact</a>
                            <a href="#">Shipping</a>
                            <a href="#">Returns</a>
                        </div>
                    </div>
                    <div>
                        <h4>Shopping Online</h4>
                        <div class="footer-list">
                            <a href="#">Shipping &amp; Delivery</a>
                            <a href="#">Returns &amp; Exchanges</a>
                            <a href="#">Gift Cards</a>
                            <a href="#">Size Guide</a>
                        </div>
                    </div>
                    <div id="about">
                        <h4>About</h4>
                        <div class="footer-list">
                            <a href="#">Brand Story</a>
                            <a href="#">Sustainability</a>
                            <a href="#">Careers</a>
                        </div>
                    </div>
                    <div>
                        <h4>Social</h4>
                        <div class="footer-list">
                            <a href="#">Facebook</a>
                            <a href="#">X</a>
                            <a href="#">Instagram</a>
                            <a href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20to%20shop%20from%20Everline%20Shoes." target="_blank" rel="noreferrer">WhatsApp</a>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    Certain activities undertaken by EVERLINE SHOES may be licensed under applicable laws and international trademark. Copyright 2026 EVERLINE SHOES. All Rights Reserved.
                </div>
            </footer>
        </div>
    </div>
</body>
</html>
