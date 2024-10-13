<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-gradient-primary px-4 px-lg-5 py-3 py-lg-0 shadow-lg">
        <a href="{{ route('beranda') }}" class="navbar-brand p-0">
            <img src="{{ asset('guest/img/logo/logo.png') }}" alt="Logo" class="animated zoomIn">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('beranda') }}" class="nav-item nav-link {{ Request::routeIs('beranda') ? 'active' : '' }} animated fadeInLeft">
                    <i class="fas fa-home animated fadeIn"></i> Beranda
                </a>
                <a href="{{ route('tentang') }}" class="nav-item nav-link {{ Request::routeIs('tentang') ? 'active' : '' }} animated fadeInLeft">
                    <i class="fas fa-info-circle animated fadeIn"></i> Tentang
                </a>

                <a href="{{ route('majors.index')}}" class="nav-link nav-item {{ Request::is('major*') ? 'active' : '' }} animated fadeInLeft">
                    <i class="fas fa-graduation-cap animated fadeIn"></i> Keahlian
                </a>

                <!-- Keahlian Dropdown -->
                {{-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ Request::is('majors*') ? 'active' : '' }} animated fadeInLeft" data-bs-toggle="dropdown">
                        <i class="fas fa-graduation-cap animated fadeIn"></i> Keahlian
                    </a>
                    <div class="dropdown-menu m-0 rounded shadow" style="background-color: #f8f9fa;">
                        <a href="{{ route('majors.index') }}" class="btn btn-warning mb-2 w-100 animated fadeIn">Daftar Program :</a>
                        @foreach($majors as $major)
                            <a href="{{ route('majors.show', $major->id) }}" class="dropdown-item {{ Request::routeIs('majors.show', $major->id) ? 'active' : '' }} animated fadeIn">
                                {{ $major->name }}
                            </a>
                        @endforeach
                    </div>
                </div> --}}

                <!-- Program Dropdown -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ Request::is('bkk') || Request::is('tc') || Request::is('pkl') ? 'active' : '' }} animated fadeInLeft" data-bs-toggle="dropdown">
                        <i class="fas fa-chalkboard-teacher animated fadeIn"></i> Program
                    </a>
                    <div class="dropdown-menu m-0 rounded shadow" style="background-color: #f8f9fa;">
                        <a href="{{ route('bkk') }}" class="dropdown-item {{ Request::routeIs('bkk') ? 'active' : '' }} animated fadeIn">BKK Lensa</a>
                        <a href="{{ route('tc') }}" class="dropdown-item {{ Request::routeIs('tc') ? 'active' : '' }} animated fadeIn">Teaching Factory</a>
                        <a href="{{ route('pkl') }}" class="dropdown-item {{ Request::routeIs('pkl') ? 'active' : '' }} animated fadeIn">Praktek Kerja Industri</a>
                    </div>
                </div>

                <!-- Kabar Lensa -->
                <a href="{{ route('guest.news.index') }}" class="nav-item nav-link {{ Request::routeIs('guest.news.index') || Request::routeIs('guest.news.selengkapnya') ? 'active' : '' }} animated fadeInLeft">
                    <i class="fas fa-newspaper animated fadeIn"></i> Kabar Lensa
                </a>

                <!-- Kontak Kami -->
                <a href="{{ route('kontak') }}" class="nav-item nav-link {{ Request::routeIs('kontak') ? 'active' : '' }} animated fadeInLeft">
                    <i class="fas fa-phone-alt animated fadeIn"></i> Kontak Kami
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="container-xxl bg-primary page-header position-relative overflow-hidden">
        <div class="container text-center">
            <h1 class="text-white animated zoomIn mb-3">@yield('title')</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center animated fadeInUp">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('beranda') }}"><i class="fas fa-home animated fadeIn"></i> Beranda</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">@yield('title')</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->
