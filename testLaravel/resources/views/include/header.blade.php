        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.html" class="navbar-brand p-0">
                    <!-- <h1 class="m-0">BizConsult</h1> -->
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
                            <a href="#" class="nav-link dropdown-toggle {{ Request::is('pplg', 'tbsm', 'tkro', 'tkj', 'ps') ? 'active' : '' }}" data-bs-toggle="dropdown">Keahlian</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ route('pplg') }}" class="dropdown-item {{ Request::routeIs('pplg') ? 'active' : '' }}">Pengembangan Perangkat Lunak Dan Gim</a>
                                <a href="{{ route('tbsm') }}" class="dropdown-item {{ Request::routeIs('tbsm') ? 'active' : '' }}">Teknik Bisnis Sepeda Motor</a>
                                <a href="{{ route('tkro') }}" class="dropdown-item {{ Request::routeIs('tkro') ? 'active' : '' }}">Teknik Kendaraan Ringan Otomotif</a>
                                <a href="{{ route('tkj') }}" class="dropdown-item {{ Request::routeIs('tkj') ? 'active' : '' }}">Teknik Komputer Dan Jaringan</a>
                                <a href="{{ route('ps') }}" class="dropdown-item {{ Request::routeIs('ps') ? 'active' : '' }}">Perbankan Syari'ah</a>
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

                        <a href="{{ route('guest.news.index') }}" class="nav-item nav-link {{ Request::routeIs('guest.news.index') ? 'active' : '' }}  {{ Request::routeIs('guest.news.selengkapnya') ? 'active' : '' }}">Kabar Lensa</a>
                        <a href="{{ route('kontak') }}" class="nav-item nav-link {{ Request::routeIs('contact') ? 'active' : '' }}">Kontak</a>

                    </div>
                </div>
            </nav>

            <div class="container-xxl bg-primary page-header">
                <div class="container text-center">
                    <h1 class="text-white animated zoomIn mb-3">@yield('title')</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="index.html">Beranda</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">@yield('title')</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->