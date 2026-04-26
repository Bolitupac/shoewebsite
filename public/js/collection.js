/* ==========================================================
   collection.js — See-more toggle for collection page
   ========================================================== */

document.querySelectorAll('[data-see-more]').forEach((button) => {
    button.addEventListener('click', () => {
        const section = button.closest('.catalog-section');
        const hiddenCards = section.querySelectorAll('.card-hidden');
        const isExpanded = button.getAttribute('aria-expanded') === 'true';

        hiddenCards.forEach((card) => {
            card.style.display = isExpanded ? 'none' : 'block';
        });

        button.setAttribute('aria-expanded', isExpanded ? 'false' : 'true');
        button.textContent = isExpanded ? 'See more' : 'See less';
    });
});
