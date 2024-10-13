<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Star Admin2 </title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="{{ asset('admin/assets/vendors/feather/feather.css')}}">
        <link rel="stylesheet" href="{{ asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
        <link rel="stylesheet" href="{{ asset('admin/assets/vendors/ti-icons/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{ asset('admin/assets/vendors/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{ asset('admin/assets/vendors/typicons/typicons.css')}}">
        <link rel="stylesheet" href="{{ asset('admin/assets/vendors/simple-line-icons/css/simple-line-icons.css')}}">
        <link rel="stylesheet" href="{{ asset('admin/assets/vendors/css/vendor.bundle.base.css')}}">
        <link rel="stylesheet" href="{{ asset('admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css')}}">
        <!-- endinject -->
        <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png')}}" />
    </head>
    <body>
        <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                    <div class="brand-logo">
                    <img src="{{ asset('admin/assets/images/logo.svg')}}" alt="logo">
                    </div>
                    <h4>Hello! let's get started</h4>
                    <h6 class="fw-light">Sign in to continue.</h6>
                    <form class="pt-3" action="{{ route('auth.authenticate')}}" method="POST">
                        @csrf
                    <div class="form-group">
                        <input type="email" class="form-control form-control-lg @error('email') {{ 'is-invalid'}} @enderror" id="exampleInputEmail1" placeholder="Username" name="email" value="{{@old('email')}}">
                        @error('email')
                            <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-lg @error('password') {{ 'is-invalid'}} @enderror" id="exampleInputPassword1" placeholder="Password" name="password">
                                @error('password')
                                    <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                                @enderror
                    </div>
                    <div class="mt-3 d-grid gap-2">
                        <input type="submit" class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn" value="SIGN IN">
                    </div>
                    
                    </form>
                </div>
                </div>
            </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="{{ asset('admin/assets/vendors/js/vendor.bundle.base.js')}}"></script>
        <script src="{{ asset('admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{ asset('admin/assets/js/off-canvas.js')}}"></script>
        <script src="{{ asset('admin/assets/js/template.js')}}"></script>
        <script src="{{ asset('admin/assets/js/settings.js')}}"></script>
        <script src="{{ asset('admin/assets/js/hoverable-collapse.js')}}"></script>
        <script src="{{ asset('admin/assets/js/todolist.js')}}"></script>
        <!-- endinject -->
    </body>
</html>