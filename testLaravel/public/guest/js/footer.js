// Scroll to top effect
const scrollToTop = () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

// Tambahkan event listener ke footer
const footer = document.querySelector('.footer');
footer.addEventListener('click', scrollToTop);