@extends('layout.template')

@section('title', 'Detail Berita - ' . $news->title)

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">{{ $news->title }}</h1>
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">{{ $news->created_at->format('d F Y') }}</h6>
                    <p class="card-text">{{ $news->content }}</p>
                    
                    <div class="form-group">
                        <label for="title" class="fw-bold">Judul Berita</label>
                        <input type="text" class="form-control" id="title" readonly value="{{ $news->title }}">
                    </div>
                    
                    <div class="form-group mt-3">
                        <label for="content" class="fw-bold">Konten Berita</label>
                        <textarea class="form-control" id="content" rows="6" readonly>{{ $news->content }}</textarea>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <a class="btn btn-primary" href="{{ route('guest.news.index') }}">Kembali ke Daftar Berita</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Gambar Kegiatan</h5>
                    @if($news->image)
                        <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="img-fluid" style="max-height: 300px; object-fit: cover;">
                    @else
                        <p>Tidak ada gambar untuk berita ini.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
