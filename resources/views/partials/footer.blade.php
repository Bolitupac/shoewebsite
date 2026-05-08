@php($whatsappNumber = $whatsappNumber ?? '2340000000000')
<footer class="footer">
<div class="footer-columns heritage-footer">
<div><h4>Shop</h4><a href="{{ route('collection') }}">Collection</a><a href="{{ route('collection') }}#one-of-one">One-of-One</a><a href="{{ route('collection') }}#custom-order">Custom Order</a><a href="{{ route('collection') }}#accessories">Accessories</a></div>
<div><h4>Academy</h4><a href="{{ route('academy') }}">Masterclass</a><a href="{{ route('academy') }}#programs">Curriculum</a><a href="https://wa.me/{{ $whatsappNumber }}?text=Hello%2C%20I%20want%20to%20inquire%20about%20the%20Academy." target="_blank" rel="noreferrer">Enroll</a></div>
<div><h4>About</h4><a href="{{ route('about') }}">86-Hour Philosophy</a><a href="{{ route('about') }}#process">Process</a><a href="{{ route('about') }}#heritage">Heritage</a></div>
<div><h4>Support</h4><a href="{{ route('support') }}">Shipping</a><a href="{{ route('support') }}">Returns</a><a href="#" data-open-size-guide>Size Guide</a><a href="https://wa.me/{{ $whatsappNumber }}?text=Hello%2C%20I%20want%20to%20shop%20from%20Nelson%20Shoes." target="_blank" rel="noreferrer">WhatsApp</a></div>
</div>
<div class="footer-bottom">Copyright 2026 Nelson Shoes. All Rights Reserved.</div>
</footer>
