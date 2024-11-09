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
                <th><i class="bi bi-hash"></i> ID</th>
                <th><i class="bi bi-person"></i> Nama Pelanggan</th>
                <th><i class="bi bi-house-door"></i> Alamat</th>
                <th><i class="bi bi-gear"></i> Actions</th>
            </tr>
        </thead>
        <tbody>
            @if($servis->isEmpty())
                <tr>
                    <td colspan="6" class="text-center">Tidak ada data servis ditemukan.</td>
                </tr>
            @else
                @foreach($servis as $service)
                <tr class="hover-effect">
                    <td>{{ $service->id_servis }}</td>
                    <td>{{ $service->nama_pelanggan }}</td>
                    <td>{{ $service->alamat }}</td>
                    <td>
                        <a href="{{ route('servis.show', $service->id_servis) }}" class="btn btn-info">
                            <i class="bi bi-eye"></i> Detail
                        </a>
                        <a href="{{ route('servis.edit', $service->id_servis) }}" class="btn btn-warning">
                            <i class="bi bi-pencil"></i> Edit
                        </a>
                        <form action="{{ route('servis.destroy', $service->id_servis) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="bi bi-trash"></i> Hapus
                            </button>
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