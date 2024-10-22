@extends('layout.template')

@section('title', 'Detail Berita - ' . $news->title)

@section('content')
<div class="container my-5">
    <!-- Title Section -->
    <h1 class="text-center mb-4">{{ $news->title }}</h1>

    <!-- Main Content and Image Row -->
    <div class="row">
        <!-- Main Content Section -->
        <div class="col-lg-8">
            <div class="card mb-4 shadow-sm">
                <div class="card-body bg-light p-4 rounded">
                    <!-- News Title (Readonly Input) -->
                    <div class="form-group mb-3">
                        <label for="title" class="fw-bold text-primary">Judul Berita</label>
                        <input type="text" class="form-control border-primary" id="title" readonly value="{{ $news->title }}">
                    </div>
                
                    <!-- News Date and Content -->
                    <div class="form-group">
                        <!-- News Date with margin-bottom -->
                        <h6 class="card-subtitle mb-3 text-muted">
                            <i class="fas fa-calendar-alt me-2"></i>{{ $news->created_at->format('d F Y') }}
                        </h6>
                
                        <!-- News Content -->
                        <p class="card-text text-dark bg-white p-3 rounded shadow-sm">
                            {{ $news->content }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Image Section -->
        <div class="col-lg-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Gambar Kegiatan</h5>
                    @if($news->image)
                        <!-- If Image Exists -->
                        <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="img-fluid rounded" style="max-height: 300px; object-fit: cover;">
                    @else
                        <!-- If No Image -->
                        <p class="text-muted">Tidak ada gambar untuk berita ini.</p>
                    @endif
                </div>
            </div>
            <!-- Card Footer with Back Button -->
            <div class="text-center">
                <a class="btn btn-primary" href="{{ route('guest.news.index') }}">
                    Kembali ke Daftar Berita
                </a>
            </div>
        </div>                
    </div>
</div>
@endsection
