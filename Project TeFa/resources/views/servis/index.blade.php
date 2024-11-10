@extends('layouts.app')

@section('content')
<div class="container">
    <h1>
        <i class="mdi mdi-cog-outline menu-icon"></i>
        Program Servis
    </h1>
    <br><br>

    

    <div class="d-flex justify-content-between mb-3">
        <h2>
            <i class="bi bi-list hover-effect"></i> Daftar Servis
        </h2>
        <a href="{{ route('servis.create') }}" class="btn btn-primary">Tambah Servis</a>
    </div>

    <!-- Display Success Alert -->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th><i class="bi bi-hash"></i> ID</th>
                <th><i class="bi bi-person"></i> Nama Pelanggan</th>
                <th><i class="bi bi-house-door"></i> Merk</th>
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
                    <td>{{ $service->kendaraan->pelanggan->nama_pelanggan ?? 'Data tidak ditemukan' }}</td>
                    <td>@currency($service->total_biaya)</td>
                    <td>
                        <a href="{{ route('servis.show', $service->id_servis) }}" class="btn btn-sm btn-info">
                            <i class="bi bi-eye"></i> Detail
                        </a>
                        <a href="{{ route('servis.edit', $service->id_servis) }}" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil"></i> Edit
                        </a>
                        <form action="{{ route('servis.destroy', $service->id_servis) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i> Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    <br>
    <!-- Pagination Bootstrap with Icons -->
    <div class="d-flex justify-content-center">
        {{ $servis->links('vendor.pagination.bootstrap-5') }}
    </div>
</div>
@endsection