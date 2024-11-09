@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Servis</h1>
    <p><strong>ID:</strong> {{ $servis->id_servis }}</p> <!-- Use id_servis here -->
    <p><strong>Nama Servis:</strong> {{ $servis->nama_servis }}</p>
    <a href="{{ route('servis.edit', $servis->id_servis) }}" class="btn btn-warning">Edit</a> <!-- Use id_servis here -->
    <form action="{{ route('servis.destroy', $servis->id_servis) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
    <a href="{{ route('servis.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection