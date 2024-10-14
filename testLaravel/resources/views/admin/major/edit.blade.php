@extends('layout/admintemplate')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" action="{{ route('major.update', $major->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <h4 class="card-title">Edit Program Keahlian</h4>
                        <p class="card-description">Ubah Data</p>

                        <div class="form-group">
                            <label for="code">Kode Program Keahlian</label>
                            <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" placeholder="Kode Program Keahlian" name="code" value="{{ old('code', $major->code) }}">
                            @error('code')
                                <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="name">Nama Program Keahlian</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama Program Keahlian" name="name" value="{{ old('name', $major->name) }}">
                            @error('name')
                                <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">Gambar Kegiatan</label>
                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                            <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah gambar.</small>
                            @error('image')
                                <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                            @enderror

                            @if($major->image)
                                <div class="mt-2">
                                    <img src="{{ asset($major->image) }}" alt="Current Image" class="img-thumbnail" width="200">
                                    <p class="form-text text-muted">Gambar saat ini</p>
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="description">Deskripsi Program Keahlian</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="4" name="description">{{ old('description', $major->description) }}</textarea>
                            @error('description')
                                <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary me-2">Update</button>
                            <a class="btn btn-light" href="{{ route('major.index') }}">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
