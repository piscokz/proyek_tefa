@extends('layout.admintemplate')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Detail Berita</h4>
                    <p class="card-description"> Tampilkan Data </p>
                    
                    <div class="form-group">
                        <label for="title">Judul Berita</label>
                        <input type="text" class="form-control" id="title" placeholder="Judul Berita" readonly value="{{ $news->title }}" name="title">
                    </div>
                    
                    <div class="form-group">
                        <label for="content">Konten Berita</label>
                        <textarea class="form-control" id="content" rows="4" readonly name="content">{{ $news->content }}</textarea>
                    </div>

                    <a class="btn btn-light" href="{{ route('admin.news.index') }}">Kembali</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Gambar Kegiatan</h5>
                    <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="img-fluid" style="max-height: 300px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
