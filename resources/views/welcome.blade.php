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
            <span>Nationwide delivery across Nigeria on selected orders</span>
            <span>Lagos, NG</span>
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
                <a href="#support">Support</a>
            </nav>
        </header>

        <main>
            <section class="hero home-hero">
                <img src="{{ asset('images/vintage-paper-table-shoe-polishing-tools-jobs-career-concept.jpg') }}" alt="Nelson Shoes workshop tools and leather">
                <div class="hero-copy">
                    <span class="eyebrow">Bespoke footwear from Lagos</span>
                    <h1>Nelson Shoes</h1>
                    <p>Hand-finished leather shoes shaped around ceremony, movement, and the discipline of slow craft.</p>
                    <div class="hero-actions">
                        <a class="btn btn-dark" href="{{ route('collection') }}">Shop Collection</a>
                        <a class="btn btn-light" href="{{ route('about') }}">The 86-Hour Philosophy</a>
                    </div>
                </div>
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
                    <article class="card">
                        <div class="card-media"><img src="{{ asset('images/black-shiny-shoe.jpg') }}" alt="Midnight Patent"></div>
                        <div class="card-copy">
                            <span class="card-flag">New</span>
                            <h3>Midnight Patent</h3>
                            <p>N19,999,999</p>
                            <a class="card-action" href="{{ route('collection') }}#one-of-one">View pair</a>
                        </div>
                    </article>
                    <article class="card">
                        <div class="card-media"><img src="{{ asset('images/oxfor-leather-shoe.jpg') }}" alt="Odogwu Oxford"></div>
                        <div class="card-copy">
                            <span class="card-flag">New</span>
                            <h3>Odogwu Oxford</h3>
                            <p>N1,850,000</p>
                            <a class="card-action" href="{{ route('collection') }}#men">View pair</a>
                        </div>
                    </article>
                    <article class="card">
                        <div class="card-media"><img src="{{ asset('images/bridegroom-s-shoes-with-other-wedding-details.jpg') }}" alt="Ivory Ceremony"></div>
                        <div class="card-copy">
                            <span class="card-flag">Limited</span>
                            <h3>Ivory Ceremony</h3>
                            <p>N25,100,000</p>
                            <a class="card-action" href="{{ route('collection') }}#one-of-one">View pair</a>
                        </div>
                    </article>
                    <article class="card">
                        <div class="card-media"><img src="{{ asset('images/brown_suede_lohfers.jpg') }}" alt="Ikoyi Loafer"></div>
                        <div class="card-copy">
                            <span class="card-flag">New</span>
                            <h3>Ikoyi Loafer</h3>
                            <p>N1,999,999</p>
                            <a class="card-action" href="{{ route('collection') }}#men">View pair</a>
                        </div>
                    </article>
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
                    <a href="#">Shipping</a>
                    <a href="#">Returns</a>
                    <a href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20to%20shop%20from%20Nelson%20Shoes." target="_blank" rel="noreferrer">WhatsApp</a>
                </div>
            </div>
            <div class="footer-bottom">Copyright 2026 Nelson Shoes. All Rights Reserved.</div>
        </footer>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const header = document.querySelector('.top-header');
            let idleTimer = null;

            const showHeader = () => header.classList.remove('nav-idle-hidden');
            const hideHeaderIfNotTop = () => {
                if (window.scrollY > 0) {
                    header.classList.add('nav-idle-hidden');
                }
            };

            const scheduleIdleHide = () => {
                if (idleTimer) {
                    window.clearTimeout(idleTimer);
                }
                idleTimer = window.setTimeout(hideHeaderIfNotTop, 900);
            };

            window.addEventListener('scroll', () => {
                showHeader();
                scheduleIdleHide();
            }, { passive: true });

            window.addEventListener('mousemove', (e) => {
                if (e.clientY <= 72) {
                    showHeader();
                    scheduleIdleHide();
                }
            });

            scheduleIdleHide();
        });
    </script>
</body>

</html>
