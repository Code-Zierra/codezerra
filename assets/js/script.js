// Enhanced Mobile Menu Functionality
document.addEventListener('DOMContentLoaded', () => {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const closeMenuButton = document.getElementById('close-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuOverlay = document.getElementById('menu-overlay');
    const hamburger = document.querySelector('.hamburger');
    const mainHeader = document.getElementById('main-header');

    // Toggle mobile menu (safe: checks existence)
    function toggleMobileMenu() {
        if (!mobileMenu) return;
        mobileMenu.classList.toggle('active');
        if (menuOverlay) menuOverlay.classList.toggle('active');
        if (hamburger) hamburger.classList.toggle('active');
        document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
    }

    if (mobileMenuButton) mobileMenuButton.addEventListener('click', toggleMobileMenu);
    if (closeMenuButton) closeMenuButton.addEventListener('click', toggleMobileMenu);
    if (menuOverlay) menuOverlay.addEventListener('click', toggleMobileMenu);

    // Close menu when clicking on a link
    const mobileMenuLinks = document.querySelectorAll('#mobile-menu a');
    if (mobileMenuLinks && mobileMenuLinks.length) {
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', toggleMobileMenu);
        });
    }

    // Header scroll effect (only if header exists)
    if (mainHeader) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                mainHeader.classList.add('header-scrolled', 'py-3');
                mainHeader.classList.remove('py-4');
            } else {
                mainHeader.classList.remove('header-scrolled', 'py-3');
                mainHeader.classList.add('py-4');
            }
        });
    }

    // Prevent body scroll when menu is open (escape key)
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && mobileMenu && mobileMenu.classList.contains('active')) {
            toggleMobileMenu();
        }
    });
});