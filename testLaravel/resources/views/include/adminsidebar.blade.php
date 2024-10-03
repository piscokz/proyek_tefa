<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
      <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
          </a>
      </li>
      <li class="nav-item nav-category">Settings</li>
      <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('major.index') ? 'active' : '' }}" href="{{ route('major.index') }}">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Program Keahlian</span>
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('admin.news.index') ? 'active' : '' }}" href="{{ route('admin.news.index') }}">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Daftar Berita</span>
          </a>
      </li>
  </ul>
  <ul class="nav">
      <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Buat Program</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                      <a class="nav-link {{ request()->routeIs('admin.news.create') ? 'active' : '' }}" href="{{ route('admin.news.create') }}">
                          <i class="mdi mdi-newspaper-variant menu-icon"></i>
                          Buat Berita
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ request()->routeIs('major.create') ? 'active' : '' }}" href="{{ route('major.create') }}">
                          <i class="mdi mdi-plus menu-icon"></i>
                          Tambah Program Keahlian
                      </a>
                  </li>
              </ul>
          </div>
      </li>
  </ul>
</nav>
