<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Everline Shoes | Collection</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=oswald:400,500,600,700|manrope:400,500,600,700" rel="stylesheet" />
    <style>
        :root {
            --bg: #dfe6f0;
            --surface: #ffffff;
            --soft: #f0ece6;
            --ink: #111111;
            --muted: #6a6a6a;
            --line: #ded8cf;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: 'Manrope', sans-serif;
            background: var(--bg);
            color: var(--ink);
        }
        a { color: inherit; text-decoration: none; }
        img { display: block; width: 100%; }
        .wrap {
            width: 100%;
            margin: 0;
            background: var(--surface);
            border: 1px solid rgba(17, 17, 17, 0.08);
        }
        .top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding: 18px 24px;
            border-bottom: 1px solid var(--line);
        }
        .brand, h1, h2 {
            margin: 0;
            font-family: 'Oswald', sans-serif;
        }
        .brand { font-size: 1.05rem; text-transform: uppercase; }
        h1 { font-size: clamp(2.6rem, 6vw, 4.6rem); line-height: 0.95; }
        p { color: var(--muted); line-height: 1.7; }
        .nav {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 40px;
            padding: 0 16px;
            border: 1px solid var(--line);
            font-size: 0.76rem;
            font-weight: 700;
        }
        .hero {
            display: grid;
            grid-template-columns: 1fr 0.95fr;
            gap: 24px;
            padding: 28px 24px;
            background: var(--soft);
        }
        .hero-image {
            min-height: 380px;
            overflow: hidden;
        }
        .hero-image img,
        .card img {
            height: 100%;
            object-fit: cover;
            transition: transform 1200ms ease;
        }
        .hero-image:hover img,
        .card:hover img {
            transform: scale(1.05);
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
            padding: 24px;
        }
        .card {
            border: 1px solid var(--line);
            overflow: hidden;
        }
        .card-media {
            height: 320px;
            background: #f6f4f1;
        }
        .card-copy {
            padding: 16px;
        }
        .card-copy h2 {
            font-size: 1.4rem;
            line-height: 1;
        }
        .row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            margin-top: 12px;
            font-size: 0.85rem;
        }
        .footer {
            padding: 18px 24px 24px;
            border-top: 1px solid var(--line);
            color: var(--muted);
            font-size: 0.8rem;
        }
        @media (max-width: 900px) {
            .hero,
            .grid { grid-template-columns: 1fr 1fr; }
        }
        @media (max-width: 700px) {
            .wrap { width: 100%; margin: 0; }
            .top,
            .hero,
            .grid,
            .footer { padding-left: 14px; padding-right: 14px; }
            .hero,
            .grid { grid-template-columns: 1fr; }
            .top { flex-direction: column; align-items: flex-start; }
        }
    </style>
</head>
<body>
    <div class="wrap">
        <header class="top">
            <a class="brand" href="{{ route('home') }}">Everline Shoes</a>
            <div class="nav">
                <a class="btn" href="{{ route('home') }}">Home</a>
                <a class="btn" href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20to%20shop%20from%20the%20collection." target="_blank" rel="noreferrer">Order on WhatsApp</a>
            </div>
        </header>

        <section class="hero">
            <div>
                <h1>Collection built for daily rotation and statement entries.</h1>
                <p>
                    The current drop keeps the same clean fashion-store tone from the homepage, now positioned for a Lagos luxury market with direct WhatsApp ordering for each pair.
                </p>
            </div>
            <div class="hero-image">
                <img src="{{ asset('images/vintage-paper-table-shoe-polishing-tools-jobs-career-concept.jpg') }}" alt="Collection hero shoe">
            </div>
        </section>

        <section class="grid">
            <article class="card">
                <div class="card-media"><img src="{{ asset('images/black-shiny-shoe.jpg') }}" alt="Techno Fabric"></div>
                <div class="card-copy">
                    <h2>Techno Fabric</h2>
                    <p>Sharp dark finish with a clean fashion silhouette.</p>
                    <div class="row"><span>N1,999,999</span><a href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20Techno%20Fabric." target="_blank" rel="noreferrer">Order</a></div>
                </div>
            </article>

            <article class="card">
                <div class="card-media"><img src="{{ asset('images/abbeylein-shoes-wooden_crocs_1920.jpg') }}" alt="TOD'S Women"></div>
                <div class="card-copy">
                    <h2>TOD'S Women</h2>
                    <p>Soft neutral finish with gallery-style presentation.</p>
                    <div class="row"><span>N2,450,000</span><a href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20TOD%27S%20Women." target="_blank" rel="noreferrer">Order</a></div>
                </div>
            </article>

            <article class="card">
                <div class="card-media"><img src="{{ asset('images/oxfor-leather-shoe.jpg') }}" alt="Suede Runner"></div>
                <div class="card-copy">
                    <h2>Suede Runner</h2>
                    <p>Refined texture and low-profile shape for everyday wear.</p>
                    <div class="row"><span>N1,850,000</span><a href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20Suede%20Runner." target="_blank" rel="noreferrer">Order</a></div>
                </div>
            </article>

            <article class="card">
                <div class="card-media"><img src="{{ asset('images/brown-man-s-leather-derby-shoes.jpg') }}" alt="Derby Line"></div>
                <div class="card-copy">
                    <h2>Derby Line</h2>
                    <p>Classic shape rebuilt with a fashion-forward finish.</p>
                    <div class="row"><span>N1,650,000</span><a href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20Derby%20Line." target="_blank" rel="noreferrer">Order</a></div>
                </div>
            </article>

            <article class="card">
                <div class="card-media"><img src="{{ asset('images/brown_suede_lohfers.jpg') }}" alt="Soft Loafer"></div>
                <div class="card-copy">
                    <h2>Soft Loafer</h2>
                    <p>Relaxed shape with elevated texture and quiet presence.</p>
                    <div class="row"><span>N1,999,999</span><a href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20Soft%20Loafer." target="_blank" rel="noreferrer">Order</a></div>
                </div>
            </article>

            <article class="card">
                <div class="card-media"><img src="{{ asset('images/bridegroom-s-shoes-with-other-wedding-details.jpg') }}" alt="Formal White"></div>
                <div class="card-copy">
                    <h2>Formal White</h2>
                    <p>Clean ceremony finish for dress codes and event looks.</p>
                    <div class="row"><span>N2,100,000</span><a href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20Formal%20White." target="_blank" rel="noreferrer">Order</a></div>
                </div>
            </article>
        </section>

        <div class="footer">
            Everline Shoes collection page updated for a Nigerian luxury storefront. All order actions route to WhatsApp for demo selling flow.
        </div>
    </div>
</body>
</html>
