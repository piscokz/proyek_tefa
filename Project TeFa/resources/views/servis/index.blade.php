@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Program Servis</h1>
    <br><br>
    <div class="d-flex justify-content-between mb-3">
        <h2>Daftar Servis</h2>
        <a href="{{ route('servis.create') }}" class="btn btn-primary">Tambah Servis</a>
    </div>

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nama Pelanggan</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if($servis->isEmpty())
                <tr>
                    <td colspan="6" class="text-center">Tidak ada data servis ditemukan.</td>
                </tr>
            @else
                @foreach($servis as $service)
                <tr>
                    <td>{{ $service->id }}</td>
                    <td>{{ $service->nama_pelanggan }}</td>
                    <td>{{ $service->alamat }}</td>
                    <td>
                        <a href="{{ route('servis.show', $service->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('servis.edit', $service->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('servis.destroy', $service->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
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
    {{ $servis->links() }}
</div>
@endsection