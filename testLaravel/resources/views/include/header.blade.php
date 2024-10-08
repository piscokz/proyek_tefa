<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="index.html" class="navbar-brand p-0">
            <img src="{{ asset('guest/img/logo/logo.png')}}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('beranda') }}" class="nav-item nav-link {{ Request::routeIs('beranda') ? 'active' : '' }}">Beranda</a>
                <a href="{{ route('tentang') }}" class="nav-item nav-link {{ Request::routeIs('tentang') ? 'active' : '' }}">Tentang</a>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ Request::is('majors/*') ? 'active' : '' }}" data-bs-toggle="dropdown">Keahlian</a>
                    <div class="dropdown-menu m-0 rounded shadow" style="background-color: #f8f9fa;">
                        <a href="{{ route('majors.index') }}" class="btn btn-warning mb-2 w-100">
                            <i class="bi bi-arrow-left"></i> Kembali ke Daftar Program
                        </a>        
                        @foreach($majors as $major)
                            <a href="{{ route('majors.show', $major->id) }}" class="dropdown-item {{ Request::routeIs('majors.show', $major->id) ? 'active' : '' }}">
                                {{ $major->name }}
                            </a>
                        @endforeach
                    </div>
                </div>
                

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ Request::is('bkk', 'tc', 'pkl') ? 'active' : '' }}" data-bs-toggle="dropdown">Program</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ route('bkk') }}" class="dropdown-item {{ Request::routeIs('bkk') ? 'active' : '' }}">BKK Lensa</a>
                        <a href="{{ route('tc') }}" class="dropdown-item {{ Request::routeIs('tc') ? 'active' : '' }}">Teaching Factory</a>
                        <a href="{{ route('pkl') }}" class="dropdown-item {{ Request::routeIs('pkl') ? 'active' : '' }}">Praktek Kerja Industri</a>
                    </div>
                </div>

                <a href="{{ route('guest.news.index') }}" class="nav-item nav-link {{ Request::routeIs('guest.news.index') ? 'active' : '' }} {{ Request::routeIs('guest.news.selengkapnya') ? 'active' : '' }}">Kabar Lensa</a>
                <a href="{{ route('kontak') }}" class="nav-item nav-link {{ Request::routeIs('contact') ? 'active' : '' }}">Kontak</a>

            </div>
        </div>
    </nav>

    <div class="container-xxl bg-primary page-header">
        <div class="container text-center">
            <h1 class="text-white animated zoomIn mb-3">@yield('title')</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('beranda') }}">Beranda</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">@yield('title')</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->
