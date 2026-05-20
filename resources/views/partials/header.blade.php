@php
    $promoText = $promoText ?? 'Nationwide delivery across Nigeria on selected orders';
    $mobilePromoText = $mobilePromoText ?? $promoText;
@endphp
<div class="promo-bar">
    <span class="promo-desktop-only">{{ $promoText }}</span>
    <span class="promo-desktop-only">Nelson Shoes</span>
    <span class="promo-mobile-only">{{ $mobilePromoText }}</span>
</div>

<header class="top-header">
    <button type="button" class="mobile-menu-toggle" aria-label="Toggle navigation" aria-expanded="false">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    </button>
    <div class="mobile-icons">
        <button type="button" aria-label="Search" class="icon-btn" data-open-search>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
        </button>
        <button type="button" aria-label="Cart" class="icon-btn cart-trigger" data-open-cart>
            <span class="cart-badge" data-cart-badge style="display: none;">0</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
        </button>
    </div>
    <nav class="header-nav header-nav-left" aria-label="Primary left">
        <a class="{{ request()->routeIs('home') ? 'is-active' : '' }}" href="{{ route('home') }}">Home</a>
        <a href="{{ route('home') }}#mens">Men</a>
        <a href="{{ route('home') }}#womens">Women</a>
        <a href="{{ route('collection') }}#accessories">Accessories</a>
        <a href="#" data-open-size-guide>Size Guide</a>
    </nav>

    <!-- Unified mobile navigation menu -->
    <nav class="mobile-nav" aria-label="Mobile menu">
        <a class="{{ request()->routeIs('home') ? 'is-active' : '' }}" href="{{ route('home') }}">Home</a>
        <a href="{{ route('home') }}#mens">Men</a>
        <a href="{{ route('home') }}#womens">Women</a>
        <a class="{{ request()->routeIs('collection') ? 'is-active' : '' }}" href="{{ route('collection') }}">Collection</a>
        <a href="{{ route('collection') }}#accessories">Accessories</a>
        <a class="{{ request()->routeIs('academy') ? 'is-active' : '' }}" href="{{ route('academy') }}">Academy</a>
        <a class="{{ request()->routeIs('about') ? 'is-active' : '' }}" href="{{ route('about') }}">About</a>
        <a class="{{ request()->routeIs('support') ? 'is-active' : '' }}" href="{{ route('support') }}">Support</a>
        <a href="#" data-open-size-guide>Size Guide</a>
    </nav>

    <a class="brand brand-centered" href="{{ route('home') }}">Nelson Shoes</a>
    <nav class="header-nav header-nav-right" aria-label="Primary right">
        <a class="{{ request()->routeIs('collection') ? 'is-active' : '' }}" href="{{ route('collection') }}">Collection</a>
        <a class="{{ request()->routeIs('academy') ? 'is-active' : '' }}" href="{{ route('academy') }}">Academy</a>
        <a class="{{ request()->routeIs('about') ? 'is-active' : '' }}" href="{{ route('about') }}">About</a>
        <a class="{{ request()->routeIs('support') ? 'is-active' : '' }}" href="{{ route('support') }}">Support</a>
        <div class="header-icons">
            <button type="button" aria-label="Search" class="icon-btn" data-open-search>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            </button>
            <button type="button" aria-label="Profile" class="icon-btn">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
            </button>
            <button type="button" aria-label="Cart" class="icon-btn cart-trigger" data-open-cart>
                <span class="cart-badge" data-cart-badge style="display: none;">0</span>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
            </button>
        </div>
    </nav>
</header>

@include('partials.search-overlay')
