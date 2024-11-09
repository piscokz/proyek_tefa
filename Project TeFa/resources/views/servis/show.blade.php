@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Servis</h1>
    <p><strong>ID:</strong> {{ $servis->id_servis }}</p> <!-- Use id_servis -->
    <p><strong>Nomor Polisi:</strong> {{ $servis->nomor_polisi }}</p>
    <p><strong>Keluhan:</strong> {{ $servis->keluhan }}</p>
    <p><strong>Kilometer Saat Ini:</strong> {{ $servis->kilometer_saat_ini }}</p>
    <p><strong>Harga Jasa:</strong> {{ $servis->harga_jasa }}</p>
    <p><strong>Total Biaya:</strong> {{ $servis->total_biaya }}</p>
    <p><strong>Uang Masuk:</strong> {{ $servis->uang_masuk }}</p>
    <p><strong>Kembalian:</strong> {{ $servis->kembalian }}</p>
    <p><strong>Jenis Servis:</strong> {{ ucfirst($servis->jenis_servis) }}</p>
    <p><strong>Tanggal Servis:</strong> {{ $servis->tanggal_servis }}</p>

    <a href="{{ route('servis.edit', $servis->id_servis) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('servis.destroy', $servis->id_servis) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
    <a href="{{ route('servis.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
