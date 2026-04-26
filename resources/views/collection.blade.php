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
        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            margin: 0;
            font-family: 'Manrope', sans-serif;
            background: var(--bg);
            color: var(--ink);
        }
        a { color: inherit; text-decoration: none; }
        img { display: block; width: 100%; }
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

        .brand, h1, h2 {
            margin: 0;
            font-family: 'Oswald', sans-serif;
        }
        .brand { font-size: 1.05rem; text-transform: uppercase; }
        h1 { font-size: clamp(2.6rem, 6vw, 4.6rem); line-height: 0.95; }
        p { color: var(--muted); line-height: 1.7; }

        .header-icons {
            display: flex;
            gap: 12px;
            align-items: center;
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

        .header-nav a {
            color: var(--muted);
            transition: color 220ms ease;
        }

        .header-nav a:hover {
            color: var(--ink);
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 40px;
            padding: 0 16px;
            font-size: 0.76rem;
            font-weight: 700;
            border: 1px solid transparent;
            background: #fff;
            color: #111;
        }
        .btn-outline {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 40px;
            padding: 0 16px;
            font-size: 0.76rem;
            font-weight: 700;
            border: 1px solid rgba(17, 17, 17, 0.14);
            background: transparent;
            color: #111;
        }
        .hero {
            display: grid;
            grid-template-columns: 1fr 0.95fr;
            gap: 24px;
            padding: 28px 24px;
            background: var(--soft);
        }
        .hero-copy {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .hero-actions {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 22px;
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

        .collection-links,
        .section-actions {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px;
        }

        .collection-links {
            padding: 20px 24px 0;
        }

        .pill-link {
            display: inline-flex;
            align-items: center;
            min-height: 34px;
            padding: 0 14px;
            border: 1px solid rgba(17, 17, 17, 0.12);
            background: #fff;
            font-size: 0.74rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.04em;
        }

        .custom-order {
            margin: 24px;
            padding: 24px;
            border: 1px solid var(--line);
            background: linear-gradient(135deg, #f7f3ed 0%, #efe5d8 100%);
        }

        .eyebrow,
        .section-label {
            display: inline-block;
            margin-bottom: 10px;
            font-size: 0.72rem;
            font-weight: 800;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--muted);
        }

        .custom-order h2,
        .section-intro h2 {
            margin: 0;
            font-size: clamp(2rem, 4vw, 3rem);
            line-height: 0.95;
        }

        .custom-order p {
            max-width: 700px;
            margin: 12px 0 0;
        }

        .section-actions {
            margin-top: 18px;
        }

        .catalog-section {
            padding: 8px 24px 0;
        }

        .section-intro {
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 16px;
            align-items: end;
            margin-bottom: 18px;
        }

        .section-intro p {
            max-width: 620px;
            margin: 12px 0 0;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
        }
        .card {
            border: 1px solid var(--line);
            overflow: hidden;
            background: #fff;
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
        .row a {
            font-weight: 700;
        }

        .card-hidden {
            display: none;
        }

        .see-more-wrap {
            display: flex;
            justify-content: center;
            padding: 18px 0 8px;
        }

        .see-more {
            cursor: pointer;
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
            .section-intro {
                grid-template-columns: 1fr;
                align-items: start;
            }
        }
        @media (max-width: 700px) {
            .promo-bar {
                padding-left: 14px;
                padding-right: 14px;
            }
            .promo-bar .content-width {
                grid-template-columns: 1fr;
                justify-items: start;
            }
            .top-header,
            .hero,
            .footer { padding-left: 14px; padding-right: 14px; }
            .hero,
            .grid,
            .section-intro { grid-template-columns: 1fr; }
            .top-header {
                grid-template-columns: 1fr;
                justify-items: start;
                padding-top: 14px;
                padding-bottom: 14px;
            }
            .header-nav {
                justify-content: flex-start;
                flex-wrap: wrap;
                gap: 14px;
            }
            .header-icons {
                justify-self: start;
            }
            .collection-links,
            .catalog-section {
                padding-left: 14px;
                padding-right: 14px;
            }
            .custom-order {
                margin: 18px 14px;
                padding: 18px;
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
                    <a href="{{ route('home') }}#mens">Men</a>
                    <a href="{{ route('home') }}#womens">Women</a>
                    <a href="{{ route('home') }}#new-arrivals">New Arrivals</a>
                    <a href="{{ route('collection') }}">Collection</a>
                    <a href="{{ route('home') }}#sale">Sale</a>
                    <a href="{{ route('home') }}#about">About</a>
                    <a href="{{ route('home') }}#support">Support</a>
                </nav>
                <div class="header-icons">
                    <span>♡</span>
                    <span>👜</span>
                    <span>◌</span>
                </div>
            </header>
        </div>

        <section class="hero">
            <div class="hero-copy">
                <h1>Collection built for daily rotation and statement entries.</h1>
                <p>
                    Explore the collection by edit, discover limited one-of-one pairs, and place a custom order when you want a shoe made around your own design idea.
                </p>
                <div class="hero-actions">
                    <a class="btn" href="#custom-order">Custom Order</a>
                    <a class="btn-outline" href="#one-of-one">See Collection Sections</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="{{ asset('images/vintage-paper-table-shoe-polishing-tools-jobs-career-concept.jpg') }}" alt="Collection hero shoe">
            </div>
        </section>

        <div class="collection-links">
            <a class="pill-link" href="#one-of-one">One of One</a>
            <a class="pill-link" href="#women">Women</a>
            <a class="pill-link" href="#newly-made">Newly Made</a>
            <a class="pill-link" href="#custom-order">Custom Order</a>
        </div>

        <section id="custom-order" class="custom-order">
            <span class="eyebrow">Custom Order</span>
            <h2>Want your own design? Order a pair made around your idea.</h2>
            <p>
                Share your preferred color, leather finish, heel or sole direction, event use, and sizing notes. We will guide the build with you on WhatsApp and shape the pair around your personal design brief.
            </p>
            <div class="section-actions">
                <a class="btn" href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20to%20place%20a%20custom%20shoe%20order%20with%20my%20own%20design." target="_blank" rel="noreferrer">Start Custom Order</a>
                <a class="btn-outline" href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20to%20ask%20about%20custom%20shoe%20designs." target="_blank" rel="noreferrer">Ask a Question</a>
            </div>
        </section>

        <section id="one-of-one" class="catalog-section">
            <div class="section-intro">
                <div>
                    <span class="section-label">One of One</span>
                    <h2>Single pairs with standout finishing and limited availability.</h2>
                    <p>These pieces are built to feel rare on purpose, with stronger material stories and sharper visual identity.</p>
                </div>
            </div>
            <div class="grid" data-section-grid>
                <article class="card">
                    <div class="card-media"><img src="{{ asset('images/black-shiny-shoe.jpg') }}" alt="Midnight Patent"></div>
                    <div class="card-copy">
                        <h2>Midnight Patent</h2>
                        <p>High-shine black finish made for formal looks with strong presence.</p>
                        <div class="row"><span>N1,999,999</span><a href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20Midnight%20Patent." target="_blank" rel="noreferrer">Order</a></div>
                    </div>
                </article>
                <article class="card">
                    <div class="card-media"><img src="{{ asset('images/bridegroom-s-shoes-with-other-wedding-details.jpg') }}" alt="Ivory Ceremony"></div>
                    <div class="card-copy">
                        <h2>Ivory Ceremony</h2>
                        <p>Clean white statement pair for weddings, receptions, and special entries.</p>
                        <div class="row"><span>N2,100,000</span><a href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20Ivory%20Ceremony." target="_blank" rel="noreferrer">Order</a></div>
                    </div>
                </article>
                <article class="card">
                    <div class="card-media"><img src="{{ asset('images/brown-man-s-leather-derby-shoes.jpg') }}" alt="Gallery Derby"></div>
                    <div class="card-copy">
                        <h2>Gallery Derby</h2>
                        <p>Brown leather shape with a refined last and confident event energy.</p>
                        <div class="row"><span>N1,650,000</span><a href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20Gallery%20Derby." target="_blank" rel="noreferrer">Order</a></div>
                    </div>
                </article>
                <article class="card card-hidden">
                    <div class="card-media"><img src="{{ asset('images/oxfor-leather-shoe.jpg') }}" alt="Suede Archive"></div>
                    <div class="card-copy">
                        <h2>Suede Archive</h2>
                        <p>Quiet shape with textured finish for collectors who want a softer line.</p>
                        <div class="row"><span>N1,850,000</span><a href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20Suede%20Archive." target="_blank" rel="noreferrer">Order</a></div>
                    </div>
                </article>
                <article class="card card-hidden">
                    <div class="card-media"><img src="{{ asset('images/brown_suede_lohfers.jpg') }}" alt="Signature Loafer"></div>
                    <div class="card-copy">
                        <h2>Signature Loafer</h2>
                        <p>Low-profile statement made to carry rich texture without loud detailing.</p>
                        <div class="row"><span>N1,999,999</span><a href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20Signature%20Loafer." target="_blank" rel="noreferrer">Order</a></div>
                    </div>
                </article>
            </div>
            <div class="see-more-wrap">
                <button class="btn-outline see-more" type="button" data-see-more aria-expanded="false">See more</button>
            </div>
        </section>

        <section id="women" class="catalog-section">
            <div class="section-intro">
                <div>
                    <span class="section-label">Women</span>
                    <h2>Women's pairs with softer tones, polished form, and gallery styling.</h2>
                    <p>This edit leans elegant, wearable, and clean, with silhouettes chosen for both events and daily luxury dressing.</p>
                </div>
            </div>
            <div class="grid" data-section-grid>
                <article class="card">
                    <div class="card-media"><img src="{{ asset('images/abbeylein-shoes-wooden_crocs_1920.jpg') }}" alt="TOD'S Women"></div>
                    <div class="card-copy">
                        <h2>TOD'S Women</h2>
                        <p>Soft neutral finish with a calm luxury feel and styled presentation.</p>
                        <div class="row"><span>N2,450,000</span><a href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20TOD%27S%20Women." target="_blank" rel="noreferrer">Order</a></div>
                    </div>
                </article>
                <article class="card">
                    <div class="card-media"><img src="{{ asset('images/brown_suede_lohfers.jpg') }}" alt="Soft Loafer"></div>
                    <div class="card-copy">
                        <h2>Soft Loafer</h2>
                        <p>Relaxed suede texture with a quiet, elevated look for versatile styling.</p>
                        <div class="row"><span>N1,999,999</span><a href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20Soft%20Loafer." target="_blank" rel="noreferrer">Order</a></div>
                    </div>
                </article>
                <article class="card">
                    <div class="card-media"><img src="{{ asset('images/bridegroom-s-shoes-with-other-wedding-details.jpg') }}" alt="Formal White"></div>
                    <div class="card-copy">
                        <h2>Formal White</h2>
                        <p>Minimal bright pair for clean event dressing and standout special occasions.</p>
                        <div class="row"><span>N2,100,000</span><a href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20Formal%20White." target="_blank" rel="noreferrer">Order</a></div>
                    </div>
                </article>
                <article class="card card-hidden">
                    <div class="card-media"><img src="{{ asset('images/oxfor-leather-shoe.jpg') }}" alt="Studio Runner"></div>
                    <div class="card-copy">
                        <h2>Studio Runner</h2>
                        <p>Lower-profile pair with smooth texture for polished everyday movement.</p>
                        <div class="row"><span>N1,780,000</span><a href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20Studio%20Runner." target="_blank" rel="noreferrer">Order</a></div>
                    </div>
                </article>
                <article class="card card-hidden">
                    <div class="card-media"><img src="{{ asset('images/black-shiny-shoe.jpg') }}" alt="Evening Patent"></div>
                    <div class="card-copy">
                        <h2>Evening Patent</h2>
                        <p>Glossy black formal pair with a sharper finish for night events.</p>
                        <div class="row"><span>N2,050,000</span><a href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20Evening%20Patent." target="_blank" rel="noreferrer">Order</a></div>
                    </div>
                </article>
            </div>
            <div class="see-more-wrap">
                <button class="btn-outline see-more" type="button" data-see-more aria-expanded="false">See more</button>
            </div>
        </section>

        <section id="newly-made" class="catalog-section">
            <div class="section-intro">
                <div>
                    <span class="section-label">Newly Made</span>
                    <h2>Fresh builds ready for the latest drop and current demand.</h2>
                    <p>These are the newest pairs in rotation, shaped for clients looking for recent production and updated finishing.</p>
                </div>
            </div>
            <div class="grid" data-section-grid>
                <article class="card">
                    <div class="card-media"><img src="{{ asset('images/oxfor-leather-shoe.jpg') }}" alt="Suede Runner"></div>
                    <div class="card-copy">
                        <h2>Suede Runner</h2>
                        <p>Refined texture and low-profile shape for current daily wear rotation.</p>
                        <div class="row"><span>N1,850,000</span><a href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20Suede%20Runner." target="_blank" rel="noreferrer">Order</a></div>
                    </div>
                </article>
                <article class="card">
                    <div class="card-media"><img src="{{ asset('images/brown-man-s-leather-derby-shoes.jpg') }}" alt="Derby Line"></div>
                    <div class="card-copy">
                        <h2>Derby Line</h2>
                        <p>Classic shape rebuilt with a fashion-forward finish and newer production line.</p>
                        <div class="row"><span>N1,650,000</span><a href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20Derby%20Line." target="_blank" rel="noreferrer">Order</a></div>
                    </div>
                </article>
                <article class="card">
                    <div class="card-media"><img src="{{ asset('images/abbeylein-shoes-wooden_crocs_1920.jpg') }}" alt="Sand Edit"></div>
                    <div class="card-copy">
                        <h2>Sand Edit</h2>
                        <p>Soft-toned new release for clients who want lighter neutral styling.</p>
                        <div class="row"><span>N2,200,000</span><a href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20Sand%20Edit." target="_blank" rel="noreferrer">Order</a></div>
                    </div>
                </article>
                <article class="card card-hidden">
                    <div class="card-media"><img src="{{ asset('images/brown_suede_lohfers.jpg') }}" alt="Fresh Loafer"></div>
                    <div class="card-copy">
                        <h2>Fresh Loafer</h2>
                        <p>Newly prepared suede loafer with a clean shape for everyday polish.</p>
                        <div class="row"><span>N1,920,000</span><a href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20Fresh%20Loafer." target="_blank" rel="noreferrer">Order</a></div>
                    </div>
                </article>
                <article class="card card-hidden">
                    <div class="card-media"><img src="{{ asset('images/black-shiny-shoe.jpg') }}" alt="Jet Black Build"></div>
                    <div class="card-copy">
                        <h2>Jet Black Build</h2>
                        <p>New-season black finish with sharper detailing and formal energy.</p>
                        <div class="row"><span>N2,080,000</span><a href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20Jet%20Black%20Build." target="_blank" rel="noreferrer">Order</a></div>
                    </div>
                </article>
            </div>
            <div class="see-more-wrap">
                <button class="btn-outline see-more" type="button" data-see-more aria-expanded="false">See more</button>
            </div>
        </section>

        <div class="footer">
            Everline Shoes collection page updated with section-based browsing, custom ordering, and direct WhatsApp ordering for each pair.
        </div>
    </div>
    <script>
        document.querySelectorAll('[data-see-more]').forEach((button) => {
            button.addEventListener('click', () => {
                const section = button.closest('.catalog-section');
                const hiddenCards = section.querySelectorAll('.card-hidden');
                const isExpanded = button.getAttribute('aria-expanded') === 'true';

                hiddenCards.forEach((card) => {
                    card.style.display = isExpanded ? 'none' : 'block';
                });

                button.setAttribute('aria-expanded', isExpanded ? 'false' : 'true');
                button.textContent = isExpanded ? 'See more' : 'See less';
            });
        });
    </script>
</body>
</html>
