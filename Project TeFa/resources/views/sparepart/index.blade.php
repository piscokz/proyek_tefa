@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Program Sparepart</h1>
    <br><br>
    
    <!-- Menambahkan div untuk sejajarkan tombol "Tambah Sparepart" -->
    <div class="d-flex justify-content-between mb-3">
        <h2>Daftar Sparepart</h2>
        <a href="{{ route('sparepart.create') }}" class="btn btn-primary">Tambah Sparepart</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Nama Sparepart</th>
                <th>Stok Spare Part</th>
                <th>Harga Satuan</th>
                <th>Keuntungan Per Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if($spareparts->isEmpty()) <!-- Cek apakah data kosong -->
                <tr>
                    <td colspan="9" class="text-center">Tidak ada data sparepart ditemukan.</td>
                </tr>
            @else
            @foreach($spareparts as $sparepart)
            <tr>
                <td>{{ $sparepart->nama_sparepart }}</td>
                <td>{{ number_format($sparepart->jumlah, 0, ',', '.') }}</td>
                <td>{{ number_format($sparepart->harga_jual, 2, ',', '.') }}</td>
                <td>Rp. {{ number_format($sparepart->keuntungan, 0, ',', '.') }}</td>
                <td>
                    <a href="{{ route('sparepart.edit', $sparepart->id_sparepart) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('sparepart.destroy', $sparepart->id_sparepart) }}" method="POST" style="display:inline;">
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
    
    {{ $spareparts->links() }} <!-- Tautan pagination -->
</div>
@endsection
