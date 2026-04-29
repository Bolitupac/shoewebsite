<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nelson Shoes | Support</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=oswald:400,500,600,700|manrope:400,500,600,700" rel="stylesheet" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon-n.svg') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/everline.css') }}">
</head>

<body>
    <div class="site-wrap">
        <div class="promo-bar">
            <span>Client support and private fittings</span>
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
            </nav>
        </header>

        <main>
            <section class="support-hero">
                <span class="eyebrow">Support</span>
                <h1>Speak with the workshop.</h1>
                <p>Book fittings, ask about sizing, request care guidance, or begin a bespoke order with Nelson Shoes.</p>
            </section>

            <section class="section support-grid-section">
                <div class="support-grid">
                    <form class="support-form" data-whatsapp-form data-whatsapp-intro="Hello, I want support from Nelson Shoes.">
                        <label>
                            <span>Full name</span>
                            <input type="text" name="name" autocomplete="name" required>
                        </label>
                        <label>
                            <span>Phone</span>
                            <input type="tel" name="phone" autocomplete="tel" required>
                        </label>
                        <label>
                            <span>Email</span>
                            <input type="email" name="email" autocomplete="email">
                        </label>
                        <label>
                            <span>Reason</span>
                            <select name="reason" required>
                                <option value="Private fitting">Private fitting</option>
                                <option value="Custom order">Custom order</option>
                                <option value="Sizing help">Sizing help</option>
                                <option value="Shoe care">Shoe care</option>
                                <option value="Academy inquiry">Academy inquiry</option>
                            </select>
                        </label>
                        <label class="form-span-2">
                            <span>Message</span>
                            <textarea name="message" rows="5" placeholder="Tell us what you need."></textarea>
                        </label>
                        <div class="form-actions form-span-2">
                            <button class="btn btn-dark" type="submit">Send message</button>
                            <a class="btn btn-outline" href="https://wa.me/2340000000000?text=Hello%2C%20I%20need%20support%20from%20Nelson%20Shoes." target="_blank" rel="noreferrer">WhatsApp demo</a>
                        </div>
                    </form>

                    <aside class="support-social">
                        <span class="section-label">Direct channels</span>
                        <h2>Message Nelson Shoes.</h2>
                        <p>Use the demo links below for WhatsApp and social inquiries. Replace the handles when the client confirms final accounts.</p>
                        <div class="social-list">
                            <a href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20to%20speak%20with%20Nelson%20Shoes." target="_blank" rel="noreferrer">WhatsApp: +234 000 000 0000</a>
                            <a href="https://www.instagram.com/nelsonshoes" target="_blank" rel="noreferrer">Instagram: @nelsonshoes</a>
                            <a href="https://www.tiktok.com/@nelsonshoes" target="_blank" rel="noreferrer">TikTok: @nelsonshoes</a>
                            <a href="https://x.com/nelsonshoes" target="_blank" rel="noreferrer">X: @nelsonshoes</a>
                            <a href="mailto:studio@nelsonshoes.example">Email: studio@nelsonshoes.example</a>
                        </div>
                    </aside>
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
                    <a href="{{ route('about') }}#process">Process</a>
                    <a href="{{ route('about') }}#founder">Founder</a>
                </div>
                <div>
                    <h4>Support</h4>
                    <a href="{{ route('support') }}">Contact</a>
                    <a href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20to%20shop%20from%20Nelson%20Shoes." target="_blank" rel="noreferrer">WhatsApp</a>
                </div>
            </div>
            <div class="footer-bottom">Copyright 2026 Nelson Shoes. All Rights Reserved.</div>
        </footer>
    </div>

    <script src="{{ asset('js/nelson-interactions.js') }}" defer></script>
</body>

</html>
