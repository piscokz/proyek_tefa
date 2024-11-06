@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Tambah Servis</h1>
        <br>

        <form action="{{ route('servis.store') }}" method="POST">
            @csrf

            <!-- Section 1: Input Pelanggan -->
            <div class="card mb-3 shadow">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Informasi Pelanggan</h5>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_pelanggan"><i class="fas fa-user"></i> &nbsp; Nama Pelanggan:</label>
                        <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="kontak"><i class="fas fa-phone"></i> &nbsp; Kontak:</label>
                        <input type="text" name="kontak" id="kontak" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat"><i class="fas fa-map-marker-alt"></i> &nbsp; Alamat:</label>
                        <textarea name="alamat" id="alamat" class="form-control" rows="3" required></textarea>
                    </div>
                </div>
            </div>

            <!-- Section 2: Input Kendaraan -->
            <div class="card mb-3 shadow">
                <div class="card-header bg-info text-white">
                    <h5 class="mb-0">Informasi Kendaraan</h5>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="nomor_polisi"><i class="fas fa-car"></i> &nbsp; Nomor Polisi:</label>
                        <input type="text" name="nomor_polisi" id="nomor_polisi" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kendaraan"><i class="fas fa-car-side"></i> &nbsp; Jenis Kendaraan:</label>
                        <input type="text" name="jenis_kendaraan" id="jenis_kendaraan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="warna"><i class="fas fa-paint-brush"></i> &nbsp; Warna Kendaraan:</label>
                        <input type="text" name="warna" id="warna" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="kode_mesin"><i class="fas fa-cogs"></i> &nbsp; Kode Mesin:</label>
                        <input type="text" name="kode_mesin" id="kode_mesin" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="tahun_produksi"><i class="fas fa-calendar-alt"></i> &nbsp; Tahun Produksi:</label>
                        <input type="text" name="tahun_produksi" id="tahun_produksi" class="form-control" required>
                    </div>
                </div>
            </div>



            <!-- Section 3: Input Sparepart -->
            <div class="card mb-3 shadow">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Informasi Sparepart</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="sparepartTable">
                            <thead>
                                <tr>
                                    <th><i class="fas fa-wrench"></i> &nbsp; Nama Sparepart</th>
                                    <th><i class="fas fa-tag"></i> &nbsp; Harga Satuan</th>
                                    <th><i class="fas fa-plus-circle"></i> &nbsp; Jumlah yang Diambil</th>
                                    <th><i class="fas fa-calculator"></i> &nbsp; Subtotal</th>
                                    <th><i class="fas fa-trash-alt"></i> &nbsp; Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <select name="sparepart_id[]" class="form-control sparepart_id" required>
                                            <option value="">Pilih Sparepart</option>
                                            @foreach($spareparts as $sparepart)
                                            <option value="{{ $sparepart->id_sparepart }}" data-harga="{{ $sparepart->harga_jual }}">
                                                {{ $sparepart->nama_sparepart }}
                                            </option>                                        
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control harga" readonly>
                                    </td>
                                    <td>
                                        <input type="number" name="jumlah[]" class="form-control jumlah" required>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control subtotal" readonly>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger remove-row">Hapus</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table><br><br>
                    </div>
                    <button type="button" class="btn btn-primary" id="addRow">+ Tambah Sparepart</button>
                </div>
            </div>

            <!-- Section 4: Input Servis -->
            <div class="card mb-3 shadow">
                <div class="card-header bg-warning text-white">
                    <h5 class="mb-0">Informasi Servis</h5>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="keluhan"><i class="fas fa-exclamation-circle"></i> &nbsp; Keluhan:</label>
                        <input type="text" name="keluhan" id="keluhan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="kilometer_saat_ini"><i class="fas fa-tachometer-alt"></i> &nbsp; Kilometer Saat Ini:</label>
                        <input type="number" name="kilometer_saat_ini" id="kilometer_saat_ini" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="harga_jasa"><i class="fas fa-money-bill-wave"></i> &nbsp; Harga Jasa:</label>
                        <input type="number" name="harga_jasa" id="harga_jasa" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="total_biaya"><i class="fas fa-dollar-sign"></i> &nbsp; Total Biaya:</label>
                        <input type="text" name="total_biaya" id="total_biaya" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_servis"><i class="fas fa-calendar-day"></i> &nbsp; Tanggal Servis:</label>
                        <input type="date" name="tanggal_servis" id="tanggal_servis" class="form-control" value="{{ date('Y-m-d') }}" required>
                    </div>                    
                </div>
            </div>
            <button type="submit" class="btn btn-success">Simpan Servis</button>
        </form>
    </div>

