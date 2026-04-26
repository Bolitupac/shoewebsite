<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Everline Shoes | Collection</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=oswald:400,500,600,700|manrope:400,500,600,700" rel="stylesheet" />
    <!-- Modular CSS -->
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/buttons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cards.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/collection.css') }}">
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

        <section id="custom-order" class="custom-order">
            <span class="eyebrow">Custom Order</span>
            <h2>Want your own design? Order a pair made around your idea.</h2>
            <p>
                Share your preferred color, leather finish, heel or sole direction, event use, and sizing notes. We will
                guide the build with you on WhatsApp and shape the pair around your personal design brief.
            </p>
            <div class="section-actions">
                <a class="btn"
                    href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20to%20place%20a%20custom%20shoe%20order%20with%20my%20own%20design."
                    target="_blank" rel="noreferrer">Start Custom Order</a>
                <a class="btn-outline"
                    href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20to%20ask%20about%20custom%20shoe%20designs."
                    target="_blank" rel="noreferrer">Ask a Question</a>
            </div>
        </section>

        <section id="one-of-one" class="catalog-section">
            <div class="section-intro">
                <div>
                    <span class="section-label">One of One</span>
                    <h2>Rare Pairs.</h2>
                </div>
            </div>
            <div class="grid-premium">
                <article class="card-premium">
                    <div class="card-premium-media">
                        <img src="{{ asset('images/black-shiny-shoe.jpg') }}" alt="Midnight Patent">
                    </div>
                    <span class="card-premium-badge">Limited — 1 of 1</span>
                    <div class="card-premium-copy">
                        <h2>Midnight Patent</h2>
                        <p>High-shine black finish crafted for formal statements. One pair only.</p>
                        <div class="card-premium-row">
                            <span class="card-premium-price">N1,999,999</span>
                            <a class="btn-premium"
                                href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20Midnight%20Patent."
                                target="_blank" rel="noreferrer">Order</a>
                        </div>
                    </div>
                </article>
                <article class="card-premium">
                    <div class="card-premium-media">
                        <img src="{{ asset('images/bridegroom-s-shoes-with-other-wedding-details.jpg') }}"
                            alt="Ivory Ceremony">
                    </div>
                    <span class="card-premium-badge">Limited — 1 of 1</span>
                    <div class="card-premium-copy">
                        <h2>Ivory Ceremony</h2>
                        <p>Clean white statement pair for weddings, receptions, and private entries.</p>
                        <div class="card-premium-row">
                            <span class="card-premium-price">N2,100,000</span>
                            <a class="btn-premium"
                                href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20Ivory%20Ceremony."
                                target="_blank" rel="noreferrer">Order</a>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section id="women" class="catalog-section">
            <div class="section-intro">
                <div>
                    <span class="section-label">Women</span>
                    <h2>Gallery Edit.</h2>
                </div>
            </div>
            <div class="grid" data-section-grid>
                <article class="card">
                    <div class="card-media"><img src="{{ asset('images/abbeylein-shoes-wooden_crocs_1920.jpg') }}"
                            alt="TOD'S Women"></div>
                    <div class="card-copy">
                        <h2>TOD'S Women</h2>
                        <p>Soft neutral finish with a calm luxury feel and styled presentation.</p>
                        <div class="row"><span>N2,450,000</span><a
                                href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20TOD%27S%20Women."
                                target="_blank" rel="noreferrer">Order</a></div>
                    </div>
                </article>
                <article class="card">
                    <div class="card-media"><img src="{{ asset('images/brown_suede_lohfers.jpg') }}" alt="Soft Loafer">
                    </div>
                    <div class="card-copy">
                        <h2>Soft Loafer</h2>
                        <p>Relaxed suede texture with a quiet, elevated look for versatile styling.</p>
                        <div class="row"><span>N1,999,999</span><a
                                href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20Soft%20Loafer."
                                target="_blank" rel="noreferrer">Order</a></div>
                    </div>
                </article>
                <article class="card">
                    <div class="card-media"><img
                            src="{{ asset('images/bridegroom-s-shoes-with-other-wedding-details.jpg') }}"
                            alt="Formal White"></div>
                    <div class="card-copy">
                        <h2>Formal White</h2>
                        <p>Minimal bright pair for clean event dressing and standout special occasions.</p>
                        <div class="row"><span>N2,100,000</span><a
                                href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20Formal%20White."
                                target="_blank" rel="noreferrer">Order</a></div>
                    </div>
                </article>
                <article class="card card-hidden">
                    <div class="card-media"><img src="{{ asset('images/oxfor-leather-shoe.jpg') }}" alt="Studio Runner">
                    </div>
                    <div class="card-copy">
                        <h2>Studio Runner</h2>
                        <p>Lower-profile pair with smooth texture for polished everyday movement.</p>
                        <div class="row"><span>N1,780,000</span><a
                                href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20Studio%20Runner."
                                target="_blank" rel="noreferrer">Order</a></div>
                    </div>
                </article>
                <article class="card card-hidden">
                    <div class="card-media"><img src="{{ asset('images/black-shiny-shoe.jpg') }}" alt="Evening Patent">
                    </div>
                    <div class="card-copy">
                        <h2>Evening Patent</h2>
                        <p>Glossy black formal pair with a sharper finish for night events.</p>
                        <div class="row"><span>N2,050,000</span><a
                                href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20Evening%20Patent."
                                target="_blank" rel="noreferrer">Order</a></div>
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
                    <h2>Fresh Drop.</h2>
                </div>
            </div>
            <div class="grid" data-section-grid>
                <article class="card">
                    <div class="card-media"><img src="{{ asset('images/oxfor-leather-shoe.jpg') }}" alt="Suede Runner">
                    </div>
                    <div class="card-copy">
                        <h2>Suede Runner</h2>
                        <p>Refined texture and low-profile shape for current daily wear rotation.</p>
                        <div class="row"><span>N1,850,000</span><a
                                href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20Suede%20Runner."
                                target="_blank" rel="noreferrer">Order</a></div>
                    </div>
                </article>
                <article class="card">
                    <div class="card-media"><img src="{{ asset('images/brown-man-s-leather-derby-shoes.jpg') }}"
                            alt="Derby Line"></div>
                    <div class="card-copy">
                        <h2>Derby Line</h2>
                        <p>Classic shape rebuilt with a fashion-forward finish and newer production line.</p>
                        <div class="row"><span>N1,650,000</span><a
                                href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20Derby%20Line."
                                target="_blank" rel="noreferrer">Order</a></div>
                    </div>
                </article>
                <article class="card">
                    <div class="card-media"><img src="{{ asset('images/abbeylein-shoes-wooden_crocs_1920.jpg') }}"
                            alt="Sand Edit"></div>
                    <div class="card-copy">
                        <h2>Sand Edit</h2>
                        <p>Soft-toned new release for clients who want lighter neutral styling.</p>
                        <div class="row"><span>N2,200,000</span><a
                                href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20Sand%20Edit."
                                target="_blank" rel="noreferrer">Order</a></div>
                    </div>
                </article>
                <article class="card card-hidden">
                    <div class="card-media"><img src="{{ asset('images/brown_suede_lohfers.jpg') }}" alt="Fresh Loafer">
                    </div>
                    <div class="card-copy">
                        <h2>Fresh Loafer</h2>
                        <p>Newly prepared suede loafer with a clean shape for everyday polish.</p>
                        <div class="row"><span>N1,920,000</span><a
                                href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20Fresh%20Loafer."
                                target="_blank" rel="noreferrer">Order</a></div>
                    </div>
                </article>
                <article class="card card-hidden">
                    <div class="card-media"><img src="{{ asset('images/black-shiny-shoe.jpg') }}" alt="Jet Black Build">
                    </div>
                    <div class="card-copy">
                        <h2>Jet Black Build</h2>
                        <p>New-season black finish with sharper detailing and formal energy.</p>
                        <div class="row"><span>N2,080,000</span><a
                                href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20Jet%20Black%20Build."
                                target="_blank" rel="noreferrer">Order</a></div>
                    </div>
                </article>
            </div>
            <div class="see-more-wrap">
                <button class="btn-outline see-more" type="button" data-see-more aria-expanded="false">See more</button>
            </div>
        </section>

        <footer class="footer">
            <div class="footer-columns">
                <div>
                    <h4>Shop</h4>
                    <div class="footer-list">
                        <a href="{{ route('home') }}#mens">Men</a>
                        <a href="{{ route('home') }}#womens">Women</a>
                        <a href="{{ route('home') }}#new-arrivals">New Arrivals</a>
                        <a href="{{ route('home') }}#sale">Sale</a>
                    </div>
                </div>
                <div>
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
                <div>
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
                Certain activities undertaken by EVERLINE SHOES may be licensed under applicable laws and international
                trademark. Copyright 2026 EVERLINE SHOES. All Rights Reserved.
            </div>
        </footer>
    </div>
    <!-- Page JS -->
    <script src="{{ asset('js/collection.js') }}"></script>
</body>

</html>