<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
    <div class="me-3">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
        <span class="icon-menu"></span>
      </button>
    </div>
    <div>
      <a class="navbar-brand brand-logo" href="{{route('admin.dashboard.index')}}">
        <img src="{{asset('guest/img/logo/logo.png')}}" class="img-fluid" alt="logo" />
      </a>
      <a class="navbar-brand brand-logo-mini" href="{{route('admin.dashboard.index')}}">
        <img src="{{asset('guest/img/logo/logo.png')}}" alt="logo" />
      </a>
    </div>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-top">
    <ul class="navbar-nav">
      <li class="nav-item fw-semibold d-none d-lg-block ms-0">
        <h1 class="welcome-text">Good Morning, <span class="text-black fw-bold">John Doe</span></h1>
        <h3 class="welcome-sub-text">Your performance summary this week </h3>
      </li>
    </ul>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item dropdown d-none d-lg-block">
        <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Programmer </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
          <a class="dropdown-item py-3">
            <p class="mb-0 fw-medium float-start">Anggota Tim :</p>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item" href="https://id.linkedin.com/in/ibrahim-ahmad-falathin-1863a7321#:~:text=Lihat%20profil%20Ibrahim%20Ahmad%20Falathin%20di" target="_blank">
            <div class="preview-item-content flex-grow py-2">
              <p class="preview-subject ellipsis fw-medium text-dark">Ibrahim Ahmad Falathin </p>
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
      <li class="nav-item d-none d-lg-block">
        <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
            <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
            </span>
            <input type="text" class="form-control" readonly>
        </div>
      </li>    
      <li class="nav-item">
        <form class="search-form" action="#">
          <i class="icon-search"></i>
          <input type="search" class="form-control" placeholder="Search Here" title="Search here">
        </form>
      </li>
      
      <!-- Include partial untuk notifikasi -->
      @include('partials.notification', ['contacts' => $contacts])
      
    
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="icon-mail icon-lg"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="countDropdown">
          <a class="dropdown-item py-3">
            <p class="mb-0 fw-medium float-start">You have 7 unread mails </p>
            <span class="badge badge-pill badge-primary float-end">View all</span>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <img src="../../assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
            </div>
            <div class="preview-item-content flex-grow py-2">
              <p class="preview-subject ellipsis fw-medium text-dark">Marian Garner </p>
              <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <img src="../../assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
            </div>
            <div class="preview-item-content flex-grow py-2">
              <p class="preview-subject ellipsis fw-medium text-dark">David Grey </p>
              <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <img src="../../assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
            </div>
            <div class="preview-item-content flex-grow py-2">
              <p class="preview-subject ellipsis fw-medium text-dark">Travis Jenkins </p>
              <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
            </div>
          </a>
        </div>
      </li>
      <li class="nav-item dropdown d-none d-lg-block user-dropdown">
        <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
          <img class="img-xs rounded-circle" src="{{ asset('guest/img/logo/logo.png')}}" alt="Profile image"> </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
          <div class="dropdown-header text-center">
            <img class="img-md rounded-circle" src="{{ asset('')}}" alt="Profile image">
            <p class="mb-1 mt-3 fw-semibold">{{ auth()->user()->name}}</p>
            <p class="fw-light text-muted mb-0">{{ auth()->user()->email}}</p>
          </div>
          <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
          <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Messages</a>
          <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i> Activity</a>
          <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a>
          @csrf
          <form action="{{route('auth.logout')}}">
            <button type="submit" class="dropdown-item">
              <i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out
            </button>
          </form>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>

{{-- <ul class="navbar-nav ms-auto">
  <!-- Kategori Dropdown -->
  <li class="nav-item dropdown d-none d-lg-block">
      <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Select Category </a>
      <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
          <a class="dropdown-item py-3">
              <p class="mb-0 fw-medium float-start">Select category</p>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
              <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis fw-medium text-dark">Bootstrap Bundle </p>
                  <p class="fw-light small-text mb-0">This is a Bundle featuring 16 unique dashboards</p>
              </div>
          </a>
          <!-- Tambahkan lebih banyak item di sini sesuai kebutuhan -->
      </div>
  </li>
  
  <!-- Ikon Kebutuhan Sekolah -->
  <li class="nav-item">
      <a class="nav-link" href="{{ route('schedule') }}" title="Jadwal">
          <i class="icon-calendar icon-lg"></i>
      </a>
  </li>
  <li class="nav-item">
      <a class="nav-link" href="{{ route('announcements') }}" title="Pengumuman">
          <i class="icon-bullhorn icon-lg"></i>
      </a>
  </li>
  <li class="nav-item">
      <a class="nav-link" href="{{ route('assignments') }}" title="Tugas">
          <i class="icon-pencil icon-lg"></i>
      </a>
  </li>
  <li class="nav-item">
      <a class="nav-link" href="{{ route('forum') }}" title="Forum Diskusi">
          <i class="icon-chat icon-lg"></i>
      </a>
  </li>
  
  <!-- Form Pencarian -->
  <li class="nav-item">
      <form class="search-form" action="#">
          <i class="icon-search"></i>
          <input type="search" class="form-control" placeholder="Search Here" title="Search here">
      </form>
  </li>
      <!-- Include partial untuk notifikasi -->
      @include('partials.notification', ['contacts' => $contacts])
      
    
      <!-- Dropdown Pengguna -->
    <li class="nav-item dropdown d-none d-lg-block user-dropdown">
      <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
          <img class="img-xs rounded-circle" src="../../assets/images/faces/face8.jpg" alt="Profile image"> 
      </a>
      <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
          <div class="dropdown-header text-center">
              <img class="img-md rounded-circle" src="../../assets/images/faces/face8.jpg" alt="Profile image">
              <p class="mb-1 mt-3 fw-semibold">Allen Moreno</p>
              <p class="fw-light text-muted mb-0">allenmoreno@gmail.com</p>
          </div>
          <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
          <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Messages</a>
          <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i> Activity</a>
          <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a>
          <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
      </div>
  </li>
</ul> --}}