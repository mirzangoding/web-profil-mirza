document.addEventListener('DOMContentLoaded', function () {
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileLinks = document.querySelectorAll('.mobile-link, .mobile-cta');
    const nav = document.getElementById('navbar');
    const backToTop = document.getElementById('back-to-top');
    const skillFills = document.querySelectorAll('.skill-fill');
    const statNumbers = document.querySelectorAll('.stat-number');
    const filterButtons = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    let countersAnimated = false;
    let skillsAnimated = false;

    function toggleMobileMenu() {
        hamburger.classList.toggle('open');
        mobileMenu.classList.toggle('open');
    }

    hamburger?.addEventListener('click', toggleMobileMenu);

    mobileLinks.forEach((link) => {
        link.addEventListener('click', () => {
            hamburger.classList.remove('open');
            mobileMenu.classList.remove('open');
        });
    });

    function updateNavbarOnScroll() {
        if (window.scrollY > 40) {
            nav.classList.add('scrolled');
        } else {
            nav.classList.remove('scrolled');
        }

        if (window.scrollY > 500) {
            backToTop.classList.add('visible');
        } else {
            backToTop.classList.remove('visible');
        }
    }

    function animateSkills() {
        skillFills.forEach((fill) => {
            const width = fill.dataset.width;
            fill.style.width = `${width}%`;
        });
    }

    function animateCounters() {
        statNumbers.forEach((number) => {
            const target = parseInt(number.dataset.count, 10) || 0;
            const duration = 1500;
            const step = target / (duration / 40);
            let current = 0;

            const counter = setInterval(() => {
                current += step;
                if (current >= target) {
                    number.textContent = target;
                    clearInterval(counter);
                } else {
                    number.textContent = Math.round(current);
                }
            }, 40);
        });
    }

    function handleScrollAnimations() {
        const aboutSection = document.querySelector('.about-section');
        const portfolioSection = document.querySelector('.portfolio-section');

        if (!skillsAnimated && aboutSection && window.scrollY + window.innerHeight > aboutSection.offsetTop + 100) {
            animateSkills();
            skillsAnimated = true;
        }

        if (!countersAnimated && portfolioSection && window.scrollY + window.innerHeight > portfolioSection.offsetTop - 100) {
            animateCounters();
            countersAnimated = true;
        }
    }

    function setupPortfolioFilters() {
        filterButtons.forEach((button) => {
            button.addEventListener('click', () => {
                const filter = button.dataset.filter;

                filterButtons.forEach((btn) => btn.classList.remove('active'));
                button.classList.add('active');

                portfolioItems.forEach((item) => {
                    const category = item.dataset.category;
                    if (filter === 'all' || category === filter) {
                        item.classList.remove('hidden');
                    } else {
                        item.classList.add('hidden');
                    }
                });
            });
        });
    }

    function initComponents() {
        if (typeof Swiper !== 'undefined') {
            new Swiper('#hero-swiper', {
                loop: true,
                speed: 900,
                autoplay: {
                    delay: 6000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: '#hero-next',
                    prevEl: '#hero-prev',
                },
                pagination: {
                    el: '#hero-pagination',
                    clickable: true,
                },
            });
        }

        if (typeof GLightbox !== 'undefined') {
            GLightbox({ selector: '.glightbox' });
        }

        if (typeof AOS !== 'undefined') {
            AOS.init({ duration: 900, once: true, easing: 'ease-out-quart' });
        }

        setupPortfolioFilters();
        handleScrollAnimations();
        updateNavbarOnScroll();
    }

    backToTop?.addEventListener('click', (event) => {
        event.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    window.addEventListener('scroll', () => {
        updateNavbarOnScroll();
        handleScrollAnimations();
    });

    initComponents();
});
