// Mobile Menu Toggle
document.addEventListener('DOMContentLoaded', function() {
    const mobileToggle = document.getElementById('mobileToggle');
    const headerNav = document.getElementById('headerNav');
    const header = document.querySelector('.header');
    
    // Header scrolled: IntersectionObserver (sem scroll listener)
    if (header) {
        const headerObserver = new IntersectionObserver(
            function(entries) {
                if (!entries[0]) return;
                header.classList.toggle('scrolled', !entries[0].isIntersecting);
            },
            { root: null, rootMargin: '-50px 0px 0px 0px', threshold: 0 }
        );
        headerObserver.observe(header);
    }
    // Scroll to top: listener com rAF para aparecer após 300px (botão tinha sumido com só observer)
    const scrollToTopButton = document.getElementById('scrollToTop');
    if (scrollToTopButton) {
        var scrollTicking = false;
        function updateScrollToTop() {
            scrollToTopButton.classList.toggle('visible', window.pageYOffset > 300);
            scrollTicking = false;
        }
        updateScrollToTop();
        window.addEventListener('scroll', function() {
            if (scrollTicking) return;
            scrollTicking = true;
            requestAnimationFrame(updateScrollToTop);
        }, { passive: true });
        scrollToTopButton.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({ top: 0, left: 0, behavior: 'smooth' });
        });
    }
    
    const mobileClose = document.getElementById('mobileClose');
    
    function closeMobileMenu() {
        if (mobileToggle && headerNav) {
            mobileToggle.classList.remove('active');
            headerNav.classList.remove('active');
            document.body.style.overflow = '';
        }
    }
    
    if (mobileToggle && headerNav) {
        mobileToggle.addEventListener('click', function() {
            mobileToggle.classList.toggle('active');
            headerNav.classList.toggle('active');
            document.body.style.overflow = headerNav.classList.contains('active') ? 'hidden' : '';
        });
        
        if (mobileClose) {
            mobileClose.addEventListener('click', closeMobileMenu);
        }
        
        // Mobile dropdown toggle
        const dropdownToggle = headerNav.querySelector('.header__dropdown > .header__link');
        const dropdownSubmenu = headerNav.querySelector('.header__dropdown .header__submenu');
        
        if (dropdownToggle && dropdownSubmenu) {
            dropdownToggle.addEventListener('click', function(e) {
                if (window.innerWidth <= 968) {
                    e.preventDefault();
                    dropdownSubmenu.classList.toggle('active');
                    const arrow = dropdownToggle.querySelector('.header__arrow');
                    if (arrow) {
                        arrow.style.transform = dropdownSubmenu.classList.contains('active') ? 'rotate(180deg)' : 'rotate(0deg)';
                    }
                }
            });
        }
        
        // Close menu when clicking on a link (except dropdown toggle)
        const headerLinks = headerNav.querySelectorAll('.header__link:not(.header__dropdown > .header__link)');
        headerLinks.forEach(link => {
            link.addEventListener('click', closeMobileMenu);
        });
        
        // Close submenu links
        const submenuLinks = headerNav.querySelectorAll('.header__sublink');
        submenuLinks.forEach(link => {
            link.addEventListener('click', closeMobileMenu);
        });
        
        // Close menu when clicking outside (só quando menu está aberto)
        document.addEventListener('click', function(event) {
            if (!headerNav.classList.contains('active')) return;
            if (!headerNav.contains(event.target) && !mobileToggle.contains(event.target)) {
                closeMobileMenu();
            }
        });
    }
    
    // Smooth scroll for anchor links
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#' && href !== '') {
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    const headerHeight = document.querySelector('.header').offsetHeight;
                    const targetPosition = target.offsetTop - headerHeight;
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
    
    // FAQ Accordion
    const faqItems = document.querySelectorAll('.faq-section__item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-section__question');
        
        if (question) {
            question.addEventListener('click', function() {
                const isActive = item.classList.contains('active');
                
                // Close all items
                faqItems.forEach(otherItem => {
                    otherItem.classList.remove('active');
                });
                
                // Open clicked item if it wasn't active
                if (!isActive) {
                    item.classList.add('active');
                }
            });
        }
    });
});

