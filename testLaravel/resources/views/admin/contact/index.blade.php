@extends('layout.admintemplate')

@section('content')
<div class="container mt-4">
    <h1 class="text-center mb-4">Daftar Kontak</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="d-flex justify-content-center">
        <table class="table table-striped table-bordered text-center" style="width: 80%;">
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
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->title }}</td>
                    <td>
                        {{ Str::limit($contact->message, 50) }} 
                        <a href="#" data-bs-toggle="modal" data-bs-target="#messageModal{{ $contact->id }}">Read more</a>
                    </td>
                    <td>
                        <a href="{{ route('admin.contact.respond', $contact->id) }}" class="btn btn-primary" title="Respond">
                            <i class="bi bi-reply"></i> Respond
                        </a>
                    </td>
                </tr>

                <!-- Modal for displaying full message -->
                <div class="modal fade" id="messageModal{{ $contact->id }}" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="messageModalLabel">Pesan dari {{ $contact->name }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p><strong>Judul:</strong> {{ $contact->title }}</p>
                                <p><strong>Pesan:</strong> {{ $contact->message }}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
