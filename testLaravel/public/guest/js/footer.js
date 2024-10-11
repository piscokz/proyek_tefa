// Scroll to top effect
const scrollToTop = () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

// Tambahkan event listener ke footer
const footer = document.querySelector('.footer');
footer.addEventListener('click', scrollToTop);

// External JS for animations

// Initialize AOS (Animate On Scroll) library
document.addEventListener("DOMContentLoaded", function() {
    AOS.init({
        duration: 1000,  // Animation duration in ms
        once: true,      // Whether animation should happen only once while scrolling down
        easing: 'ease-in-out',  // Easing function
    });
});
