// Mobile Menu Toggle
document.addEventListener('DOMContentLoaded', function() {
    const mobileToggle = document.getElementById('mobileToggle');
    const headerNav = document.getElementById('headerNav');
    const header = document.querySelector('.header');
    
    // Header scroll effect
    let lastScroll = 0;
    window.addEventListener('scroll', function() {
        const currentScroll = window.pageYOffset;
        if (currentScroll > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
        lastScroll = currentScroll;
    });
    
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
        
        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
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
    
    // Scroll to Top Button
    const scrollToTopButton = document.getElementById('scrollToTop');
    
    if (scrollToTopButton) {
        // Show/hide button based on scroll position
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                scrollToTopButton.classList.add('visible');
            } else {
                scrollToTopButton.classList.remove('visible');
            }
        });
        
        // Scroll to top on click
        scrollToTopButton.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
    
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

