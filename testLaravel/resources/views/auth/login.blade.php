<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SMK Lentera Bangsa</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <!-- endinject -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/login.css') }}"> <!-- Custom CSS -->
    <!-- endinject -->

    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png') }}" />
</head>

<body class="bg-light">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-6 col-lg-4 col-sm-8">
                <div class="auth-form-light text-left py-5 px-4 px-sm-5 border rounded shadow bg-white">
                    <!-- Brand Logo -->
                    <div class="text-center mb-4">
                        <img src="{{ asset('guest/img/logo/logo.png') }}" alt="User Avatar" class="img-fluid rounded-circle" style="width: 80px; height: 80px;">
                    </div>
                    <div class="brand-logo text-center mb-4">
                        <img src="{{ asset('admin/assets/images/logo.svg') }}" alt="logo" style="max-width: 100%; height: auto;">
                    </div>

                    <h4 class="text-center">Selamat Datang di SMK Lentera Bangsa</h4>
                    <h6 class="fw-light text-center mb-4">Silakan masuk untuk melanjutkan.</h6>

                    <!-- Form Start -->
                    <form class="pt-3" action="{{ route('auth.authenticate') }}" method="POST">
                        @csrf
                        <!-- Email Input -->
                        <div class="form-group">
                            <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Password Input -->
                        <div class="form-group">
                            <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Password" name="password">
                            @error('password')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="mt-4 d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg fw-medium auth-form-btn">MASUK</button>
                        </div>
                    </form>
                    <!-- Form End -->

                </div>
            </div>
        </div>
    </div>

    <!-- container-scroller -->

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Select the form container
            const formContainer = document.querySelector('.auth-form-light');

            // Add the 'visible' class to the form after a slight delay
            setTimeout(() => {
                formContainer.classList.add('visible');
            }, 100); // 100ms delay for the animation to start
        });
    </script>

    <!-- plugins:js -->
    <script src="{{ asset('admin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <!-- endinject -->

    <!-- inject:js -->
    <script src="{{ asset('admin/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/assets/js/template.js') }}"></script>
    <script src="{{ asset('admin/assets/js/settings.js') }}"></script>
    <script src="{{ asset('admin/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin/assets/js/todolist.js') }}"></script>
    <!-- endinject -->
</body>

</html>
