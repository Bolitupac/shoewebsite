@php($whatsappNumber = $whatsappNumber ?? '2340000000000')
<footer class="footer">
<div class="footer-columns heritage-footer">
<div><h4>Shop</h4><a href="{{ route('collection') }}">Collection</a><a href="{{ route('collection') }}#one-of-one">One-of-One</a><a href="{{ route('collection') }}#custom-order">Custom Order</a><a href="{{ route('collection') }}#accessories">Accessories</a></div>
<div><h4>Academy</h4><a href="{{ route('academy') }}">Masterclass</a><a href="{{ route('academy') }}#programs">Curriculum</a><a href="https://wa.me/{{ $whatsappNumber }}?text=Hello%2C%20I%20want%20to%20inquire%20about%20the%20Academy." target="_blank" rel="noreferrer">Enroll</a></div>
<div><h4>About</h4><a href="{{ route('about') }}">86-Hour Philosophy</a><a href="{{ route('about') }}#process">Process</a><a href="{{ route('about') }}#heritage">Heritage</a><a href="https://bolitupac.github.io/My-Websit/" target="_blank" rel="noreferrer">Developer &#8599;</a></div>
<div><h4>Support</h4><a href="{{ route('support') }}">Shipping</a><a href="{{ route('support') }}">Returns</a><a href="#" data-open-size-guide>Size Guide</a><a href="https://wa.me/{{ $whatsappNumber }}?text=Hello%2C%20I%20want%20to%20shop%20from%20Nelson%20Shoes." target="_blank" rel="noreferrer">WhatsApp</a></div>
</div>
<div class="footer-social">
<a href="#" class="footer-social-link" aria-label="Facebook">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5z"/></svg>
</a>
<a href="#" class="footer-social-link" aria-label="X (Twitter)">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
</a>
<a href="#" class="footer-social-link" aria-label="Instagram">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
</a>
<a href="#" class="footer-social-link" aria-label="YouTube">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
</a>
</div>
<div class="footer-bottom">This is a demo website created for presentation purposes and is not intended for real commerce. &copy; bolitupac</div>
</footer>
