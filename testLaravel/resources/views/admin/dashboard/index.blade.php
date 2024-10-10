@extends('layout.admintemplate')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <!-- Existing HTML structure -->
        </div>

        <div class="row">
            <!-- Jumlah Berita -->
            <div class="col-lg-4 grid-margin stretch-card">
                <div class="card card-rounded shadow-sm border-primary">
                    <div class="card-body">
                        <h4 class="card-title text-primary"><i class="bi bi-newspaper"></i>&nbsp;&nbsp; Jumlah Berita</h4>
                        <canvas id="newsChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Jumlah Program Keahlian -->
            <div class="col-lg-4 grid-margin stretch-card">
                <div class="card card-rounded shadow-sm border-success">
                    <div class="card-body">
                        <h4 class="card-title text-success"><i class="bi bi-laptop"></i>&nbsp;&nbsp; Jumlah Program Keahlian</h4>
                        <canvas id="majorChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Jumlah Kontak Masuk -->
            <div class="col-lg-4 grid-margin stretch-card">
                <div class="card card-rounded shadow-sm border-warning">
                    <div class="card-body">
                        <h4 class="card-title text-warning"><i class="bi bi-envelope-fill"></i>&nbsp;&nbsp; Jumlah Orang yang Bertanya</h4>
                        <canvas id="contactChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Data untuk grafik berita
    const newsData = {
        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
        datasets: [{
            label: 'Jumlah Berita',
            data: @json(array_values($monthlyNewsData)), // Data jumlah berita per bulan
            backgroundColor: 'rgba(255, 0, 0, 0.2)', // Red
            borderColor: 'rgba(255, 0, 0, 1)', // Red
            borderWidth: 1
        }]
    };

    const newsConfig = {
        type: 'bar',
        data: newsData,
        options: {
            responsive: true,
            animation: {
                duration: 1000,
                easing: 'easeOutBounce'
            },
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Jumlah'
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Bulan'
                    }
                }
            }
        }
    };

    // Data untuk grafik program keahlian
    const majorData = {
        labels: @json($majorLabels), // Labels untuk program keahlian
        datasets: [{
            label: 'Jumlah Program Keahlian',
            data: @json($majorData), // Data jumlah program keahlian
            backgroundColor: 'rgba(255, 127, 0, 0.2)', // Orange
            borderColor: 'rgba(255, 127, 0, 1)', // Orange
            borderWidth: 1
        }]
    };

    const majorConfig = {
        type: 'bar',
        data: majorData,
        options: {
            responsive: true,
            animation: {
                duration: 1000,
                easing: 'easeOutBounce'
            },
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Jumlah'
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Program Keahlian'
                    }
                }
            }
        }
    };

    // Data untuk grafik kontak
    const contactData = {
        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
        datasets: [{
            label: 'Jumlah Orang yang Bertanya',
            data: @json(array_values($monthlyContactsData)), // Data jumlah kontak per bulan
            backgroundColor: 'rgba(0, 255, 0, 0.2)', // Green
            borderColor: 'rgba(0, 255, 0, 1)', // Green
            borderWidth: 1
        }]
    };

    const contactConfig = {
        type: 'bar',
        data: contactData,
        options: {
            responsive: true,
            animation: {
                duration: 1000,
                easing: 'easeOutBounce'
            },
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Jumlah'
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Bulan'
                    }
                }
            }
        }
    };

    // Render the Charts
    new Chart(document.getElementById('newsChart'), newsConfig);
    new Chart(document.getElementById('majorChart'), majorConfig);
    new Chart(document.getElementById('contactChart'), contactConfig);
</script>
@endsection
