<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Everline Shoes | Academy</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=oswald:400,500,600,700|manrope:400,500,600,700" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/everline.css') }}">
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
                    <a class="{{ request()->routeIs('collection') ? 'is-active' : '' }}" href="{{ route('collection') }}">Collection</a>
                    <a class="{{ request()->routeIs('academy') ? 'is-active' : '' }}" href="{{ route('academy') }}">Academy</a>
                    <a class="{{ request()->routeIs('about') ? 'is-active' : '' }}" href="{{ route('about') }}">About</a>
                    <a href="{{ route('home') }}#support">Support</a>
                </nav>
                <div class="header-icons">
                    <span>♡</span>
                    <span>👜</span>
                    <span>◌</span>
                </div>
            </header>
        </div>

        <section class="hero academy-hero" style="position: relative; min-height: 85vh; display: flex; align-items: center; justify-content: center; text-align: center; color: #fff; padding-top: 56px;">
            <div style="position: absolute; inset: 0; overflow: hidden; background: #000;">
                <img src="{{ asset('images/shoemaker-workshop-making-shoes academy.jpg') }}" style="width: 100%; height: 100%; object-fit: cover; filter: blur(8px) brightness(0.3); transform: scale(1.1);" alt="Academy Hero">
            </div>
            <div style="position: relative; z-index: 1; padding: 0 24px;">
                <span style="display: block; font-size: 0.85rem; font-weight: 800; letter-spacing: 0.25em; text-transform: uppercase; color: var(--accent); margin-bottom: 20px;">The Nelson Shoes Academy</span>
                <h1 style="font-size: clamp(3rem, 7vw, 5.5rem); font-family: 'Oswald', sans-serif; margin: 0 0 24px; line-height: 1;">The Pedestal of Knowledge</h1>
                <p style="font-size: 1.15rem; max-width: 650px; margin: 0 auto 36px; color: rgba(255,255,255,0.85); line-height: 1.8;">Preserving the secrets of traditional shoemaking and training the next generation of African artisans to maintain world-class luxury.</p>
                <a class="btn" href="#programs" style="background: var(--accent); color: #fff; border: none; padding: 0 36px; min-height: 48px; font-size: 0.85rem; letter-spacing: 0.05em;">Enroll Now</a>
            </div>
        </section>

        <section id="programs" style="background: var(--bg); color: var(--ink); padding: 100px 24px;">
            <div class="content-width" style="max-width: 1100px;">
                <div style="text-align: center; margin-bottom: 80px;">
                    <span style="color: var(--muted); font-size: 0.8rem; font-weight: 800; letter-spacing: 0.2em; text-transform: uppercase;">Our Curriculum</span>
                    <h2 style="font-family: 'Oswald', sans-serif; font-size: clamp(2.5rem, 5vw, 4rem); margin: 16px 0 0; line-height: 1; color: var(--ink);">Mastering the Craft</h2>
                </div>

                <div style="display: grid; gap: 80px;">
                    <!-- Row 1 -->
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 48px; align-items: center;">
                        <div>
                            <img src="{{ asset('images/shoemaker academy.avif') }}" alt="Leather Anatomy" style="border-radius: 4px; box-shadow: 0 15px 35px rgba(0,0,0,0.1); width: 100%;">
                        </div>
                        <div style="padding: 0 20px;">
                            <h3 style="font-family: 'Oswald', sans-serif; font-size: 2.2rem; color: var(--ink); margin: 0 0 16px; line-height: 1.1;">01. Leather Anatomy</h3>
                            <p style="font-size: 1.05rem; color: var(--muted); line-height: 1.8; margin: 0;">Learn to identify, source, and prepare the finest full-grain leathers, understanding how different hides react to molding and patina.</p>
                        </div>
                    </div>
                    
                    <!-- Row 2 -->
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 48px; align-items: center; direction: rtl;">
                        <div>
                            <img src="{{ asset('images/side-view-image-young-concentrated-shoemaker. shoe academyjpg') }}" alt="Structural Integrity" style="border-radius: 4px; box-shadow: 0 15px 35px rgba(0,0,0,0.1); width: 100%;">
                        </div>
                        <div style="padding: 0 20px; direction: ltr;">
                            <h3 style="font-family: 'Oswald', sans-serif; font-size: 2.2rem; color: var(--ink); margin: 0 0 16px; line-height: 1.1;">02. Structural Integrity</h3>
                            <p style="font-size: 1.05rem; color: var(--muted); line-height: 1.8; margin: 0;">The core of bespoke shoemaking. Students learn hand-lasting techniques that ensure the shoe maintains its shape and provides unmatched comfort.</p>
                        </div>
                    </div>

                    <!-- Row 3 -->
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 48px; align-items: center;">
                        <div>
                            <img src="{{ asset('images/oxfor-leather-shoe.jpg') }}" alt="The Art of Patina" style="border-radius: 4px; box-shadow: 0 15px 35px rgba(0,0,0,0.1); width: 100%;">
                        </div>
                        <div style="padding: 0 20px;">
                            <h3 style="font-family: 'Oswald', sans-serif; font-size: 2.2rem; color: var(--ink); margin: 0 0 16px; line-height: 1.1;">03. The Art of Patina</h3>
                            <p style="font-size: 1.05rem; color: var(--muted); line-height: 1.8; margin: 0;">Master the "Fire and Paint" process, learning to dye and polish leather to a mirror shine, creating unique color gradients.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section style="background: var(--soft); color: var(--ink); padding: 100px 24px; text-align: center;">
            <div class="content-width">
                <h2 style="font-family: 'Oswald', sans-serif; font-size: clamp(2.5rem, 5vw, 4.5rem); margin: 0 0 24px; line-height: 1; color: var(--ink);">Begin Your Journey</h2>
                <p style="font-size: 1.2rem; max-width: 650px; margin: 0 auto 40px; color: var(--muted); line-height: 1.6;">Support a master who is defining the industry, or start your own path in luxury craftsmanship.</p>
                <a class="btn" href="https://wa.me/2340000000000?text=Hello%2C%20I%20want%20to%20inquire%20about%20the%20Academy." target="_blank" rel="noreferrer" style="background: var(--ink); color: #fff; border: none; padding: 0 44px; min-height: 52px; font-size: 0.9rem; letter-spacing: 0.05em;">Enroll Now</a>
            </div>
        </section>

        <footer class="footer">
            <div class="footer-columns">
                <div>
                    <h4>Shop</h4>
                    <div class="footer-list">
                        <a href="{{ route('home') }}#mens">Men</a>
                        <a href="{{ route('home') }}#womens">Women</a>
                        <a href="{{ route('collection') }}">Collection</a>
                        <a href="{{ route('academy') }}">Academy</a>
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
                        <a href="{{ route('about') }}">Brand Story</a>
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
                        <a href="https://wa.me/2340000000000" target="_blank" rel="noreferrer">WhatsApp</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                Certain activities undertaken by EVERLINE SHOES may be licensed under applicable laws and international
                trademark. Copyright 2026 EVERLINE SHOES. All Rights Reserved.
            </div>
        </footer>
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
                    header.classList.add('nav-hidden');
                } else if (currentScroll < lastScroll && header.classList.contains('nav-hidden')) {
                    header.classList.remove('nav-hidden');
                }
                lastScroll = currentScroll;
            });

        });
    </script>
</body>
</html>
