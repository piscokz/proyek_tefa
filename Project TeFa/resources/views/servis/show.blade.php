@extends('layouts.app')

@section('content')
<!-- serviss/show.blade.php -->

<h1>Servis Details</h1>

<p><strong>Nomor Polisi:</strong> {{ $servis->nomor_polisi }}</p>
<p><strong>Keluhan:</strong> {{ $servis->keluhan }}</p>
<p><strong>Kilometer Saat Ini:</strong> {{ $servis->kilometer_saat_ini }}</p>
<p><strong>Harga Jasa:</strong> {{ $servis->harga_jasa }}</p>
<p><strong>Total Biaya:</strong> {{ $servis->total_biaya }}</p>
<p><strong>Uang Masuk:</strong> {{ $servis->uang_masuk }}</p>
<p><strong>Kembalian:</strong> {{ $servis->kembalian }}</p>
<p><strong>Jenis Servis:</strong> {{ $servis->jenis_servis }}</p>
<p><strong>Tanggal Servis:</strong> {{ $servis->tanggal_servis }}</p>

<h2>Spareparts Used</h2>
<ul>
    @foreach($servis->spareparts as $sparepart)
        <li>{{ $sparepart->nama_sparepart }} - Jumlah: {{ $sparepart->pivot->jumlah }}</li>
    @endforeach
</ul>

<h2>Kendaraan Details</h2>
<p><strong>Jenis Kendaraan:</strong> {{ $servis->kendaraan->jenis_kendaraan }}</p>
<p><strong>Warna:</strong> {{ $servis->kendaraan->warna }}</p>
<p><strong>Tahun Produksi:</strong> {{ $servis->kendaraan->tahun_produksi }}</p>
<p><strong>Kode Mesin:</strong> {{ $servis->kendaraan->kode_mesin }}</p>
<p><strong>Nomor Polisi Kendaraan:</strong> {{ $servis->kendaraan->no_polisi }}</p>

@endsection
