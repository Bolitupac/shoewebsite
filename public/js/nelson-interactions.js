(function () {
    const whatsappNumber = '2340000000000';

    const initHeroRotator = () => {
        const hero = document.querySelector('[data-hero-rotator]');
        if (!hero) return;

        const slides = Array.from(hero.querySelectorAll('[data-hero-slide]'));
        if (slides.length < 2) return;

        let activeIndex = 0;
        window.setInterval(() => {
            slides[activeIndex].classList.remove('is-active');
            activeIndex = (activeIndex + 1) % slides.length;
            slides[activeIndex].classList.add('is-active');
        }, 5200);
    };

    const initFilterPanel = () => {
        const filterPanel = document.querySelector('[data-filter-panel]');
        const filterToggle = document.querySelector('[data-filter-toggle]');
        if (!filterPanel || !filterToggle) return;

        filterToggle.addEventListener('click', () => {
            const isOpen = filterPanel.classList.toggle('is-open');
            filterToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        });
    };

    const initSeeMore = () => {
        document.querySelectorAll('[data-see-more]').forEach((button) => {
            button.addEventListener('click', () => {
                const section = button.closest('.catalog-section');
                if (!section) return;

                const hiddenCards = section.querySelectorAll('.card-hidden');
                const isExpanded = button.getAttribute('aria-expanded') === 'true';

                hiddenCards.forEach((card) => {
                    card.style.display = isExpanded ? 'none' : 'block';
                });

                button.setAttribute('aria-expanded', isExpanded ? 'false' : 'true');
                button.textContent = isExpanded ? 'See more' : 'See less';
            });
        });
    };

    const initProductModal = () => {
        const productModal = document.querySelector('[data-product-modal]');
        if (!productModal) return;

        const modalImage = productModal.querySelector('[data-modal-image]');
        const modalTitle = productModal.querySelector('[data-modal-title]');
        const modalPrice = productModal.querySelector('[data-modal-price]');
        const modalDescription = productModal.querySelector('[data-modal-description]');
        const modalColour = productModal.querySelector('[data-modal-colour]');
        const modalOrder = productModal.querySelector('[data-modal-order]');
        const modalSize = productModal.querySelector('[data-modal-size]');
        const sizeGuideLink = productModal.querySelector('[data-size-guide]');
        const modalInfo = productModal.querySelector('[data-modal-info]');
        const recommendedGrid = productModal.querySelector('[data-recommended-grid]');
        const closeButtons = productModal.querySelectorAll('[data-close-modal]');
        const productCards = Array.from(document.querySelectorAll('[data-product-card]'));
        let activeProduct = null;

        const buildWhatsAppLink = (product, size) => {
            const text = `Hello, I am interested in the ${product.name} in size ${size}.`;
            return `https://wa.me/${product.whatsappNumber}?text=${encodeURIComponent(text)}`;
        };

        const renderRecommendations = (activeCard) => {
            const fallbackCards = productCards.filter((item) => item !== activeCard).slice(0, 3);
            recommendedGrid.innerHTML = fallbackCards.map((item) => {
                const image = item.querySelector('img');
                return `
                    <article class="recommended-item" tabindex="0" data-recommended-id="${item.dataset.id}">
                        <img src="${image.src}" alt="${image.alt}">
                        <div class="recommended-item-copy">
                            <h4>${item.dataset.name}</h4>
                            <span>${item.dataset.price}</span>
                        </div>
                    </article>
                `;
            }).join('');

            recommendedGrid.querySelectorAll('.recommended-item').forEach((item) => {
                const linkedCard = productCards.find((card) => card.dataset.id === item.dataset.recommendedId);
                item.addEventListener('click', () => openProductModal(linkedCard));
                item.addEventListener('keydown', (event) => {
                    if (event.key === 'Enter' || event.key === ' ') {
                        event.preventDefault();
                        openProductModal(linkedCard);
                    }
                });
            });
        };

        const openProductModal = (card) => {
            if (!card) return;

            const image = card.querySelector('img');
            activeProduct = {
                id: card.dataset.id,
                name: card.dataset.name,
                price: card.dataset.price,
                category: card.dataset.category,
                colour: card.dataset.colour,
                description: card.dataset.description,
                whatsappNumber: card.dataset.whatsappNumber || whatsappNumber
            };

            modalImage.src = image.src;
            modalImage.alt = image.alt;
            modalTitle.textContent = activeProduct.name;
            modalPrice.textContent = activeProduct.price;
            modalDescription.textContent = activeProduct.description;
            modalColour.textContent = activeProduct.colour;
            modalSize.value = '6';
            modalOrder.href = buildWhatsAppLink(activeProduct, modalSize.value);
            sizeGuideLink.href = `https://wa.me/${activeProduct.whatsappNumber}?text=${encodeURIComponent(`Hello, I need the size guide for ${activeProduct.name}.`)}`;
            modalInfo.innerHTML = `
                <li>Construction Type: Lockstitch</li>
                <li>Fitting Type: G</li>
                <li>Material / Finish: ${activeProduct.colour}</li>
                <li>Product Type: ${activeProduct.category}</li>
                <li>Sole Type: Leather</li>
            `;

            renderRecommendations(card);
            productModal.classList.add('is-open');
            productModal.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        };

        const closeProductModal = () => {
            productModal.classList.remove('is-open');
            productModal.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        };

        productCards.forEach((card) => {
            card.addEventListener('click', (event) => {
                if (!event.target.closest('a')) {
                    openProductModal(card);
                }
            });
        });

        closeButtons.forEach((button) => button.addEventListener('click', closeProductModal));

        modalSize.addEventListener('change', () => {
            if (activeProduct) {
                modalOrder.href = buildWhatsAppLink(activeProduct, modalSize.value);
            }
        });

        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape' && productModal.classList.contains('is-open')) {
                closeProductModal();
            }
        });
    };

    const initWhatsAppForms = () => {
        document.querySelectorAll('[data-whatsapp-form]').forEach((form) => {
            form.addEventListener('submit', (event) => {
                event.preventDefault();

                const data = new FormData(form);
                const intro = form.dataset.whatsappIntro || 'Hello, I want to make an inquiry.';
                const lines = [intro];

                for (const [key, value] of data.entries()) {
                    const cleanValue = String(value || '').trim();
                    if (cleanValue) {
                        const label = key.replace(/[-_]/g, ' ').replace(/\b\w/g, (letter) => letter.toUpperCase());
                        lines.push(`${label}: ${cleanValue}`);
                    }
                }

                window.open(`https://wa.me/${whatsappNumber}?text=${encodeURIComponent(lines.join('\n'))}`, '_blank', 'noreferrer');
            });
        });
    };

    document.addEventListener('DOMContentLoaded', () => {
        initHeroRotator();
        initFilterPanel();
        initSeeMore();
        initProductModal();
        initWhatsAppForms();
    });
})();
