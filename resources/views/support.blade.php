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
        @include('partials.header')

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
        @include('partials.footer')
    </div>

    @include('partials.cart')

    <script src="{{ asset('js/nelson-interactions.js') }}" defer></script>
</body>

</html>
