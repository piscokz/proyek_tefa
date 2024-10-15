@extends('layout.admintemplate')

@section('content')
<div class="container mt-4">
    <h1 class="text-center mb-4 display-4 text-primary">Daftar Kontak</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($contacts->isEmpty())
        <!-- Tampilkan halaman 404 jika tidak ada data -->
        <div class="text-center mt-5">
            <h2 class="text-danger">404 - Tidak Ada Data Ditemukan</h2>
            <p>Sepertinya tidak ada pesan kontak yang tersedia saat ini.</p>
        </div>
    @else
    <div class="table-responsive shadow-sm p-3 mb-5 bg-white rounded">
        <table class="table table-hover table-bordered table-striped text-center align-middle">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Judul</th>
                    <th>Pesan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr class="table-row" style="cursor: pointer;">
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->title }}</td>
                    <td>
                        {{ Str::limit($contact->message, 50) }} 
                        <a href="#" class="text-primary fw-bold" data-bs-toggle="modal" data-bs-target="#messageModal{{ $contact->id }}">Read more</a>
                    </td>
                    <td>
                        <a href="{{ route('admin.contact.respond', $contact->id) }}" class="btn btn-outline-primary btn-sm shadow-sm" title="Respond">
                            <i class="bi bi-reply"></i> Respond
                        </a>

                        <!-- Delete Button -->
                        <form action="{{ route('admin.contact.destroy', $contact->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this contact?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                <i class="bi bi-trash"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>

                <!-- Modal for displaying full message -->
                <div class="modal fade" id="messageModal{{ $contact->id }}" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-primary text-white">
                                <h5 class="modal-title" id="messageModalLabel">Pesan dari {{ $contact->name }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p><strong>Judul:</strong> {{ $contact->title }}</p>
                                <p><strong>Pesan:</strong> {{ $contact->message }}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>
@endsection