<!-- resources/views/servis/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Servis</h1>
    <form action="{{ route('servis.update', $servis->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_servis" class="form-label">Nama Servis</label>
            <input type="text" class="form-control" id="nama_servis" name="nama_servis" value="{{ $servis->nama_servis }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('servis.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection