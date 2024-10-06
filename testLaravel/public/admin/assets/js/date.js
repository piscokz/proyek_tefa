// Menggunakan jQuery dan Bootstrap Datepicker
$(document).ready(function() {
    // Set datepicker
    $('#datepicker-popup').datepicker({
      format: 'mm/dd/yyyy',  // Format tanggal yang akan digunakan
      todayHighlight: true,  // Menyoroti hari ini
      autoclose: true,       // Menutup otomatis saat tanggal dipilih
    });

    // Isi input dengan tanggal hari ini saat halaman dimuat
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); // Januari = 0
    var yyyy = today.getFullYear();
    var currentDate = mm + '/' + dd + '/' + yyyy;

    $('#datepicker-popup input').val(currentDate);
    });