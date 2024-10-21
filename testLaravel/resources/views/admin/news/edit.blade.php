@extends('layout.admintemplate')

@section('content')
<div class="container mt-4">
    <h1 class="text-center mb-4" style="color: #007BFF;">Edit Berita</h1>

    <!-- Tampilkan pesan error jika validasi gagal -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow-lg border-primary">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Form Edit Berita</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Judul Berita</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $news->title) }}" required>
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Isi Berita</label>
                    <textarea class="form-control" id="content" name="content" rows="5" required>{{ old('content', $news->content) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Gambar Berita</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*">

                    <!-- Tampilkan gambar yang ada jika sudah ada -->
                    @if($news->image)
                        <div class="mt-2">
                            <strong>Gambar Sebelumnya:</strong><br>
                            <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="img-fluid mt-2" style="max-height: 300px; object-fit: cover;">
                        </div>
                    @endif
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">Update Berita</button>
                    <a href="{{ route('admin.news.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
