@extends('layout/admintemplate')

@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <form class="forms-sample" action="{{ route('major.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            <h4 class="card-title">Program Keahlian</h4>
            <p class="card-description"> Tambah Data </p>
              <div class="form-group">
                <label for="name">Kode Program Keahlian</label>
                <input type="text" class="form-control @error('code') {{ 'is-invalid' }} @enderror" id="code" placeholder="Kode Program Keahlian" name="code">
                @error('code')
                    <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="name">Nama Program Keahlian</label>
                <input type="text" class="form-control @error('name') {{ 'is-invalid' }} @enderror" id="name" placeholder="Nama Program Keahlian" name="name">
                @error('name')
                <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
            @enderror
              </div>
              <div class="form-group">
                <label>Gambar Kegiatan</label>
                <input type="file" name="image" class="form-control @error('image') {{ 'is-invalid' }} @enderror">
                @error('image')
                <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
            @enderror
              </div>
              <div class="form-group">
                <label for="description">Deskripsi Program Keahlian</label>
                <textarea class="form-control @error('description') {{ 'is-invalid' }} @enderror" id="description" rows="4" name="description"></textarea>
                @error('description')
                <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
            @enderror
              </div>
              <button type="submit" class="btn btn-primary me-2">Submit</button>
              <a class="btn btn-light" href="{{route('major.index')}}">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


@endsection

