(function () {
    const whatsappNumber = '2340000000000';

    const initHeroRotator = () => {
        const hero = document.querySelector('[data-hero-rotator]');
        if (!hero) return;

        const slides = Array.from(hero.querySelectorAll('[data-hero-slide]'));
        if (!slides.length) return;

        const prevBtn = hero.querySelector('[data-hero-prev]');
        const nextBtn = hero.querySelector('[data-hero-next]');
        const dotsWrap = hero.querySelector('[data-hero-dots]');
        const dots = [];
        let activeIndex = slides.findIndex((slide) => slide.classList.contains('is-active'));
        let intervalId = null;

        if (activeIndex < 0) activeIndex = 0;

        const setActive = (index) => {
            activeIndex = (index + slides.length) % slides.length;
            slides.forEach((slide, i) => slide.classList.toggle('is-active', i === activeIndex));
            dots.forEach((dot, i) => dot.classList.toggle('is-active', i === activeIndex));
        };

        const startAutoplay = () => {
            if (slides.length < 2) return;
            if (intervalId) window.clearInterval(intervalId);
            intervalId = window.setInterval(() => setActive(activeIndex + 1), 5200);
        };

        if (dotsWrap && slides.length > 1) {
            dotsWrap.innerHTML = '';
            slides.forEach((_, index) => {
                const dot = document.createElement('button');
                dot.type = 'button';
                dot.className = 'hero-rotator-dot';
                dot.setAttribute('aria-label', `Go to slide ${index + 1}`);
                dot.addEventListener('click', () => {
                    setActive(index);
                    startAutoplay();
                });
                dotsWrap.appendChild(dot);
                dots.push(dot);
            });
        }

        prevBtn?.addEventListener('click', () => {
            setActive(activeIndex - 1);
            startAutoplay();
        });

        nextBtn?.addEventListener('click', () => {
            setActive(activeIndex + 1);
            startAutoplay();
        });

        setActive(activeIndex);
        startAutoplay();
    };

    const initFilterPanel = () => {
        const filterPanel = document.querySelector('[data-filter-panel]');
        const filterToggle = document.querySelector('[data-filter-toggle]');
        const closeButtons = document.querySelectorAll('[data-filter-close]');
        const header = document.querySelector('.top-header');
        const promoBar = document.querySelector('.promo-bar');
        if (!filterPanel || !filterToggle) return;

        const setHeaderOverlayHidden = (isHidden) => {
            header?.classList.toggle('is-temporarily-hidden', isHidden);
            promoBar?.classList.toggle('is-temporarily-hidden', isHidden);
        };

        const openFilter = () => {
            filterPanel.classList.add('is-open');
            filterToggle.setAttribute('aria-expanded', 'true');
            setHeaderOverlayHidden(true);
            if (window.innerWidth <= 991) {
                document.body.style.overflow = 'hidden';
            }
        };

        const closeFilter = () => {
            filterPanel.classList.remove('is-open');
            filterToggle.setAttribute('aria-expanded', 'false');
            setHeaderOverlayHidden(false);
            document.body.style.overflow = '';
        };

        filterToggle.addEventListener('click', () => {
            if (filterPanel.classList.contains('is-open')) {
                closeFilter();
            } else {
                openFilter();
            }
        });

        closeButtons.forEach(btn => btn.addEventListener('click', closeFilter));
    };

    const initSeeMore = () => {
        document.querySelectorAll('[data-see-more]').forEach((button) => {
            if (button.dataset.seeMoreBound === 'true') return;
            button.dataset.seeMoreBound = 'true';

            button.addEventListener('click', () => {
                const section = button.closest('.catalog-section');
                if (!section) return;

                const hiddenCards = section.querySelectorAll('.card-hidden, .card-hidden-mobile');
                const isExpanded = button.getAttribute('aria-expanded') === 'true';

                hiddenCards.forEach((card) => {
                    card.style.display = isExpanded ? 'none' : 'block';
                });

                button.setAttribute('aria-expanded', isExpanded ? 'false' : 'true');
                button.textContent = isExpanded ? 'See more' : 'See less';
            });
        });
    };

    const initCollectionMobileCardLimit = () => {
        const sections = Array.from(document.querySelectorAll('.catalog-section'));
        if (!sections.length) return;

        const isMobile = () => window.innerWidth <= 760;

        const ensureSeeMore = (section) => {
            let wrap = section.querySelector('.see-more-wrap');
            let button = section.querySelector('[data-see-more]');

            if (!wrap) {
                wrap = document.createElement('div');
                wrap.className = 'see-more-wrap';
                section.appendChild(wrap);
            }

            if (!button) {
                button = document.createElement('button');
                button.type = 'button';
                button.className = 'btn btn-outline see-more';
                button.setAttribute('data-see-more', '');
                button.setAttribute('aria-expanded', 'false');
                button.textContent = 'See more';
                wrap.appendChild(button);
            }

            return { wrap, button };
        };

        const applyState = () => {
            const mobile = isMobile();

            sections.forEach((section) => {
                const cards = Array.from(section.querySelectorAll('[data-product-card]'));
                if (!cards.length) return;
                const initialVisible = Number(section.dataset.initialVisible || 4);

                cards.forEach((card, index) => {
                    card.classList.toggle('card-hidden-mobile', mobile && index >= initialVisible);
                    if (!mobile) {
                        card.style.display = '';
                    }
                });

                const hasExtraCards = cards.length > initialVisible;
                const hasServerHiddenCards = section.querySelectorAll('.card-hidden').length > 0;
                const shouldHaveButton = hasExtraCards || hasServerHiddenCards;

                if (!shouldHaveButton) return;

                const { wrap, button } = ensureSeeMore(section);

                if (mobile) {
                    wrap.style.display = '';
                    button.setAttribute('aria-expanded', 'false');
                    button.textContent = 'See more';
                } else {
                    wrap.style.display = '';
                    section.querySelectorAll('.card-hidden').forEach((card) => {
                        card.style.display = 'none';
                    });
                    button.setAttribute('aria-expanded', 'false');
                    button.textContent = 'See more';
                }
            });

            initSeeMore();
        };

        applyState();
        window.addEventListener('resize', applyState);
    };

    const initProductModal = () => {
        const productModal = document.querySelector('[data-product-modal]');
        const header = document.querySelector('.top-header');
        const promoBar = document.querySelector('.promo-bar');
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

        const setHeaderOverlayHidden = (isHidden) => {
            header?.classList.toggle('is-temporarily-hidden', isHidden);
            promoBar?.classList.toggle('is-temporarily-hidden', isHidden);
        };

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
            modalSize.value = '40';
            modalOrder.href = buildWhatsAppLink(activeProduct, modalSize.value);
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
            setHeaderOverlayHidden(true);
            document.body.style.overflow = 'hidden';
        };

        const closeProductModal = () => {
            productModal.classList.remove('is-open');
            productModal.setAttribute('aria-hidden', 'true');
            setHeaderOverlayHidden(false);
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
        sizeGuideLink?.addEventListener('click', (event) => {
            event.preventDefault();
            document.querySelector('[data-open-size-guide]')?.click();
        });

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

    const initMobileMenu = () => {
        const toggleBtn = document.querySelector('.mobile-menu-toggle');
        const header = document.querySelector('.top-header');
        const promoBar = document.querySelector('.promo-bar');
        if (!toggleBtn || !header) return;

        toggleBtn.addEventListener('click', () => {
            const isOpen = header.classList.toggle('is-menu-open');
            toggleBtn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            if (isOpen) {
                header.classList.remove('is-transparent');
                promoBar?.classList.remove('is-hidden-on-scroll');
            }
        });
    };

    const initCustomOrderDismiss = () => {
        const closeButton = document.querySelector('[data-custom-order-close]');
        if (!closeButton) return;

        closeButton.addEventListener('click', () => {
            const card = closeButton.closest('.custom-order');
            if (!card) return;
            card.style.display = 'none';
        });
    };

    const initMobileArrivalsControls = () => {
        const belt = document.querySelector('[data-arrivals-belt]');
        const prevButton = document.querySelector('[data-arrivals-prev]');
        const nextButton = document.querySelector('[data-arrivals-next]');
        const dotsWrap = document.querySelector('[data-arrivals-dots]');
        if (!belt || !prevButton || !nextButton) return;

        const cards = Array.from(belt.querySelectorAll('.card'));
        const dots = [];

        const getStep = () => {
            const card = belt.querySelector('.card');
            return card ? card.getBoundingClientRect().width + 18 : 328;
        };

        const getActiveIndex = () => {
            if (!cards.length) return 0;
            const maxIndex = cards.length - 1;
            const index = Math.round(belt.scrollLeft / getStep());
            return Math.min(Math.max(index, 0), maxIndex);
        };

        const setActiveDot = () => {
            if (!dots.length) return;
            const activeIndex = getActiveIndex();
            dots.forEach((dot, index) => {
                dot.classList.toggle('is-active', index === activeIndex);
                dot.setAttribute('aria-current', index === activeIndex ? 'true' : 'false');
            });
        };

        const scrollBelt = (direction) => {
            belt.scrollBy({
                left: getStep() * direction,
                behavior: 'smooth'
            });
        };

        if (dotsWrap && cards.length) {
            dotsWrap.innerHTML = cards.map((_, index) => `
                <button type="button" class="arrivals-dot${index === 0 ? ' is-active' : ''}" aria-label="Go to arrivals slide ${index + 1}" aria-current="${index === 0 ? 'true' : 'false'}"></button>
            `).join('');

            dotsWrap.querySelectorAll('.arrivals-dot').forEach((dot, index) => {
                dots.push(dot);
                dot.addEventListener('click', () => {
                    belt.scrollTo({
                        left: getStep() * index,
                        behavior: 'smooth'
                    });
                });
            });
        }

        prevButton.addEventListener('click', () => scrollBelt(-1));
        nextButton.addEventListener('click', () => scrollBelt(1));
        belt.addEventListener('scroll', setActiveDot, { passive: true });
        window.addEventListener('resize', setActiveDot);
        setActiveDot();
    };

    const initHeaderScrollBehavior = () => {
        const header = document.querySelector('.top-header');
        const promoBar = document.querySelector('.promo-bar');
        if (!header) return;

        let lastY = window.scrollY;
        const threshold = 8;

        const makeSolid = () => {
            header.classList.remove('is-transparent');
            promoBar?.classList.remove('is-hidden-on-scroll');
            header.classList.remove('is-promo-hidden');
        };

        const makeTransparent = () => {
            header.classList.add('is-transparent');
            promoBar?.classList.add('is-hidden-on-scroll');
            header.classList.add('is-promo-hidden');
        };

        const onScroll = () => {
            const currentY = window.scrollY;
            const delta = currentY - lastY;

            if (header.classList.contains('is-menu-open')) {
                makeSolid();
                lastY = currentY;
                return;
            }

            if (currentY <= 40) {
                makeSolid();
            } else if (delta > threshold && currentY > 40) {
                makeTransparent();
            } else if (delta < -threshold) {
                makeSolid();
            }

            lastY = currentY;
        };

        window.addEventListener('scroll', onScroll, { passive: true });
        header.addEventListener('click', makeSolid);
        onScroll();
    };

    const initSizeGuideModal = () => {
        const modal = document.querySelector('[data-size-guide-modal]');
        if (!modal) return;
        const header = document.querySelector('.top-header');
        const promoBar = document.querySelector('.promo-bar');
        const triggers = document.querySelectorAll('[data-open-size-guide], [data-size-guide]');
        const closeButtons = modal.querySelectorAll('[data-close-size-guide]');

        const open = () => {
            modal.classList.add('is-open');
            modal.setAttribute('aria-hidden', 'false');
            header?.classList.add('is-temporarily-hidden');
            promoBar?.classList.add('is-temporarily-hidden');
            document.body.style.overflow = 'hidden';
        };

        const close = () => {
            modal.classList.remove('is-open');
            modal.setAttribute('aria-hidden', 'true');
            header?.classList.remove('is-temporarily-hidden');
            promoBar?.classList.remove('is-temporarily-hidden');
            document.body.style.overflow = '';
        };

        triggers.forEach((trigger) => {
            trigger.addEventListener('click', (event) => {
                event.preventDefault();
                open();
            });
        });
        closeButtons.forEach((button) => button.addEventListener('click', close));
        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape' && modal.classList.contains('is-open')) close();
        });
    };

    const initCartDrawer = () => {
        const drawer = document.querySelector('[data-cart-drawer]');
        if (!drawer) return;

        const openButtons = document.querySelectorAll('[data-open-cart]');
        const closeButtons = drawer.querySelectorAll('[data-close-cart]');
        const header = document.querySelector('.top-header');
        const promoBar = document.querySelector('.promo-bar');
        const rowToggles = drawer.querySelectorAll('[data-cart-edit-toggle]');
        const qtySteppers = drawer.querySelectorAll('[data-cart-qty-stepper]');

        const open = () => {
            drawer.classList.add('is-open');
            drawer.setAttribute('aria-hidden', 'false');
            if (window.innerWidth <= 991) {
                header?.classList.add('is-temporarily-hidden');
                promoBar?.classList.add('is-temporarily-hidden');
            }
            document.body.style.overflow = 'hidden';
        };

        const close = () => {
            drawer.classList.remove('is-open');
            drawer.setAttribute('aria-hidden', 'true');
            drawer.classList.remove('is-editing');
            drawer.querySelectorAll('.cart-row.is-editing').forEach((row) => row.classList.remove('is-editing'));
            drawer.querySelectorAll('[data-cart-row-details]').forEach((detailsRow) => {
                detailsRow.classList.remove('is-open');
                detailsRow.setAttribute('aria-hidden', 'true');
            });
            rowToggles.forEach((btn) => {
                btn.textContent = 'Edit';
                btn.setAttribute('aria-expanded', 'false');
            });
            header?.classList.remove('is-temporarily-hidden');
            promoBar?.classList.remove('is-temporarily-hidden');
            document.body.style.overflow = '';
        };

        rowToggles.forEach((button) => {
            button.addEventListener('click', () => {
                const row = button.closest('[data-cart-row]');
                if (!row) return;

                const isEditing = row.classList.toggle('is-editing');
                const detailsRow = row.nextElementSibling;
                if (detailsRow?.hasAttribute('data-cart-row-details')) {
                    detailsRow.classList.toggle('is-open', isEditing);
                    detailsRow.setAttribute('aria-hidden', isEditing ? 'false' : 'true');
                }
                const hasEditingRow = drawer.querySelector('.cart-row.is-editing');
                drawer.classList.toggle('is-editing', Boolean(hasEditingRow));
                button.textContent = isEditing ? 'Cancel' : 'Edit';
                button.setAttribute('aria-expanded', isEditing ? 'true' : 'false');
            });
        });

        qtySteppers.forEach((stepper) => {
            const minusBtn = stepper.querySelector('[data-cart-qty-minus]');
            const plusBtn = stepper.querySelector('[data-cart-qty-plus]');
            const valueNode = stepper.querySelector('[data-cart-qty-value]');
            if (!minusBtn || !plusBtn || !valueNode) return;

            const updateValue = (nextQty) => {
                valueNode.textContent = String(nextQty);
            };

            minusBtn.addEventListener('click', () => {
                const current = Number(valueNode.textContent || '1');
                const next = Math.max(1, current - 1);
                updateValue(next);
            });

            plusBtn.addEventListener('click', () => {
                const current = Number(valueNode.textContent || '1');
                updateValue(current + 1);
            });
        });

        openButtons.forEach((button) => button.addEventListener('click', open));
        closeButtons.forEach((button) => button.addEventListener('click', close));
        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape' && drawer.classList.contains('is-open')) close();
        });
    };

    document.addEventListener('DOMContentLoaded', () => {
        initMobileMenu();
        initHeaderScrollBehavior();
        initHeroRotator();
        initMobileArrivalsControls();
        initCollectionMobileCardLimit();
        initFilterPanel();
        initSeeMore();
        initProductModal();
        initWhatsAppForms();
        initCustomOrderDismiss();
        initSizeGuideModal();
        initCartDrawer();
    });
})();
