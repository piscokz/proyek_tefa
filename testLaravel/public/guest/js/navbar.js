// Change navbar color on scroll
window.onscroll = function() {
    const navbar = document.getElementById("navbar");
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        navbar.classList.remove("bg-primary");
        navbar.classList.add("bg-light");
        navbar.classList.remove("navbar-dark");
        navbar.classList.add("navbar-light");
    } else {
        navbar.classList.remove("bg-light");
        navbar.classList.add("bg-primary");
        navbar.classList.remove("navbar-light");
        navbar.classList.add("navbar-dark");
    }
};