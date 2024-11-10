@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Servis</h1>
    <table class="table">
        <tr>
            <th>Nomor Polisi</th>
            <td>{{ $servis->nomor_polisi }}</td>
        </tr>
        <tr>
            <th>Keluhan</th>
            <td>{{ $servis->keluhan }}</td>
        </tr>
        <tr>
            <th>Kilometer Saat Ini</th>
            <td>{{ $servis->kilometer_saat_ini }}</td>
        </tr>
        <tr>
            <th>Harga Jasa</th>
            <td>{{ $servis->harga_jasa }}</td>
        </tr>
        <tr>
            <th>Total Biaya</th>
            <td>{{ $servis->total_biaya }}</td>
        </tr>
        <tr>
            <th>Uang Masuk</th>
            <td>{{ $servis->uang_masuk }}</td>
        </tr>
        <tr>
            <th>Kembalian</th>
            <td>{{ $servis->kembalian }}</td>
        </tr>
        <tr>
            <th>Jenis Servis</th>
            <td>{{ $servis->jenis_servis }}</td>
        </tr>
        <tr>
            <th>Tanggal Servis</th>
            <td>{{ $servis->tanggal_servis }}</td>
        </tr>
    </table>

    <h2>Spareparts</h2>
    <ul>
        @foreach($servis->spareparts as $sparepart)
            <li>{{ $sparepart->nama_sparepart }} - {{ $sparepart->pivot->jumlah }} units</li>
        @endforeach
    </ul>

    <h2>Details Kendaraan</h2>
    <p>Jenis Kendaraan: {{ $servis->kendaraan->jenis_kendaraan }}</p>
    <p>Nomor Polisi: {{ $servis->kendaraan->no_polisi }}</p>
</div>
@endsection