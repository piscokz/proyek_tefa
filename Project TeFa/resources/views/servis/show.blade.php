<!-- resources/views/servis/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Service Details</h1>
    
    <div class="card mt-3">
        <div class="card-header">
            <strong>Service ID: {{ $servis->id_servis }}</strong>
        </div>
        <div class="card-body">
            <p><strong>Nomor Polisi:</strong> {{ $servis->nomor_polisi }}</p>
            <p><strong>Keluhan:</strong> {{ $servis->keluhan }}</p>
            <p><strong>Kilometer Saat Ini:</strong> {{ $servis->kilometer_saat_ini }}</p>
            <p><strong>Harga Jasa:</strong> {{ $servis->harga_jasa }}</p>
            <p><strong>Tanggal Servis:</strong> {{ $servis->tanggal_servis }}</p>
            <p><strong>Total Biaya:</strong> {{ $servis->total_biaya }}</p>
            <p><strong>Uang Masuk:</strong> {{ $servis->uang_masuk }}</p>
            <p><strong>Kembalian:</strong> {{ $servis->kembalian }}</p>
            <p><strong>Jenis Servis:</strong> {{ $servis->jenis_servis }}</p>
        </div>
    </div>
    
    <a href="{{ route('servis.index') }}" class="btn btn-primary mt-3">Back to Services</a>
</div>
</body>
</html>