@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Program Servis</h1>
    <br><br>
    <!-- Menambahkan div untuk sejajarkan tombol "Tambah Servis" -->
    <div class="d-flex justify-content-between mb-3">
        <h2>Daftar Servis</h2>
        <a href="{{ route('servis.create') }}" class="btn btn-primary">Tambah Servis</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Servis</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if($servis->isEmpty()) <!-- Cek apakah data kosong -->
                <tr>
                    <td colspan="3" class="text-center">Tidak ada data servis ditemukan.</td>
                </tr>
            @else
                @foreach($servis as $service)
                <tr>
                    <td>{{ $service->id }}</td>
                    <td>{{ $service->keluhan }}</td> <!-- Ganti dengan field yang sesuai -->
                    <td>
                        <a href="{{ route('servis.show', $service->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('servis.edit', $service->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('servis.destroy', $service->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    {{ $servis->links() }} <!-- Tautan pagination -->
</div>
@endsection
