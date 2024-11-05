@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Tambah Sparepart</h1>
    <br>

    <form action="{{ route('sparepart.store') }}" method="POST">
        @csrf

        <!-- Section 1: Informasi Sparepart -->
        <div class="card mb-3 shadow">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Informasi Sparepart</h5>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="nama_sparepart"><i class="fas fa-wrench"></i> &nbsp; Nama Sparepart:</label>
                    <input type="text" name="nama_sparepart" id="nama_sparepart" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="jumlah"><i class="fas fa-cubes"></i> &nbsp; Jumlah:</label>
                    <input type="number" name="jumlah" id="jumlah" class="form-control" required min="1">
                </div>
                <div class="form-group">
                    <label for="harga_beli"><i class="fas fa-money-bill-wave"></i> &nbsp; Harga Beli:</label>
                    <input type="number" name="harga_beli" id="harga_beli" class="form-control" required step="0.01">
                </div>
                <div class="form-group">
                    <label for="harga_jual"><i class="fas fa-tags"></i> &nbsp; Harga Jual:</label>
                    <input type="number" name="harga_jual" id="harga_jual" class="form-control" required step="0.01">
                </div>
                <div class="form-group">
                    <label for="keuntungan"><i class="fas fa-dollar-sign"></i> &nbsp; Keuntungan (Per Barang):</label>
                    <input type="text" id="keuntungan" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="tanggal_masuk"><i class="fas fa-calendar-plus"></i> &nbsp; Tanggal Masuk:</label>
                    <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control" value="{{ now()->format('Y-m-d') }}" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi"><i class="fas fa-info-circle"></i> &nbsp; Deskripsi:</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Simpan Sparepart</button>
            </div>
        </div>

    </form>
</div>

<script>
    // Function to update the 'Keuntungan' field
    function updateKeuntungan() {
        const hargaBeli = parseFloat(document.getElementById('harga_beli').value) || 0;
        const hargaJual = parseFloat(document.getElementById('harga_jual').value) || 0;
        const keuntungan = (hargaJual - hargaBeli);
        document.getElementById('keuntungan').value = keuntungan.toLocaleString('id-ID'); // Format sebagai IDR
    }

    // Event listeners for harga_beli and harga_jual inputs
    document.getElementById('harga_beli').addEventListener('input', updateKeuntungan);
    document.getElementById('harga_jual').addEventListener('input', updateKeuntungan);
</script>
@endsection