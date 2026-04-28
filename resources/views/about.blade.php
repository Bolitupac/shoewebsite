<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Everline Shoes | About</title>
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

        <section class="hero hero-collection">
            <div class="hero-copy-alt">
                <h1 style="font-size: clamp(2.6rem, 5vw, 4rem); max-width: 600px; line-height: 1.1; margin-bottom: 24px;">The 86-Hour Philosophy</h1>
                <p style="font-size: 1.2rem; max-width: 500px; color: var(--ink); font-weight: 500;">Luxury is defined by time.</p>
                <p style="max-width: 560px; margin-top: 16px;">
                    At Nelson Shoes, we measure quality in hours, not units. When we say a shoe is a 'One-of-One,' we are referencing the 86 hours of manual labor dedicated to the sole alone. Our process is a rebellion against the fast-fashion cycle, focusing on structural integrity and the art of the hand-built sole.
                </p>
                <div class="hero-actions" style="margin-top: 32px;">
                    <a class="btn" href="{{ route('collection') }}">Enter the Workshop</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="{{ asset('images/vintage-paper-table-shoe-polishing-tools-jobs-career-concept.jpg') }}" alt="Master craftsman working">
            </div>
        </section>

        <section class="catalog-section" style="padding-top: 60px; padding-bottom: 60px;">
            <div class="content-width">
                <div class="section-intro" style="margin-bottom: 40px; text-align: center; display: block;">
                    <span class="section-label">The Artisan’s Process</span>
                    <h2 style="font-size: clamp(2rem, 4vw, 3rem);">Crafting Perfection</h2>
                </div>

                <div style="display: flex; flex-direction: column; gap: 60px; max-width: 1000px; margin: 0 auto;">
                    <!-- Row 1 -->
                    <article style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
                        <div style="border-radius: 4px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                            <img src="{{ asset('images/oxfor-leather-shoe.jpg') }}" alt="Hand-Patina Artistry" style="width: 100%; height: 100%; object-fit: cover; aspect-ratio: 4/3;">
                        </div>
                        <div style="padding: 0 24px;">
                            <span style="color: var(--accent); font-weight: 800; font-size: 0.8rem; letter-spacing: 0.1em; text-transform: uppercase;">01</span>
                            <h3 style="font-family: 'Oswald', sans-serif; font-size: 2rem; margin: 8px 0 16px;">Hand-Patina Artistry</h3>
                            <p style="font-size: 1.05rem; line-height: 1.7; color: var(--muted);">
                                The "Fire and Paint" technique. Colors like fuchsia, cognac, and deep black are hand-blended and set to create a finish that cannot be replicated by a machine.
                            </p>
                        </div>
                    </article>
                    <!-- Row 2 -->
                    <article style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center; direction: rtl;">
                        <div style="border-radius: 4px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                            <img src="{{ asset('images/brown-man-s-leather-derby-shoes.jpg') }}" alt="Anatomical Precision" style="width: 100%; height: 100%; object-fit: cover; aspect-ratio: 4/3;">
                        </div>
                        <div style="padding: 0 24px; direction: ltr;">
                            <span style="color: var(--accent); font-weight: 800; font-size: 0.8rem; letter-spacing: 0.1em; text-transform: uppercase;">02</span>
                            <h3 style="font-family: 'Oswald', sans-serif; font-size: 2rem; margin: 8px 0 16px;">Anatomical Precision</h3>
                            <p style="font-size: 1.05rem; line-height: 1.7; color: var(--muted);">
                                Our focus on shoe expansion and fit shows we understand the science of comfort as much as the aesthetics of luxury. Every pair is structurally tuned.
                            </p>
                        </div>
                    </article>
                    <!-- Row 3 -->
                    <article style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
                        <div style="border-radius: 4px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                            <img src="{{ asset('images/black-shiny-shoe.jpg') }}" alt="Material Selection" style="width: 100%; height: 100%; object-fit: cover; aspect-ratio: 4/3;">
                        </div>
                        <div style="padding: 0 24px;">
                            <span style="color: var(--accent); font-weight: 800; font-size: 0.8rem; letter-spacing: 0.1em; text-transform: uppercase;">03</span>
                            <h3 style="font-family: 'Oswald', sans-serif; font-size: 2rem; margin: 8px 0 16px;">Material Selection</h3>
                            <p style="font-size: 1.05rem; line-height: 1.7; color: var(--muted);">
                                We use only premium leathers that allow for the "mirror shine" and the incredible depth of color seen in our finished works of art.
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="custom-order" style="margin: 0; border: none; border-top: 1px solid var(--line); border-bottom: 1px solid var(--line);">
            <div class="content-width" style="text-align: center; max-width: 800px; margin: 0 auto; padding: 60px 24px;">
                <span class="section-label">Nelson Shoes Academy</span>
                <h2 style="font-family: 'Oswald', sans-serif; font-size: clamp(2.5rem, 5vw, 3.5rem); margin-bottom: 24px;">The Pedestal of Knowledge.</h2>
                <p style="font-size: 1.1rem; line-height: 1.8; margin: 0 auto 32px;">
                    Beyond the workshop lies the Academy—a center of excellence where the secrets of traditional shoemaking are preserved. By training the next generation of African artisans, Nelson ensures that the standard of 'Made in Nigeria' luxury remains world-class.
                </p>
                <a class="btn" href="{{ route('academy') }}">Discover the Academy</a>
            </div>
        </section>

        <section class="catalog-section" style="padding-top: 80px; padding-bottom: 80px; background: #fff;">
            <div class="content-width" style="max-width: 1000px; margin: 0 auto; display: grid; grid-template-columns: 1fr 1fr; gap: 48px; padding: 0 24px;">
                <div>
                    <h3 style="font-family: 'Oswald', sans-serif; font-size: 1.8rem; border-bottom: 1px solid var(--line); padding-bottom: 12px;">Our Heritage</h3>
                    <p style="margin-top: 16px;">The journey of Nelson from a dedicated craftsman to a master instructor, building a legacy of excellence in Nigerian shoemaking.</p>
                </div>
                <div>
                    <h3 style="font-family: 'Oswald', sans-serif; font-size: 1.8rem; border-bottom: 1px solid var(--line); padding-bottom: 12px;">Bespoke Excellence</h3>
                    <p style="margin-top: 16px;">How every bespoke order starts with a unique last (mold) of the client's foot, ensuring absolute precision and anatomical harmony.</p>
                </div>
                <div>
                    <h3 style="font-family: 'Oswald', sans-serif; font-size: 1.8rem; border-bottom: 1px solid var(--line); padding-bottom: 12px;">The One-of-One Promise</h3>
                    <p style="margin-top: 16px;">Why no two pairs of Nelson shoes will ever be identical, owing to the completely manual hand-dyeing and patina process.</p>
                </div>
                <div>
                    <h3 style="font-family: 'Oswald', sans-serif; font-size: 1.8rem; border-bottom: 1px solid var(--line); padding-bottom: 12px;">Global Vision</h3>
                    <p style="margin-top: 16px;">Taking Nigerian craftsmanship to the global luxury stage, proving that 'Made in Nigeria' can stand alongside the world's finest.</p>
                </div>
            </div>
        </section>

        <section class="feature-banner" style="margin-top: 0; background: var(--hero); color: #fff;">
            <div class="feature-copy">
                <h2 style="color: #fff;">Start Your Journey</h2>
                <p style="color: rgba(255, 255, 255, 0.8);">Experience the 86-hour difference.</p>
                <div style="display: flex; gap: 16px; margin-top: 24px; flex-wrap: wrap; justify-content: center;">
                    <a class="btn" href="{{ route('collection') }}">Enter the Workshop</a>
                    <a class="btn" href="https://wa.me/2340000000000" target="_blank" rel="noreferrer" style="background: transparent; color: #fff; border: 1px solid rgba(255,255,255,0.4);">Consult the Master</a>
                </div>
            </div>
            <div class="custom-visual">
                <img src="{{ asset('images/abbeylein-shoes-wooden_crocs_1920.jpg') }}" alt="Masterpiece shoe">
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
