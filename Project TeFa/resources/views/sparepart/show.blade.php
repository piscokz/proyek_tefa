@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">{{ $sparepart->nama_sparepart }}</h1>

    <div class="card mb-3 shadow">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Detail Sparepart</h5>
        </div>
        <div class="card-body">
            <h5 class="card-title">Informasi Umum</h5>
            <ul class="list-group">
                <li class="list-group-item"><strong>Jumlah:</strong> {{ number_format($sparepart->jumlah, 0, ',', '.') }}</li>
                <li class="list-group-item"><strong>Harga Beli:</strong> Rp. {{ number_format($sparepart->harga_beli, 2, ',', '.') }}</li>
                <li class="list-group-item"><strong>Harga Jual:</strong> Rp. {{ number_format($sparepart->harga_jual, 2, ',', '.') }}</li>
                <li class="list-group-item"><strong>Keuntungan:</strong> Rp. {{ number_format($sparepart->harga_jual - $sparepart->harga_beli, 0, ',', '.') }}</li> <!-- Calculate keuntungan directly -->
                <li class="list-group-item"><strong>Tanggal Masuk:</strong> {{ \Carbon\Carbon::parse($sparepart->tanggal_masuk)->format('d-m-Y') }}</li>
                <li class="list-group-item"><strong>Deskripsi:</strong> {{ $sparepart->deskripsi ?? 'Tidak ada deskripsi.' }}</li>
            </ul>
        </div>
    </div>

    <div class="d-flex justify-content-between">
        <a href="{{ route('sparepart.edit', $sparepart->id_sparepart) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('sparepart.destroy', $sparepart->id_sparepart) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
        <a href="{{ route('sparepart.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection
