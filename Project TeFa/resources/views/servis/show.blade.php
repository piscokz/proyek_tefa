@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center my-4">Detail Servis</h2>

    <!-- Informasi Pelanggan -->
    <div class="card mt-4 shadow-sm border-light">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Informasi Pelanggan</h4>
        </div>
        <div class="card-body">
            <p><strong>Nama Pelanggan:</strong> {{ $servis->kendaraan->pelanggan->nama_pelanggan }}</p>
            <p><strong>Kontak:</strong> {{ $servis->kendaraan->pelanggan->kontak }}</p>
            <p><strong>Alamat:</strong> {{ $servis->kendaraan->pelanggan->alamat ?? 'Tidak ada data' }}</p>
        </div>
    </div>

    <!-- Informasi Kendaraan -->
    <div class="card mt-4 shadow-sm border-light">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Informasi Kendaraan</h4>
        </div>
        <div class="card-body">
            <p><strong>Nomor Polisi:</strong> {{ $servis->nomor_polisi }}</p>
            <p><strong>Jenis Kendaraan:</strong> {{ $servis->kendaraan->jenis_kendaraan }}</p>
            <p><strong>Warna:</strong> {{ $servis->kendaraan->warna ?? 'Tidak ada data' }}</p>
            <p><strong>Kode Mesin:</strong> {{ $servis->kendaraan->kode_mesin ?? 'Tidak ada data' }}</p>
            <p><strong>Tahun Produksi:</strong> {{ $servis->kendaraan->tahun_produksi ?? 'Tidak ada data' }}</p>
        </div>
    </div>

    <!-- Detail Servis -->
    <div class="card mt-4 shadow-sm border-light">
        <div class="card-header bg-warning text-white">
            <h4 class="mb-0">Detail Servis</h4>
        </div>
        <div class="card-body">
            <p><strong>Keluhan:</strong> {{ $servis->keluhan }}</p>
            <p><strong>Kilometer Saat Ini:</strong> {{ $servis->kilometer_saat_ini }}</p>
            <p><strong>Jenis Servis:</strong> {{ ucfirst($servis->jenis_servis) }}</p>
            <p><strong>Harga Jasa:</strong> Rp{{ number_format($servis->harga_jasa, 0, ',', '.') }}</p>
            <p><strong>Total Biaya:</strong> Rp{{ number_format($servis->total_biaya, 0, ',', '.') }}</p>
            <p><strong>Uang Masuk:</strong> Rp{{ number_format($servis->uang_masuk, 0, ',', '.') }}</p>
            <p><strong>Kembalian:</strong> Rp{{ number_format($servis->kembalian, 0, ',', '.') }}</p>
            <p><strong>Total Keuntungan Spareparts:</strong> Rp{{ number_format($servis->total_keuntungan, 0, ',', '.') }}</p>
            <p><strong>Tanggal Servis:</strong> {{ $servis->tanggal_servis }}</p>
        </div>
    </div>

    <!-- Spareparts Table -->
    @if($servis->spareparts->isNotEmpty())
    <div class="card mt-4 shadow-sm border-light">
        <div class="card-header bg-info text-white">
            <h4 class="mb-0">Spareparts yang Digunakan</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>Nama Sparepart</th>
                        <th>Jumlah</th>
                        <th>Harga Jual</th>
                        <th>Harga Beli</th>
                        <th>Total Harga</th>
                        <th>Keuntungan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($servis->spareparts as $servisSparepart)
                        <tr>
                            <td>{{ $servisSparepart->nama_sparepart }}</td>
                            <td>{{ $servisSparepart->pivot->jumlah ?? 'N/A' }}</td>
                            <td>Rp{{ number_format($servisSparepart->harga_jual, 0, ',', '.') }}</td>
                            <td>Rp{{ number_format($servisSparepart->harga_beli, 0, ',', '.') }}</td>
                            <td>Rp{{ number_format($servisSparepart->harga_jual * $servisSparepart->pivot->jumlah, 0, ',', '.') }}</td>
                            <td>Rp{{ number_format(($servisSparepart->harga_jual - $servisSparepart->harga_beli) * $servisSparepart->pivot->jumlah, 0, ',', '.') }}</td>
                        </tr>
                    @endforeach
                </tbody>                
            </table>
        </div>
    </div>
    @else
        <p class="mt-4 text-center">Tidak ada spareparts yang digunakan dalam servis ini.</p>
    @endif

    <a href="{{ route('servis.index') }}" class="btn btn-primary mt-4">Kembali ke Daftar Servis</a>
</div>
@endsection