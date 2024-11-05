@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Sparepart</h1>

    <form action="{{ route('sparepart.update', $sparepart->id_sparepart) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama_sparepart">Nama Sparepart:</label>
            <input type="text" name="nama_sparepart" id="nama_sparepart" class="form-control" value="{{ $sparepart->nama_sparepart }}" required>
        </div>

        <div class="form-group">
            <label for="jumlah">Jumlah:</label>
            <input type="number" name="jumlah" id="jumlah" class="form-control" value="{{ $sparepart->jumlah }}" required min="1">
        </div>

        <div class="form-group">
            <label for="harga_beli">Harga Beli:</label>
            <input type="number" name="harga_beli" id="harga_beli" class="form-control" value="{{ $sparepart->harga_beli }}" required step="0.01">
        </div>

        <div class="form-group">
            <label for="harga_jual">Harga Jual:</label>
            <input type="number" name="harga_jual" id="harga_jual" class="form-control" value="{{ $sparepart->harga_jual }}" required step="0.01">
        </div>

        <div class="form-group">
            <label for="tanggal_masuk">Tanggal Masuk:</label>
            <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control" value="{{ $sparepart->tanggal_masuk }}" required>
        </div>

        <div class="form-group">
            <label for="tanggal_keluar">Tanggal Keluar:</label>
            <input type="date" name="tanggal_keluar" id="tanggal_keluar" class="form-control" value="{{ $sparepart->tanggal_keluar }}">
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control">{{ $sparepart->deskripsi }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Perbarui Sparepart</button>
    </form>
</div>
@endsection