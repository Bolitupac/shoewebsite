<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Everline Shoes | Home</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=oswald:400,500,600,700|manrope:400,500,600,700" rel="stylesheet" />
    <style>
        :root {
            --bg: #f5f2ec;
            --page: #f5f2ec;
            --surface: #ffffff;
            --soft: #f0ece6;
            --ink: #111111;
            --muted: #6a6a6a;
            --line: #ded8cf;
            --accent: #b08a61;
            --hero: #071421;
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: 'Manrope', sans-serif;
            background: var(--bg);
            color: var(--ink);
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        img {
            display: block;
            width: 100%;
        }

        .site-wrap {
            width: 100%;
            margin: 0;
            background: var(--surface);
        }

        .promo-bar {
            min-height: 28px;
            display: grid;
            grid-template-columns: 1fr auto;
            align-items: center;
            gap: 14px;
            padding: 0 24px;
            background: #000;
            color: #fff;
            font-size: 0.62rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        .content-width {
            width: 100%;
            margin: 0 auto;
        }

        .top-header {
            display: grid;
            grid-template-columns: auto 1fr auto;
            align-items: center;
            gap: 24px;
            min-height: 56px;
            padding: 0 24px;
            border-bottom: 1px solid var(--line);
        }

        .brand {
            font-family: 'Oswald', sans-serif;
            font-size: 1.05rem;
            letter-spacing: 0.03em;
            text-transform: uppercase;
        }

        .header-icons {
            display: flex;
            align-items: center;
            gap: 12px;
            color: var(--muted);
            font-size: 0.82rem;
            justify-self: end;
        }

        .header-nav {
            display: flex;
            justify-content: center;
            gap: 26px;
            font-size: 0.76rem;
            min-width: 0;
        }

        .header-nav a,
        .footer-columns a,
        .card-action,
        .look-link {
            color: var(--muted);
            transition: color 220ms ease;
        }

        .header-nav a:hover,
        .footer-columns a:hover,
        .card-action:hover,
        .look-link:hover {
            color: var(--ink);
        }

        .hero {
            position: relative;
            min-height: 540px;
            overflow: hidden;
            background: var(--hero);
        }

        .hero img {
            position: absolute;
            inset: 0;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .hero::after {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(4, 10, 18, 0.54);
        }

        .hero-copy {
            position: relative;
            z-index: 1;
            max-width: 640px;
            margin-left: 56px;
            padding: 108px 0 84px;
            color: #fff;
        }

        .hero h1,
        .section-title,
        .feature-copy h2,
        .newsletter-copy h2 {
            margin: 0;
            font-family: 'Oswald', sans-serif;
            text-transform: none;
            letter-spacing: -0.02em;
            line-height: 0.96;
        }

        .hero h1 {
            font-size: clamp(3.2rem, 8vw, 5.8rem);
            max-width: 560px;
        }

        .hero p,
        .feature-copy p,
        .newsletter-copy p,
        .custom-copy p {
            max-width: 560px;
            margin-top: 18px;
            color: rgba(255, 255, 255, 0.82);
            line-height: 1.7;
            font-size: 0.9rem;
        }

        .hero-actions,
        .section-arrows,
        .look-actions,
        .newsletter-form,
        .benefits {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px;
        }

        .hero-actions {
            margin-top: 28px;
        }

        .btn,
        .btn-light,
        .btn-link,
        .pill {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 40px;
            padding: 0 16px;
            font-size: 0.76rem;
            font-weight: 700;
            border: 1px solid transparent;
        }

        .btn {
            background: #fff;
            color: #111;
        }

        .btn-light {
            background: transparent;
            color: #fff;
            border-color: rgba(255, 255, 255, 0.26);
        }

        .btn-link {
            padding: 0;
            min-height: auto;
            font-weight: 600;
            color: #fff;
        }

        .pill {
            min-height: 30px;
            border-color: rgba(17, 17, 17, 0.16);
            background: rgba(255, 255, 255, 0.72);
            font-weight: 600;
        }

        .section {
            padding: 28px 24px 0;
        }

        .categories,
        .product-grid,
        .movement-grid,
        .footer-columns {
            display: grid;
            gap: 0;
        }

        .categories {
            grid-template-columns: 1fr 1fr;
            background: var(--soft);
        }

        .category-card,
        .movement-card {
            position: relative;
            overflow: hidden;
            min-height: 420px;
        }

        .category-card img,
        .card img,
        .movement-card img,
        .custom-visual img {
            height: 100%;
            object-fit: cover;
            transition: transform 1400ms ease;
            will-change: transform;
        }

        .category-card:hover img,
        .card:hover img,
        .movement-card:hover img,
        .custom-visual:hover img {
            transform: scale(1.05);
        }

        .category-card,
        .movement-card,
        .card-top,
        .custom-visual {
            contain: layout;
        }

        .category-pill {
            position: absolute;
            bottom: 18px;
            left: 50%;
            transform: translateX(-50%);
        }

        .section-head {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 18px;
        }

        .section-title {
            font-size: clamp(2rem, 4vw, 2.8rem);
        }

        .section-arrows span {
            width: 34px;
            height: 34px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--line);
            font-size: 1rem;
            background: #fff;
            cursor: pointer;
        }

        .drop-belt {
            display: flex;
            gap: 18px;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
            padding: 0 24px 16px;
            scrollbar-width: none;
        }

        .drop-belt::-webkit-scrollbar {
            display: none;
        }

        .drop-belt .card {
            flex: 0 0 260px;
            scroll-snap-align: start;
        }

        .card {
            border: 1px solid var(--line);
            background: #fff;
            overflow: hidden;
        }

        .card-top {
            position: relative;
            background: #f6f4f1;
            height: 300px;
            overflow: hidden;
        }

        .card-flag,
        .card-like {
            position: absolute;
            top: 12px;
            font-size: 0.62rem;
            text-transform: uppercase;
            color: var(--muted);
        }

        .card-flag {
            left: 12px;
        }

        .card-like {
            right: 12px;
        }

        .card-copy {
            padding: 14px 14px 16px;
        }

        .card-copy h3 {
            margin: 10px 0 8px;
            font-size: 0.92rem;
            font-weight: 600;
        }

        .card-copy p {
            margin: 0;
            font-size: 0.86rem;
            color: var(--muted);
        }

        .card-bottom {
            margin-top: 12px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            font-size: 0.82rem;
        }



        .feature-banner,
        .newsletter {
            display: grid;
            grid-template-columns: 1fr 0.9fr;
            gap: 24px;
            align-items: center;
            padding: 34px 24px;
            background: var(--soft);
            margin-top: 34px;
        }

        .feature-copy,
        .newsletter-copy {
            display: grid;
            gap: 12px;
            justify-items: center;
            text-align: center;
        }

        .feature-copy h2,
        .newsletter-copy h2 {
            font-size: clamp(2rem, 5vw, 3rem);
            max-width: 520px;
        }

        .feature-copy p,
        .newsletter-copy p {
            color: var(--muted);
            max-width: 420px;
            margin-top: 0;
        }

        .feature-copy .btn,
        .newsletter-form button {
            border: 1px solid var(--ink);
            background: #fff;
        }

        .custom-visual {
            min-height: 240px;
            overflow: hidden;
        }

        .movement-grid {
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
        }

        .movement-card {
            border: 1px solid var(--line);
            background: #faf8f5;
            min-height: 370px;
        }

        .movement-meta {
            position: absolute;
            left: 12px;
            right: 12px;
            bottom: 12px;
            display: flex;
            justify-content: space-between;
            gap: 8px;
        }

        .look-link {
            background: rgba(255, 255, 255, 0.84);
            border: 1px solid rgba(17, 17, 17, 0.16);
            font-size: 0.66rem;
            font-weight: 700;
            padding: 8px 10px;
        }

        .newsletter {
            margin-top: 34px;
        }

        .newsletter-form {
            justify-content: center;
            gap: 0;
        }

        .newsletter-form input {
            width: min(320px, 100%);
            min-height: 44px;
            padding: 0 14px;
            border: none;
            border-bottom: 1px solid var(--ink);
            background: transparent;
            font: inherit;
        }

        .newsletter-form button {
            min-height: 44px;
            padding: 0 14px;
            font-size: 0.72rem;
            font-weight: 700;
        }

        .benefits {
            justify-content: space-between;
            gap: 18px;
            padding: 24px 24px 0;
            color: var(--muted);
            font-size: 0.84rem;
        }

        .benefit {
            display: grid;
            justify-items: center;
            gap: 8px;
            text-align: center;
            flex: 1 1 0;
        }

        .benefit strong {
            color: var(--ink);
            font-size: 0.84rem;
        }

        .footer {
            margin-top: 24px;
            border-top: 1px solid var(--line);
            background: #fff;
        }

        /* One-of-One premium section */
        .one-of-one {
            margin-top: 34px;
        }

        .one-of-one-head {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 16px;
            padding: 0 24px 18px;
        }

        .one-of-one-eyebrow {
            display: inline-block;
            margin-bottom: 8px;
            font-size: 0.7rem;
            font-weight: 800;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: var(--accent);
        }

        .one-of-one-head h2 {
            margin: 0;
            font-family: 'Oswald', sans-serif;
            font-size: clamp(2rem, 4vw, 2.8rem);
            line-height: 0.96;
        }

        .one-of-one-link {
            font-size: 0.76rem;
            font-weight: 700;
            color: var(--muted);
            white-space: nowrap;
            border-bottom: 1px solid var(--line);
            padding-bottom: 2px;
            transition: color 200ms ease;
        }

        .one-of-one-link:hover {
            color: var(--ink);
        }

        .grid-premium-home {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2px;
        }

        .card-p {
            position: relative;
            overflow: hidden;
            background: #0d0d0d;
            contain: layout;
        }

        .card-p-media {
            height: 520px;
            overflow: hidden;
            contain: layout;
        }

        .card-p-media img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            transition: transform 1400ms ease;
            will-change: transform;
            filter: brightness(0.88);
        }

        .card-p:hover .card-p-media img {
            transform: scale(1.06);
        }

        .card-p-badge {
            position: absolute;
            top: 20px;
            left: 20px;
            background: var(--accent);
            color: #fff;
            font-size: 0.6rem;
            font-weight: 800;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            padding: 5px 10px;
        }

        .card-p-copy {
            padding: 22px 24px 26px;
            background: #111;
            color: #fff;
        }

        .card-p-copy h3 {
            margin: 0 0 8px;
            font-size: 1.6rem;
            line-height: 1;
            color: #fff;
            font-family: 'Oswald', sans-serif;
            font-weight: 600;
        }

        .card-p-copy p {
            margin: 0 0 16px;
            font-size: 0.84rem;
            color: rgba(255, 255, 255, 0.55);
            line-height: 1.6;
        }

        .card-p-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
        }

        .card-p-price {
            font-family: 'Oswald', sans-serif;
            font-size: 1.2rem;
            color: var(--accent);
            letter-spacing: 0.02em;
        }

        .btn-p {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 38px;
            padding: 0 20px;
            font-size: 0.72rem;
            font-weight: 800;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            background: var(--accent);
            color: #fff;
            border: none;
            transition: background 220ms ease;
        }

        .btn-p:hover {
            background: #c9a070;
        }

        @media (max-width: 760px) {
            .grid-premium-home {
                grid-template-columns: 1fr;
            }

            .card-p-media {
                height: 380px;
            }
        }

        .footer-columns {
            grid-template-columns: repeat(5, 1fr);
            gap: 24px;
            padding: 28px 24px;
        }

        .footer-columns h4 {
            margin: 0 0 14px;
            font-size: 0.92rem;
        }

        .footer-list {
            display: grid;
            gap: 10px;
            font-size: 0.8rem;
        }

        .footer-columns > div {
            padding: 0 24px;
        }

        .footer-bottom {
            background: #000;
            color: rgba(255, 255, 255, 0.78);
            font-size: 0.66rem;
            padding: 10px 24px;
            text-align: center;
        }

        @media (max-width: 1100px) {
            .product-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .movement-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .feature-banner,
            .newsletter,
            .footer-columns {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 760px) {
            .site-wrap {
                width: 100%;
                margin: 0;
            }

            .promo-bar,
            .top-header,
            .main-nav,
            .section,
            .feature-banner,
            .newsletter,
            .benefits,
            .footer-columns,
            .footer-bottom {
                padding-left: 14px;
                padding-right: 14px;
            }

            .top-header {
                grid-template-columns: 1fr;
                justify-items: start;
                padding-top: 10px;
                padding-bottom: 10px;
            }

            .top-header {
                gap: 12px;
            }

            .top-header {
                position: sticky;
                top: 0;
                z-index: 1000;
                transition: transform 0.3s ease-in-out;
                background: #fff;
            }

            .nav-hidden {
                transform: translateY(-100%);
            }

            .header-nav {
                justify-content: flex-start;
                overflow-x: auto;
                white-space: nowrap;
                width: 100%;
            }

            .hero-copy {
                margin-left: 18px;
                padding: 72px 0 42px;
            }

            .categories,
            .product-grid,
            .movement-grid,
            .feature-banner,
            .newsletter,
            .footer-columns {
                grid-template-columns: 1fr;
            }

            .benefits {
                flex-direction: column;
            }
        }
    </style>
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
                    <a href="{{ route('collection') }}">Collection</a>
                    <a href="{{ route('academy') }}">Academy</a>
                    <a href="{{ route('about') }}">About</a>
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
            <img src="{{ asset('images/vintage-paper-table-shoe-polishing-tools-jobs-career-concept.jpg') }}"
                alt="Statement shoe hero image">
            <div class="hero-copy">
                <h1>Every Step Tells a Story. Make Yours Unforgettable.</h1>
                <p>
                    Designed for the Nigerian mover who values comfort and craft. Each pair tells its story in clean
                    lines, rich texture, and effortless movement.
                </p>
                <div class="hero-actions">
                    <a class="btn" href="{{ route('collection') }}">Shop Now</a>
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
                                <a class="card-action"
                                    href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20to%20order%20the%20Techno%20Fabric%20pair."
                                    target="_blank" rel="noreferrer">Add</a>
                            </div>
                        </div>
                    </article>
                    <article class="card">
                        <div class="card-top">
                            <span class="card-flag">New</span>
                            <span class="card-like">♡</span>
                            <img src="{{ asset('images/abbeylein-shoes-wooden_crocs_1920.jpg') }}"
                                alt="Women's statement sneaker">
                        </div>
                        <div class="card-copy">
                            <h3>Victoria Runner</h3>
                            <p>N2,450,000</p>
                            <div class="card-bottom">
                                <span></span>
                                <a class="card-action"
                                    href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20to%20order%20the%20Victoria%20Runner."
                                    target="_blank" rel="noreferrer">Add</a>
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
                                <a class="card-action"
                                    href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20to%20order%20the%20Odogwu%20Suede%20pair."
                                    target="_blank" rel="noreferrer">Add</a>
                            </div>
                        </div>
                    </article>
                    <article class="card">
                        <div class="card-top">
                            <span class="card-flag">New</span>
                            <span class="card-like">♡</span>
                            <img src="{{ asset('images/bridegroom-s-shoes-with-other-wedding-details.jpg') }}"
                                alt="Formal white line shoe">
                        </div>
                        <div class="card-copy">
                            <h3>Formal White</h3>
                            <p>N2,100,000</p>
                            <div class="card-bottom">
                                <span></span>
                                <a class="card-action"
                                    href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20to%20order%20the%20Formal%20White%20pair."
                                    target="_blank" rel="noreferrer">Add</a>
                            </div>
                        </div>
                    </article>
                    <article class="card">
                        <div class="card-top">
                            <span class="card-flag">New</span>
                            <span class="card-like">♡</span>
                            <img src="{{ asset('images/brown-man-s-leather-derby-shoes.jpg') }}"
                                alt="Brown leather derby">
                        </div>
                        <div class="card-copy">
                            <h3>Lekki Derby</h3>
                            <p>N1,650,000</p>
                            <div class="card-bottom">
                                <span></span>
                                <a class="card-action"
                                    href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20to%20order%20the%20Lekki%20Derby."
                                    target="_blank" rel="noreferrer">Add</a>
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
                                <a class="card-action"
                                    href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20to%20order%20the%20Ikoyi%20Loafer."
                                    target="_blank" rel="noreferrer">Add</a>
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
                                <a class="card-action"
                                    href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20to%20order%20the%20Naija%20Street%20One."
                                    target="_blank" rel="noreferrer">Add</a>
                            </div>
                        </div>
                    </article>
                    <article class="card">
                        <div class="card-top">
                            <span class="card-flag">New</span>
                            <span class="card-like">♡</span>
                            <img src="{{ asset('images/vintage-paper-table-shoe-polishing-tools-jobs-career-concept.jpg') }}"
                                alt="Atelier polish kit shoe">
                        </div>
                        <div class="card-copy">
                            <h3>Atelier Reserve</h3>
                            <p>N3,200,000</p>
                            <div class="card-bottom">
                                <span></span>
                                <a class="card-action"
                                    href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20to%20order%20the%20Atelier%20Reserve."
                                    target="_blank" rel="noreferrer">Add</a>
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
                                <a class="btn-p"
                                    href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20Midnight%20Patent."
                                    target="_blank" rel="noreferrer">Order</a>
                            </div>
                        </div>
                    </article>
                    <article class="card-p">
                        <div class="card-p-media">
                            <img src="{{ asset('images/bridegroom-s-shoes-with-other-wedding-details.jpg') }}"
                                alt="Ivory Ceremony">
                        </div>
                        <span class="card-p-badge">Limited &mdash; 1 of 3</span>
                        <div class="card-p-copy">
                            <h3>Ivory Ceremony</h3>
                            <p>Clean white statement pair for weddings, receptions, and private entries.</p>
                            <div class="card-p-row">
                                <span class="card-p-price">N2,100,000</span>
                                <a class="btn-p"
                                    href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20Ivory%20Ceremony."
                                    target="_blank" rel="noreferrer">Order</a>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            <section class="feature-banner">
                <div class="feature-copy">
                    <h2>Designed for You - The Custom Edition</h2>
                    <p>Personalize your sole, pick your finish, and own your step.</p>
                    <a class="btn"
                        href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20to%20create%20my%20custom%20pair."
                        target="_blank" rel="noreferrer">Create Your Pair</a>
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
                        <img src="{{ asset('images/vintage-paper-table-shoe-polishing-tools-jobs-career-concept.jpg') }}"
                            alt="Editorial styling image two">
                        <div class="movement-meta">
                            <span class="look-link">View Looks</span>
                            <span class="look-link">N3,200,000</span>
                        </div>
                    </article>
                    <article class="movement-card">
                        <img src="{{ asset('images/brown-man-s-leather-derby-shoes.jpg') }}"
                            alt="Editorial styling image three">
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
                        <img src="{{ asset('images/bridegroom-s-shoes-with-other-wedding-details.jpg') }}"
                            alt="Editorial styling image six">
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
                            <a href="{{ route('collection') }}">Collection</a>
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
                            <a href="#">Shipping & Delivery</a>
                            <a href="#">Returns & Exchanges</a>
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
                            <a href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20to%20shop%20from%20Everline%20Shoes."
                                target="_blank" rel="noreferrer">WhatsApp</a>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    Certain activities undertaken by EVERLINE SHOES may be licensed under applicable laws and
                    international trademark. Copyright 2026 EVERLINE SHOES. All Rights Reserved.
                </div>
            </footer>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const header = document.querySelector('.top-header');
            let lastScroll = 0;

            window.addEventListener('scroll', () => {
                const currentScroll = window.pageYOffset;
                
                if (currentScroll <= 0) {
                    header.classList.remove('nav-hidden');
                    return;
                }
                
                if (currentScroll > lastScroll && !header.classList.contains('nav-hidden')) {
                    // Scroll Down
                    header.classList.add('nav-hidden');
                } else if (currentScroll < lastScroll && header.classList.contains('nav-hidden')) {
                    // Scroll Up
                    header.classList.remove('nav-hidden');
                }
                lastScroll = currentScroll;
            });
        });
    </script>
</body>

</html>