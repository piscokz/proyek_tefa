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
                    <h5 class="mb-0"><i class="fas fa-user"></i> &nbsp; Informasi Pelanggan</h5>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_pelanggan"><i class="fas fa-user"></i> Nama Pelanggan:</label>
                        <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="kontak"><i class="fas fa-phone"></i> Kontak:</label>
                        <input type="text" name="kontak" id="kontak" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat"><i class="fas fa-map-marker-alt"></i> Alamat:</label>
                        <textarea name="alamat" id="alamat" class="form-control" rows="3" required></textarea>
                    </div>
                </div>
            </div>

            <!-- Section 2: Input Kendaraan -->
            <div class="card mb-3 shadow">
                <div class="card-header bg-info text-white">
                    <h5 class="mb-0"><i class="fas fa-car"></i> &nbsp; Informasi Kendaraan</h5>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="nomor_polisi"><i class="fas fa-car"></i> Nomor Polisi:</label>
                        <input type="text" name="nomor_polisi" id="nomor_polisi" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kendaraan"><i class="fas fa-car-side"></i> Jenis Kendaraan:</label>
                        <input type="text" name="jenis_kendaraan" id="jenis_kendaraan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="warna"><i class="fas fa-paint-brush"></i> Warna Kendaraan:</label>
                        <input type="text" name="warna" id="warna" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="kode_mesin"><i class="fas fa-cogs"></i> Kode Mesin:</label>
                        <input type="text" name="kode_mesin" id="kode_mesin" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="tahun_produksi"><i class="fas fa-calendar-alt"></i> Tahun Produksi:</label>
                        <input type="text" name="tahun_produksi" id="tahun_produksi" class="form-control" required>
                    </div>
                </div>
            </div>

            <!-- Section 3: Input Sparepart -->
            <div class="card mb-3 shadow">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0"><i class="fas fa-wrench"></i> &nbsp; Informasi Sparepart</h5>
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
                    <h5 class="mb-0"><i class="fas fa-cogs"></i> &nbsp; Informasi Servis</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jenis_servis" class="col-form-label"><i class="fas fa-cogs"></i> Jenis Servis 
                                    <small id="jenisServisHelp" class="form-text text-muted">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                        (Pilih jenis servis yang sesuai dengan kebutuhan kendaraan.)
                                    </small>
                                </label>
                                <select name="jenis_servis" id="jenis_servis" class="form-control form-select" aria-describedby="jenisServisHelp">
                                    <option value="ringan">Ringan</option>
                                    <option value="sedang">Sedang</option>
                                    <option value="berat">Berat</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="keluhan" class="col-form-label"><i class="fas fa-exclamation-circle"></i> Keluhan:</label>
                                <input type="text" name="keluhan" id="keluhan" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="harga_jasa" class="col-form-label"><i class="fas fa-money-bill-wave"></i> Harga Jasa:</label>
                                <input type="number" name="harga_jasa" id="harga_jasa" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="uang_masuk" class="col-form-label"><i class="fas fa-money-bill-wave"></i> Uang Masuk:</label>
                                <input type="number" name="uang_masuk" id="uang_masuk" class="form-control" required step="0.01" value="{{ old('uang_masuk', $servis->uang_masuk ?? '') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kilometer_saat_ini" class="col-form-label"><i class="fas fa-tachometer-alt"></i> Kilometer Saat Ini:</label>
                                <input type="number" name="kilometer_saat_ini" id="kilometer_saat_ini" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="total_biaya" class="col-form-label"><i class="fas fa-dollar-sign"></i> Total Biaya:</label>
                                <input type="text" name="total_biaya" id="total_biaya" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="kembalian" class="col-form-label"><i class="fas fa-money-bill-wave"></i> Kembalian:</label>
                                <input type="number" name="kembalian" id="kembalian" class="form-control" step="0.01" value="{{ old('kembalian', $servis->kembalian ?? '') }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_servis" class="col-form-label"><i class="fas fa-calendar-day"></i> Tanggal Servis:</label>
                                <input type="date" name="tanggal_servis" id="tanggal_servis" class="form-control" value="{{ date('Y-m-d') }}" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <button type="submit" class="btn btn-success">Simpan Servis</button>
        </form>
    </div>

    <script>
        // Update total biaya based on harga jasa and spare part subtotal
        function updateTotalBiaya() {
            const hargaJasa = parseFloat(document.getElementById('harga_jasa').value) || 0;
            let totalSparepart = 0;

            // Calculate total spare part cost
            document.querySelectorAll('#sparepartTable tbody tr').forEach(row => {
                const harga = parseFloat(row.querySelector('.harga').value.replace(/[^0-9.-]+/g, "")) || 0;
                const jumlah = parseInt(row.querySelector('.jumlah').value) || 0;
                const subtotal = harga * jumlah;
                row.querySelector('.subtotal').value = subtotal.toFixed(2);
                totalSparepart += subtotal;
            });

            // Update total biaya
            const totalBiaya = hargaJasa + totalSparepart;
            document.getElementById('total_biaya').value = totalBiaya.toFixed(2);
        }

        // Update kembalian
        function updateKembalian() {
            const uangMasuk = parseFloat(document.getElementById('uang_masuk').value) || 0;
            const totalBiaya = parseFloat(document.getElementById('total_biaya').value) || 0;
            const kembalian = uangMasuk - totalBiaya;
            document.getElementById('kembalian').value = kembalian.toFixed(2);
        }

        // Event listeners
        document.getElementById('harga_jasa').addEventListener('input', updateTotalBiaya);
        document.getElementById('uang_masuk').addEventListener('input', updateKembalian);

        document.getElementById('addRow').addEventListener('click', function () {
            const tableBody = document.querySelector('#sparepartTable tbody');
            const row = tableBody.insertRow();
            row.innerHTML = `
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
                <td><input type="number" name="jumlah[]" class="form-control jumlah" required min="1"></td>
                <td><input type="text" class="form-control subtotal" readonly></td>
                <td><button type="button" class="btn btn-danger remove-row">Hapus</button></td>
            `;
            updateTotalBiaya();
        });

        document.querySelector('#sparepartTable').addEventListener('click', function (event) {
            if (event.target.classList.contains('remove-row')) {
                event.target.closest('tr').remove();
                updateTotalBiaya();
            }
        });

        document.querySelector('#sparepartTable').addEventListener('change', function (event) {
            if (event.target.classList.contains('sparepart_id')) {
                const harga = parseFloat(event.target.selectedOptions[0].dataset.harga) || 0;
                event.target.closest('tr').querySelector('.harga').value = harga.toFixed(2);
                updateTotalBiaya();
            }
        });

        document.querySelector('#sparepartTable').addEventListener('input', function (event) {
            if (event.target.classList.contains('jumlah') || event.target.classList.contains('harga')) {
                updateTotalBiaya();
            }
        });

        // Initial calculation
        updateTotalBiaya();
    </script>    
@endsection