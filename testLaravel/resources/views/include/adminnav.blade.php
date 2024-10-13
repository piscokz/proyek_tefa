<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                <span class="icon-menu"></span>
            </button>
        </div>
        <div>
            <a class="navbar-brand brand-logo" href="{{ route('admin.dashboard.index') }}">
                <span class="text-dark">Admin</span>
                <span class="text-primary">Lensa</span>
            </a>
        </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-top">
        <ul class="navbar-nav ms-auto">
            <!-- Remove 'd-none d-lg-block' to ensure it's visible on mobile -->
            <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Programmer </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                    <a class="dropdown-item py-3">
                        <p class="mb-0 fw-medium float-start">Anggota Tim:</p>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item" href="https://id.linkedin.com/in/ibrahim-ahmad-falathin-1863a7321#:~:text=Lihat%20profil%20Ibrahim%20Ahmad%20Falathin%20di" target="_blank">
                        <div class="preview-item-content flex-grow py-2">
                            <p class="preview-subject ellipsis fw-medium text-dark">Ibrahim Ahmad Falathin</p>
                            <p class="fw-light small-text mb-0">Back End</p>
                        </div>
                    </a>
                    <a class="dropdown-item preview-item" href="https://id.linkedin.com/in/martinus-cruiz-muryanto-3332b2299">
                        <div class="preview-item-content flex-grow py-2">
                            <p class="preview-subject ellipsis fw-medium text-dark">Martinus Cruiz Muryanto</p>
                            <p class="fw-light small-text mb-0">Front End</p>
                        </div>
                    </a>
                </div>
            </li>

            <!-- Remove 'd-none d-lg-block' from date picker -->
            <li class="nav-item d-none d-lg-block">
                <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
                    <span class="input-group-addon input-group-prepend border-right">
                        <span class="icon-calendar input-group-text calendar-icon"></span>
                    </span>
                    <input type="text" class="form-control" readonly>
                </div>
            </li>

            <!-- Notification icon -->
            @include('partials.notification', ['contacts' => $contacts])

            <!-- User icon -->
            <li class="nav-item dropdown user-dropdown">
                <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false" title="User Menu">
                    <img src="{{ asset('guest/img/logo/logo.png') }}" alt="User Avatar" class="img-fluid rounded-circle" style="width: 28px; height: 28px;">
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    <div class="dropdown-header text-center">
                        <img src="{{ asset('guest/img/logo/logo.png') }}" alt="User Avatar" class="img-md rounded-circle" style="width: 64px; height: 64px;">
                        <p class="mb-1 mt-3 fw-semibold">{{ auth()->user()->name }}</p>
                        <p class="fw-light text-muted mb-0">{{ auth()->user()->email }}</p>
                    </div>
                    <form action="{{ route('auth.logout') }}" method="POST"> <!-- Ensure POST method -->
                        @csrf <!-- Ensure CSRF token is present -->
                        <button type="submit" class="dropdown-item">
                            <i class="dropdown-item-icon mdi mdi-logout text-danger me-2"></i> Log Out
                        </button>
                    </form>
                </div>  
            </li>
        </ul>

        <!-- Keep the menu toggler for small screens -->
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
