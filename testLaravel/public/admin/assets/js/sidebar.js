$(document).ready(function() {
    // Toggle sidebar visibility on button click
    $('.sidebar-offcanvas').on('click', '.nav-link', function() {
        // Remove active class from all links
        $('.nav-link').removeClass('active');
        // Add active class to clicked link
        $(this).addClass('active');
    });

    // Toggle sidebar
    $('#sidebarToggle').click(function() {
        $('#sidebar').toggleClass('sidebar-offcanvas');
    });
});
