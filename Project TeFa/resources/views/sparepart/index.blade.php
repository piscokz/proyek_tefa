@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Program Sparepart</h1>
    <br><br>
    
    <!-- Menambahkan div untuk sejajarkan tombol "Tambah Sparepart" -->
    <div class="d-flex flex-wrap justify-content-between mb-3">
        <h2 class="mb-2 mb-md-0">Daftar Sparepart</h2>
        <a href="{{ route('sparepart.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i>&nbsp;&nbsp; Tambah Sparepart
        </a>
    </div>

        <!-- Search Form -->
    <form method="GET" action="{{ route('sparepart.index') }}" class="mb-3">
        <div class="input-group input-group-sm">
            <input type="text" name="search" class="form-control" placeholder="Cari sparepart..." value="{{ request()->search }}">
            <button class="btn btn-outline-secondary" type="submit">
                <i class="bi bi-search"></i>
            </button>
        </div>
    </form>


    <!-- Display success message with color -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Responsive Table -->
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Nama Sparepart</th>
                    <th>Stok Spare Part</th>
                    <th>Harga Satuan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if($spareparts->isEmpty()) <!-- Cek apakah data kosong -->
                    <tr>
                        <td colspan="5" class="text-center">Tidak ada data sparepart ditemukan.</td>
                    </tr>
                @else
                @foreach($spareparts as $sparepart)
                <tr>
                    <td>{{ $sparepart->nama_sparepart }}</td>
                    <td>{{ number_format($sparepart->jumlah, 0, ',', '.') }}</td>
                    <td>Rp. {{ number_format($sparepart->harga_jual, 2, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('sparepart.show', $sparepart->id_sparepart) }}" class="btn btn-info">
                            <i class="bi bi-eye"></i> Detail
                        </a>
                        <a href="{{ route('sparepart.edit', $sparepart->id_sparepart) }}" class="btn btn-warning">
                            <i class="bi bi-pencil"></i> Edit
                        </a>
                        <form action="{{ route('sparepart.destroy', $sparepart->id_sparepart) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete();">
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
    </div><br><br>
    
    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        {{ $spareparts->links('pagination::bootstrap-4') }}
    </div>
</div>

<script>
    function confirmDelete() {
        return confirm("Apakah Anda yakin ingin menghapus sparepart ini?");
    }
</script>
@endsection