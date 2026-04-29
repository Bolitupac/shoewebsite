<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nelson Shoes | Academy</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=oswald:400,500,600,700|manrope:400,500,600,700" rel="stylesheet" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon-n.svg') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/everline.css') }}">
</head>

<body>
    <div class="site-wrap">
        <div class="promo-bar">
            <span>Masterclass enrollment via WhatsApp</span>
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
                <a href="{{ route('home') }}#support">Support</a>
            </nav>
        </header>

        <main>
            <section class="academy-hero">
                <img src="{{ asset('images/shoemaker-workshop-making-shoes academy.jpg') }}" alt="Nelson Shoes Academy workshop">
                <div class="academy-hero-copy">
                    <span class="eyebrow">Nelson Shoes Academy</span>
                    <h1>Masterclass in bespoke shoemaking.</h1>
                    <p>Train under a workshop philosophy built on leather anatomy, structural integrity, and the art of patina.</p>
                    <a class="btn btn-dark" href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20to%20inquire%20about%20the%20Nelson%20Shoes%20Academy." target="_blank" rel="noreferrer">Enroll Now</a>
                </div>
            </section>

            <section id="programs" class="section">
                <div class="section-head">
                    <div>
                        <span class="section-label">Curriculum</span>
                        <h2 class="section-title">Mastering the craft.</h2>
                    </div>
                </div>
                <div class="academy-program-grid">
                    <article>
                        <img src="{{ asset('images/shoemaker academy.avif') }}" alt="Leather anatomy class">
                        <span>01</span>
                        <h3>Leather Anatomy</h3>
                        <p>Understand hides, grain, tension, preparation, and how material decisions affect fit.</p>
                    </article>
                    <article>
                        <img src="{{ asset('images/side-view-image-young-concentrated-shoemaker. shoe academyjpg') }}" alt="Shoemaking structure class">
                        <span>02</span>
                        <h3>Structural Integrity</h3>
                        <p>Learn hand-lasting, sole shaping, balance, and the mechanics behind durable comfort.</p>
                    </article>
                    <article>
                        <img src="{{ asset('images/oxfor-leather-shoe.jpg') }}" alt="Patina shoe class">
                        <span>03</span>
                        <h3>The Art of Patina</h3>
                        <p>Develop color, polish, and finishing techniques that make each pair visually singular.</p>
                    </article>
                </div>
            </section>

            <section class="enrollment-band">
                <span class="section-label">Enrollment</span>
                <h2>Begin your workshop journey.</h2>
                <p>Ask about schedules, class size, materials, and entry requirements directly with the academy.</p>
                <a class="btn btn-dark" href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20to%20enroll%20in%20the%20Nelson%20Shoes%20Academy." target="_blank" rel="noreferrer">Speak to the academy</a>
            </section>

            <section class="section academy-form-section" aria-labelledby="academy-form-title">
                <div class="section-head">
                    <div>
                        <span class="section-label">Application</span>
                        <h2 id="academy-form-title" class="section-title">Request a seat.</h2>
                    </div>
                </div>
                <form class="academy-form" data-academy-form>
                    <div class="form-grid">
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
                            <span>Program</span>
                            <select name="program" required>
                                <option value="Bespoke Shoemaking Masterclass">Bespoke Shoemaking Masterclass</option>
                                <option value="Patina & Finishing Intensive">Patina & Finishing Intensive</option>
                                <option value="Leather Anatomy Foundations">Leather Anatomy Foundations</option>
                            </select>
                        </label>
                        <label class="form-span-2">
                            <span>Message</span>
                            <textarea name="message" rows="4" placeholder="Tell us your experience level, goals, and preferred start date."></textarea>
                        </label>
                    </div>
                    <div class="form-actions">
                        <button class="btn btn-dark" type="submit">Send via WhatsApp</button>
                        <p class="form-hint">This form opens WhatsApp with your details.</p>
                    </div>
                </form>
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
                    <a href="#programs">Curriculum</a>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('[data-academy-form]');
            if (!form) return;

            form.addEventListener('submit', (event) => {
                event.preventDefault();

                const data = new FormData(form);
                const name = String(data.get('name') || '').trim();
                const phone = String(data.get('phone') || '').trim();
                const email = String(data.get('email') || '').trim();
                const program = String(data.get('program') || '').trim();
                const message = String(data.get('message') || '').trim();

                const lines = [
                    'Hello, I want to enroll in the Nelson Shoes Academy.',
                    name ? `Name: ${name}` : '',
                    phone ? `Phone: ${phone}` : '',
                    email ? `Email: ${email}` : '',
                    program ? `Program: ${program}` : '',
                    message ? `Message: ${message}` : '',
                ].filter(Boolean);

                const text = lines.join('\n');
                const href = `https://wa.me/2340000000000?text=${encodeURIComponent(text)}`;
                window.open(href, '_blank', 'noreferrer');
            });
        });
    </script>
</body>

</html>
