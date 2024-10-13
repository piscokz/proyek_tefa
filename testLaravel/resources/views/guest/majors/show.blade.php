@extends('layout.template')

@section('title', $major->name) {{-- Menggunakan nama program keahlian sebagai judul halaman --}}

@section('content')
<div class="container-xxl py-6" style="background-color: #f9f9f9;"> <!-- Latar belakang lebih lembut -->
    <div class="container text-center">
        <h4 class="mb-5">{{ $major->name }}</h4> <!-- Warna teks judul -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 col-md-10">
                <div class="card shadow-lg border-0 rounded"> <!-- Menambahkan shadow dan rounded -->
                    <img src="{{ asset($major->image) }}" class="card-img-top rounded-top" alt="{{ $major->name }}">
                    <div class="card-body">
                        <h5 class="card-title text-secondary">{{ $major->name }}</h5> <!-- Warna teks -->
                        <p class="card-text">{{ $major->description }}</p>
                        <a href="{{ route('majors.index') }}" class="btn btn-warning">
                            <i class="bi bi-arrow-left"></i> &nbsp; Kembali ke Daftar Program
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tambahan: Informasi lebih lanjut -->
        {{-- <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center shadow-sm border-0 rounded">
                    <div class="card-body">
                        <h6 class="text-primary">Keahlian Utama</h6>
                        <p class="card-text">{{ $major->skills }}</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center shadow-sm border-0 rounded">
                    <div class="card-body">
                        <h6 class="text-primary">Karir yang Tersedia</h6>
                        <p class="card-text">{{ $major->careers }}</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center shadow-sm border-0 rounded">
                    <div class="card-body">
                        <h6 class="text-primary">Kualifikasi</h6>
                        <p class="card-text">{{ $major->qualifications }}</p>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
@endsection
