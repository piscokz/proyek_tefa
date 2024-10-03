@extends('layout.admintemplate')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Jumlah Berita</h4>
                        <canvas id="newsChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Jumlah Program Keahlian</h4>
                        <canvas id="majorChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Data for News Chart
    const newsData = {
        labels: ['Berita 1', 'Berita 2', 'Berita 3', 'Berita 4', 'Berita 5'],
        datasets: [{
            label: 'Jumlah Berita',
            data: [12, 19, 3, 5, 2], // Replace with your dynamic data
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    };

    // Data for Majors Chart
    const majorData = {
        labels: ['Jurusan A', 'Jurusan B', 'Jurusan C', 'Jurusan D'],
        datasets: [{
            label: 'Jumlah Program Keahlian',
            data: [8, 15, 6, 4], // Replace with your dynamic data
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
        }]
    };

    // Config for News Chart
    const newsConfig = {
        type: 'bar', // Change to 'line', 'pie', etc. as needed
        data: newsData,
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    };

    // Config for Majors Chart
    const majorConfig = {
        type: 'bar', // Change to 'line', 'pie', etc. as needed
        data: majorData,
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    };

    // Render the charts
    const newsChart = new Chart(
        document.getElementById('newsChart'),
        newsConfig
    );

    const majorChart = new Chart(
        document.getElementById('majorChart'),
        majorConfig
    );
</script>
@endsection
