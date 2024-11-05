@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Spare Part</h1>
    <table class="table">
        <tr>
            <th>Nama Spare Part</th>
            <td>{{ $sparepart->nama_sparepart }}</td>
        </tr>
        <tr>
            <th>Jumlah</th>
            <td>{{ $sparepart->jumlah }}</td>
        </tr>
        <tr>
            <th>Harga Beli</th>
            <td>{{ $sparepart->harga_beli }}</td>
        </tr>
        <tr>
            <th>Harga Jual</th>
            <td>{{ $sparepart->harga_jual }}</td>
        </tr>
        <tr>
            <th>Keuntungan</th>
            <td>{{ $sparepart->keuntungan }}</td>
        </tr>
        <tr>
            <th>Tanggal Masuk</th>
            <td>{{ $sparepart->tanggal_masuk }}</td>
        </tr>
        <tr>
            <th>Tanggal Keluar</th>
            <td>{{ $sparepart->tanggal_keluar ?? 'Belum keluar' }}</td>
        </tr>
    </table>
    <a href="{{ route('sparepart.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection