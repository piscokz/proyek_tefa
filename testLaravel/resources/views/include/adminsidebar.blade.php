<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <!-- Guest Home Page -->
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('beranda') ? 'active' : '' }}" href="{{ route('beranda') }}">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Beranda</span>
            </a>
        </li>
        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin.dashboard.index') ? 'active' : '' }}" href="{{ route('admin.dashboard.index') }}">
                <i class="mdi mdi-view-dashboard menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <!-- Settings Section -->
        <li class="nav-item nav-category">Settings</li>

        <!-- Program Keahlian -->
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('major.index') ? 'active' : '' }}" href="{{ route('major.index') }}">
                <i class="mdi mdi-school menu-icon"></i>
                <span class="menu-title">Program Keahlian</span>
            </a>
        </li>
        
        <!-- Daftar Berita -->
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin.news.index') || request()->routeIs('admin.news.create') || request()->routeIs('admin.news.edit', ['id' => '*']) ? 'active' : '' }}" href="{{ route('admin.news.index') }}">
                <i class="mdi mdi-newspaper menu-icon"></i>
                <span class="menu-title">Daftar Berita</span>
            </a>
        </li>

        <!-- Daftar Kontak -->
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin.contact.index') || request()->routeIs('admin.contact.respond') ? 'active' : '' }}" href="{{ route('admin.contact.index') }}">
                <i class="mdi mdi-email menu-icon"></i>
                <span class="menu-title">Daftar Kontak</span>
            </a>
        </li>

        <!-- Buat Program Section -->
        {{-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-application menu-icon"></i>
                <span class="menu-title">Buat Program</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <!-- Buat Berita -->
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.news.create') ? 'active' : '' }}" href="{{ route('admin.news.create') }}">
                            <i class="mdi mdi-newspaper-variant menu-icon"></i>
                            Buat Berita
                        </a>
                    </li>

                    <!-- Tambah Program Keahlian -->
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('major.create') ? 'active' : '' }}" href="{{ route('major.create') }}">
                            <i class="mdi mdi-book-plus menu-icon"></i>
                            Tambah Program Keahlian
                        </a>
                    </li>
                </ul>
            </div>
        </li> --}}
    </ul>
</nav>
