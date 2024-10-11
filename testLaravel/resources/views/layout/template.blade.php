<!DOCTYPE html>
<html lang="en">

@include('include.taghead')

<body>
    <div class="container-xxl bg-white p-0">

        @include('include/header')

        @yield('content')

        <!-- Footer Start -->
        @include('include/footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('guest/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('guest/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('guest/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('guest/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- External JS -->
    <script src="path/to/animations.js"></script>
    <!-- Include AOS Library -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- Template Javascript -->
    <script src="{{ asset('guest/js/main.js') }}"></script>
    <script src="{{ asset('guest/js/footer.js') }}"></script>
</body>

</html>