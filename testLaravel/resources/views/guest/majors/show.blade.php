@extends('layout.template')

@section('title', $major->name) {{-- Menggunakan nama program keahlian sebagai judul halaman --}}

@section('content')
<div class="container-xxl py-6" style="background-color: #f9f9f9;"> <!-- Latar belakang lebih lembut -->
    <div class="container text-center">
        <h4 class="mb-5 text-primary">{{ $major->name }}</h4> <!-- Warna teks judul -->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 mb-4">
                <div class="card shadow-sm border-0"> <!-- Menambahkan shadow untuk card -->
                    <img src="{{ asset($major->image) }}" class="card-img-top rounded-top" alt="{{ $major->name }}">
                    <div class="card-body">
                        <h5 class="card-title text-secondary">{{ $major->name }}</h5> <!-- Warna teks -->
                        <p class="card-text">{{ $major->description }}</p>
                        <a href="{{ route('majors.index') }}" class="btn btn-warning">
                            <i class="bi bi-arrow-left"></i> &nbsp;&nbsp;Kembali ke Daftar Program
                        </a>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