<script>
    function updateTotalBiaya() {
        const totalBiayaInput = document.getElementById('total_biaya');
        const hargaJasa = parseInt(document.getElementById('harga_jasa').value) || 0;
        let totalSparepart = 0;

        document.querySelectorAll('.subtotal').forEach(subtotalInput => {
            const subtotalValue = parseInt(subtotalInput.value.replace(/[^0-9]/g, '')) || 0;
            totalSparepart += subtotalValue;
        });

        const totalBiaya = totalSparepart + hargaJasa;
        totalBiayaInput.value = totalBiaya.toLocaleString('id-ID'); // Format as IDR
    }

    // Event listener for when sparepart selection changes
    document.getElementById('sparepartTable').addEventListener('change', function(event) {
        if (event.target.classList.contains('sparepart_id')) {
            const hargaInput = event.target.closest('tr').querySelector('.harga');
            const selectedOption = event.target.options[event.target.selectedIndex];
            const harga = selectedOption.getAttribute('data-harga');
            hargaInput.value = harga;

            updateSubtotal(event.target.closest('tr'));
            updateTotalBiaya();
        }
    });

    // Event listener for when quantity input changes
    document.getElementById('sparepartTable').addEventListener('input', function(event) {
        if (event.target.classList.contains('jumlah')) {
            updateSubtotal(event.target.closest('tr'));
            updateTotalBiaya();
        }
    });

    // Function to update the subtotal for a specific row
    function updateSubtotal(row) {
        const harga = parseInt(row.querySelector('.harga').value) || 0;
        const jumlah = parseInt(row.querySelector('.jumlah').value) || 0;
        const subtotalInput = row.querySelector('.subtotal');

        const subtotal = harga * jumlah;
        subtotalInput.value = subtotal ? subtotal.toLocaleString('id-ID') : ''; // Format as IDR
    }

        // Add a new row to the sparepart table
    document.getElementById('addRow').addEventListener('click', function() {
        const tableBody = document.querySelector('#sparepartTable tbody');
        const newRow = document.createElement('tr');
        newRow.innerHTML = `
            <td>
                <select name="sparepart_id[]" class="form-control sparepart_id" required>
                    <option value="">Pilih Sparepart</option>
                    @foreach($spareparts as $sparepart)
                        <option value="{{ $sparepart->id_sparepart }}" data-harga="{{ $sparepart->harga_jual }}">
                            {{ $sparepart->nama_sparepart }}
                        </option>
                    @endforeach
                </select>
            </td>
            <td><input type="text" class="form-control harga" readonly></td>
            <td><input type="number" name="jumlah[]" class="form-control jumlah" required></td>
            <td><input type="text" class="form-control subtotal" readonly></td>
            <td><button type="button" class="btn btn-danger remove-row">Hapus</button></td>
        `;
        tableBody.appendChild(newRow);
    });

    // Remove a row from the sparepart table
    document.getElementById('sparepartTable').addEventListener('click', function(event) {
        if (event.target.classList.contains('remove-row')) {
            event.target.closest('tr').remove();
            updateTotalBiaya(); // Recalculate the total after removing a row
        }
    });

    // Event listener for removing a row
    document.querySelector('#sparepartTable').addEventListener('click', function(event) {
        if (event.target.classList.contains('remove-row')) {
            event.target.closest('tr').remove();
            updateTotalBiaya();
        }
    });

    // Event listener for changes in harga_jasa
    document.getElementById('harga_jasa').addEventListener('input', function() {
        updateTotalBiaya();
    });
</script>
@endsection