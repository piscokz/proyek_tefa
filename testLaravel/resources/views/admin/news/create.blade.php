@extends('layout.admintemplate')

@section('content')
    {{-- <h1>Tambah Berita</h1> --}}

    <div class="d-flex justify-content-center align-items-center">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Tambah Berita</h4>
                    <p class="card-description">Silakan isi data berita</p>
    
                    <form class="forms-sample material-form" action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
    
                        <!-- Judul Berita -->
                        <div class="form-group">
                            <input type="text" name="title" id="title" required="required" value="{{ old('title') }}"
                                class="form-control @error('title') is-invalid @enderror">
                            <label for="title" class="control-label">Judul Berita</label>
                            <i class="bar"></i>
    
                            <!-- Tampilkan pesan error jika ada -->
                            @error('title')
                                <span class="invalid-feedback" style="display: inline">{{ $message }}</span>
                            @enderror
                        </div>
    
                        <!-- Isi Berita -->
                        <div class="form-group">
                            <textarea name="content" id="content" required="required"
                                class="form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
                            <label for="content" class="control-label">Isi Berita</label>
                            <i class="bar"></i>
    
                            <!-- Tampilkan pesan error jika ada -->
                            @error('content')
                                <span class="invalid-feedback" style="display: inline">{{ $message }}</span>
                            @enderror
                        </div>
    
                        <!-- Gambar Kegiatan -->
                        <div class="form-group">
                            <label for="image" class="form-label">Gambar Kegiatan</label>
                            <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
                            
                            <!-- Tampilkan pesan error jika ada -->
                            @error('image')
                                <div class="invalid-feedback" style="display: inline">{{ $message }}</div>
                            @enderror
                            
                            <small class="form-text text-muted">Max: 2MB, format: jpg, png, jpeg</small>
                        </div>
    
                        <!-- Tombol Simpan -->
                        <div class="button-container">
                            <button type="submit" class="button btn btn-primary">
                                <span>Simpan</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        
@endsection
