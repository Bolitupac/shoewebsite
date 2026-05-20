<div class="search-overlay" id="searchOverlay" aria-hidden="true">
    <div class="search-overlay-backdrop" id="searchBackdrop"></div>
    <div class="search-overlay-content">
        <div class="search-overlay-header">
            <span class="search-overlay-brand">Nelson Shoes</span>
            <button type="button" class="search-overlay-close" id="closeSearch" aria-label="Close search">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>
        </div>
        <form action="{{ route('search') }}" method="GET" class="search-overlay-form">
            <input type="search" name="q" id="searchInput" placeholder="Search the workshop..." autocomplete="off" required>
            <button type="submit" class="search-overlay-submit" aria-label="Submit search">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            </button>
        </form>
    </div>
</div>
