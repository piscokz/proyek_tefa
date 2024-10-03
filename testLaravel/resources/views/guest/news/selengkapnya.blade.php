@extends('layout.template')

@section('title', 'Detail Berita - ' . $news->title)

@section('content')
    <h1>Detail Berita</h1>

    <div class="content-wrapper">
        <div class="row">
            <div class="col-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ $news->title }}</h4> {{-- Display the title --}}
                        <p class="card-description">{{ Str::limit($news->content, 150) }}</p> {{-- Display a snippet of the content --}}
                        
                        <div class="form-group">
                            <label for="title">Judul Berita</label>
                            <input type="text" class="form-control" id="title" placeholder="Judul Berita" readonly value="{{ $news->title }}" name="title">
                        </div>
                        
                        <div class="form-group">
                            <label for="content">Konten Berita</label>
                            <textarea class="form-control" id="content" rows="4" readonly name="content">{{ $news->content }}</textarea>
                        </div>
        
                        <a class="btn btn-light" href="{{ route('guest.news.index') }}">Kembali</a> {{-- Back button to news index --}}
                    </div>
                </div>
            </div>
            <div class="col-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Gambar Kegiatan</h5>
                        @if($news->image) {{-- Check if there is an image --}}
                            <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="img-fluid" style="max-height: 300px; object-fit: cover;">
                        @else
                            <p>Tidak ada gambar untuk berita ini.</p> {{-- Fallback if no image exists --}}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
