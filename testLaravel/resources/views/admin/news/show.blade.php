@extends('layout.admintemplate')

@section('content')
<div class="content-wrapper">
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 class="card-title">{{ $news->title }}</h4>
                        <p class="card-description text-muted">
                            <i class="fas fa-calendar-alt me-2"></i>{{ $news->created_at->format('d F Y') }}
                        </p>

                        <!-- Horizontal Line -->
                        <hr class="my-4">

                        <div class="mb-4">
                            <h5 class="fw-bold">Konten Berita</h5>
                            <p class="text-dark">{{ $news->content }}</p>
                        </div>

                        <!-- Horizontal Line -->
                        <hr class="my-4">

                        <!-- Button Group -->
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-primary me-2" href="{{ route('admin.news.index') }}"><strong>Kembali</strong></a>
                            <a class="btn btn-secondary" href="{{ route('guest.news.index') }}"><strong>Buka Kabar Lensa</strong></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Gambar Kegiatan</h5>
                        @if($news->image)
                            <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="img-fluid rounded" style="max-height: 300px; object-fit: cover;">
                        @else
                            <p class="text-muted">Tidak ada gambar untuk berita ini.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection