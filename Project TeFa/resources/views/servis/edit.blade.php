@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Servis</h2>
    <form action="{{ route('servis.update', $servis->id_servis) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Data Pelanggan -->
        <div class="form-group">
            <label for="nama_pelanggan">Nama Pelanggan</label>
            <input type="text" name="nama_pelanggan" class="form-control" value="{{ $servis->kendaraan->pelanggan->nama_pelanggan }}" required>
        </div>

        <div class="form-group">
            <label for="kontak">Kontak</label>
            <input type="text" name="kontak" class="form-control" value="{{ $servis->kendaraan->pelanggan->kontak }}" required>
        </div>

        <!-- Data Kendaraan -->
        <div class="form-group">
            <label for="nomor_polisi">Nomor Polisi</label>
            <input type="text" name="nomor_polisi" class="form-control" value="{{ $servis->kendaraan->no_polisi }}" required>
        </div>

        <div class="form-group">
            <label for="jenis_kendaraan">Jenis Kendaraan</label>
            <input type="text" name="jenis_kendaraan" class="form-control" value="{{ $servis->kendaraan->jenis_kendaraan }}" required>
        </div>

        <!-- Form Sparepart -->
        <div class="card mb-3 shadow">
            <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0"><i class="fas fa-wrench"></i> &nbsp; Informasi Sparepart</h5>
                <small class="text-right"><b>*</b> Hapus jika tidak diperlukan</small>
            </div>                
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="sparepartTable">
                        <thead>
                            <tr>
                                <th><i class="fas fa-wrench"></i> Nama Sparepart</th>
                                <th><i class="fas fa-tag"></i> Harga Satuan</th>
                                <th><i class="fas fa-plus-circle"></i> Jumlah yang Diambil</th>
                                <th><i class="fas fa-calculator"></i> Subtotal</th>
                                <th><i class="fas fa-trash-alt"></i> Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($servis->spareparts as $index => $sparepart)
                            <tr>
                                <td>
                                    <select name="sparepart_id[]" class="form-control sparepart_id" required>
                                        <option value="">Pilih Sparepart</option>
                                        @foreach($spareparts as $spare)
                                            <option value="{{ $spare->id_sparepart }}" 
                                                @if($spare->id_sparepart == $sparepart->id_sparepart) selected @endif
                                                data-harga="{{ $spare->harga_jual }}">
                                                {{ $spare->nama_sparepart }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <input type="text" class="form-control harga" readonly value="{{ $sparepart->harga_jual }}">
                                </td>
                                <td>
                                    <input type="number" name="jumlah[]" class="form-control jumlah" value="{{ $sparepart->pivot->jumlah }}">
                                </td>
                                <td>
                                    <input type="text" class="form-control subtotal" readonly value="{{ $sparepart->harga_jual * $sparepart->pivot->jumlah }}">
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger remove-row hover-effect">Hapus</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>                
                    </table><br><br>
                </div>
                <button type="button" class="btn btn-primary hover-effect" id="addRow">+ Tambah Sparepart</button>
            </div>
        </div>

        <!-- Form input lain -->
        <div class="form-group">
            <label for="keluhan">Keluhan</label>
            <textarea name="keluhan" class="form-control" required>{{ $servis->keluhan }}</textarea>
        </div>

        <div class="form-group">
            <label for="kilometer_saat_ini">Kilometer Saat Ini</label>
            <input type="number" name="kilometer_saat_ini" class="form-control" value="{{ $servis->kilometer_saat_ini }}" required>
        </div>

        <div class="form-group">
            <label for="harga_jasa">Harga Jasa</label>
            <input type="number" name="harga_jasa" class="form-control" value="{{ $servis->harga_jasa }}" required>
        </div>

        <div class="form-group">
            <label for="total_biaya">Total Biaya</label>
            <input type="number" name="total_biaya" class="form-control" value="{{ $servis->total_biaya }}" required>
        </div>

        <div class="form-group">
            <label for="uang_masuk">Uang Masuk</label>
            <input type="number" name="uang_masuk" class="form-control" value="{{ $servis->uang_masuk }}" required>
        </div>

        <div class="form-group">
            <label for="jenis_servis">Jenis Servis</label>
            <select name="jenis_servis" class="form-control" required>
                <option value="ringan" @if($servis->jenis_servis == 'ringan') selected @endif>Ringan</option>
                <option value="sedang" @if($servis->jenis_servis == 'sedang') selected @endif>Sedang</option>
                <option value="berat" @if($servis->jenis_servis == 'berat') selected @endif>Berat</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
    </form>
</div>
@endsection
