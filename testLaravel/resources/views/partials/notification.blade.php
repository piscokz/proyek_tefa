<li class="nav-item dropdown">
    <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
        <i class="icon-bell"></i>
        <span class="count">{{ $contacts->count() }}</span> <!-- Menampilkan jumlah notifikasi -->
    </a>
    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
        <a class="dropdown-item py-3 border-bottom">
            <p class="mb-0 fw-medium float-start">You have {{ $contacts->count() }} new notifications</p>
            <span class="badge badge-pill badge-primary float-end">View all</span>
        </a>
        @foreach($contacts as $contact)
        <a class="dropdown-item preview-item py-3" href="{{ route('admin.contact.respond', $contact->id) }}">
            <div class="preview-thumbnail">
                <img src="{{ asset('admin/img/user.png') }}" alt="image" class="img-sm profile-pic"> <!-- Tambahkan gambar kecil -->
            </div>
            <div class="preview-item-content">
                <h6 class="preview-subject fw-normal text-dark mb-1">{{ $contact->name }}</h6>
                <p class="fw-light small-text mb-0">New contact message: "{{ $contact->title }}"</p>
            </div>
        </a>
        @endforeach
    </div>
</li>
