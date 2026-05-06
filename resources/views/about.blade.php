<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nelson Shoes | About</title>
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
            <section class="about-split">
                <div class="about-image">
                    <img src="{{ asset('images/vintage-paper-table-shoe-polishing-tools-jobs-career-concept.jpg') }}" alt="Nelson Shoes hand tools and leather">
                </div>
                <div class="about-copy">
                    <span class="eyebrow">The 86-hour philosophy</span>
                    <h1>Luxury is measured in hours.</h1>
                    <p>At Nelson Shoes, the work is intentionally slow. The sole alone receives days of manual attention, shaping structure, balance, and finish before the shoe ever reaches the client.</p>
                    <p>The result is a one-of-one object: a pair made through hand-patina artistry, anatomical fitting, and leather selected for depth rather than speed.</p>
                    <a class="btn btn-dark" href="{{ route('collection') }}">Enter the workshop</a>
                </div>
            </section>

            <section id="process" class="section">
                <div class="section-head">
                    <div>
                        <span class="section-label">Process</span>
                        <h2 class="section-title">Three commitments guide every pair.</h2>
                    </div>
                </div>
                <div class="process-grid">
                    <article>
                        <span>01</span>
                        <h3>Hand-Patina Artistry</h3>
                        <p>Color is blended by hand for depth, movement, and a finish no machine can repeat.</p>
                    </article>
                    <article>
                        <span>02</span>
                        <h3>Anatomical Precision</h3>
                        <p>Each pair respects the client foot, correcting fit before beauty becomes visible.</p>
                    </article>
                    <article>
                        <span>03</span>
                        <h3>Material Discipline</h3>
                        <p>Premium leathers are chosen for structure, polish, and long-term character.</p>
                    </article>
                </div>
            </section>

            <section id="heritage" class="split-feature">
                <div class="split-copy">
                    <span class="section-label">Nigerian luxury</span>
                    <h2>Built in Lagos, ready for the global stage.</h2>
                    <p>Nelson Shoes exists to prove that Nigerian craft can stand beside the world's most respected shoemaking houses while keeping its own voice, pace, and standard.</p>
                    <a class="btn btn-outline" href="{{ route('academy') }}">Discover the academy</a>
                </div>
                <div class="split-image">
                    <img src="{{ asset('images/abbeylein-shoes-wooden_crocs_1920.jpg') }}" alt="Nelson Shoes finished pair">
                </div>
            </section>

            <section id="founder" class="section founder-section">
                <div class="founder-editorial">
                    <div class="founder-portrait">
                        <img src="{{ asset('images/shoemaker academy.avif') }}" alt="Founder portrait" loading="eager" decoding="async">
                        <div class="founder-seal">
                            <span>Founder</span>
                            <strong>Nelson</strong>
                        </div>
                    </div>
                    <div class="founder-copy">
                        <span class="section-label">Meet the founder</span>
                        <h2 class="section-title">Nelson Lafog</h2>
                        <p>
                            Nelson Lafog started with a single table, borrowed tools, and a stubborn obsession with how a shoe should feel after the first hour, not the first photo.
                            In his early days in Lagos, he took every repair job he could get, learning the real anatomy of leather under pressure: where it stretches, where it cracks, and
                            where comfort quietly dies. Those nights became a private curriculum. He studied classic silhouettes, experimented with lasts, and rebuilt soles until the lines
                            looked disciplined and the fit stayed honest.
                        </p>
                        <p>
                            Over time, clients stopped asking for "something nice" and started asking for "his work." That shift pushed him from maker to mentor. Nelson built Nelson Shoes
                            on a simple promise: luxury is measured in hours. He refined hand-patina techniques, tightened construction standards, and treated fitting like architecture,
                            not guesswork. As the brand grew, he kept the workshop small enough to protect the standard and loud enough to prove that Nigerian craft belongs on the same
                            shelf as the world's finest.
                        </p>
                        <p>
                            Today, Nelson leads both the workshop and the Academy, training the next generation to respect the slow parts: the cut, the stitch, the balance, and the final
                            polish. His story is not a shortcut story. It is the long one, and that is the point.
                        </p>
                        <div class="founder-points">
                            <span>Lagos workshop</span>
                            <span>Hand-patina craft</span>
                            <span>Academy mentor</span>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="footer">
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
                    <a href="#process">Process</a>
                    <a href="#heritage">Heritage</a>
                    <a href="#founder">Founder</a>
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
