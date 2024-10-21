<li class="nav-item dropdown">
    <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="icon-bell"></i>
        @if ($contacts->count() > 0 && !request()->routeIs('admin.contact.index'))
            <span class="count">{{ $contacts->count() }}</span>
        @endif
    </a>
    <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
        <div class="dropdown-header d-flex justify-content-between align-items-center py-3">
            <p class="mb-0 fw-medium">You have {{ $contacts->count() }} new notifications</p>&nbsp;&nbsp;
            <a class="badge badge-pill badge-primary text-decoration-none" href="{{ route('admin.contact.index') }}">View all</a>
        </div>
        <div class="dropdown-divider"></div>
        @foreach($contacts as $contact)
            <a class="dropdown-item preview-item py-3" href="{{ route('admin.contact.respond', $contact->id) }}">
                <div class="preview-thumbnail">
                    <img src="{{ $contact->profile_image ?? asset('admin/img/user.png') }}" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content">
                    <h6 class="preview-subject fw-normal text-dark mb-1">{{ $contact->name }}</h6>
                    <p class="fw-light small-text mb-0">New contact message: "{{ $contact->title }}"</p>
                </div>
            </a>
            <div class="dropdown-divider"></div>
        @endforeach
    </div>
</li>
