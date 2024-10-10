@extends('layout.admintemplate')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card shadow-sm rounded"> <!-- Menambahkan shadow dan rounded corner -->
        <div class="card-body">
            <h4 class="card-title text-primary mb-4"> <!-- Menambah margin-bottom -->
                <i class="bi bi-chat-dots-fill"></i> Respond to {{ $contact->name }}
            </h4> <!-- Menggunakan icon Bootstrap untuk mempercantik judul -->

            <!-- Tampilkan Detail Pertanyaan Guest -->
            <div class="mb-5"> <!-- Tambahkan margin-bottom -->
                <h5 class="text-muted">
                    <i class="bi bi-person-circle"></i> Pertanyaan dari {{ $contact->name }}
                </h5>
                <p><strong><i class="bi bi-bookmark-fill"></i> Judul:</strong> {{ $contact->title }}</p>
                <p><strong><i class="bi bi-envelope-fill"></i> Email:</strong> {{ $contact->email }}</p>
                <p><strong><i class="bi bi-chat-left-text-fill"></i> Pesan:</strong></p>
                <blockquote class="blockquote">
                    <p class="mb-4">{{ $contact->message }}</p> <!-- Menambah margin pada blockquote -->
                </blockquote>
            </div>

            <!-- Form untuk memberikan respon -->
            <form action="{{ route('admin.contact.respond.store', $contact->id) }}" method="POST">
                @csrf
                <div class="mb-4"> <!-- Tambahkan margin-bottom -->
                    <label for="admin_response" class="form-label">
                        <i class="bi bi-pencil-square"></i> Your Response
                    </label>
                    <textarea id="admin_response" name="admin_response" class="form-control shadow-sm" rows="5" required></textarea>
                </div>

                <!-- Tombol Send dan Cancel dengan Icon -->
                <button type="submit" class="btn btn-primary me-2"> <!-- Menambah margin-end (me-2) antara tombol -->
                    <i class="bi bi-send-fill"></i> Send Response
                </button>
                <a href="{{ route('admin.contact.index') }}" class="btn btn-danger">
                    <i class="bi bi-x-circle-fill"></i> Cancel
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
