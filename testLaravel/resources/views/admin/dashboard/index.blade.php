@extends('layout.admintemplate')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <!-- Grafik Jumlah Berita -->
            <div class="col-lg-4 grid-margin stretch-card">
                <div class="card card-rounded shadow-sm border-primary">
                    <div class="card-body text-center">
                        <h4 class="card-title text-primary mb-3"><i class="bi bi-newspaper"></i>&nbsp;&nbsp;Jumlah Berita</h4>
                        <canvas id="newsChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Grafik Jumlah Program Keahlian -->
            <div class="col-lg-4 grid-margin stretch-card">
                <div class="card card-rounded shadow-sm border-success">
                    <div class="card-body text-center">
                        <h4 class="card-title text-success mb-3"><i class="bi bi-laptop"></i>&nbsp;&nbsp;Jumlah Program Keahlian</h4>
                        <canvas id="majorChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Grafik Jumlah Kontak Masuk -->
            <div class="col-lg-4 grid-margin stretch-card">
                <div class="card card-rounded shadow-sm border-warning">
                    <div class="card-body text-center">
                        <h4 class="card-title text-warning mb-3"><i class="bi bi-envelope-fill"></i>&nbsp;&nbsp;Jumlah Orang yang Bertanya</h4>
                        <canvas id="contactChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Data untuk grafik berita
    const newsData = {
        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
        datasets: [{
            label: 'Jumlah Berita',
            data: @json(array_values($monthlyNewsData)),
            backgroundColor: 'rgba(54, 162, 235, 0.2)', // Light blue
            borderColor: 'rgba(54, 162, 235, 1)', // Blue
            borderWidth: 2,
            hoverBackgroundColor: 'rgba(54, 162, 235, 0.5)', // Darker blue on hover
            hoverBorderColor: 'rgba(54, 162, 235, 1)',
        }]
    };

    const newsConfig = {
        type: 'bar',
        data: newsData,
        options: {
            responsive: true,
            animation: {
                duration: 1500,
                easing: 'easeOutBounce'
            },
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Jumlah',
                        color: '#555',
                        font: {
                            size: 14
                        }
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Bulan',
                        color: '#555',
                        font: {
                            size: 14
                        }
                    }
                }
            }
        }
    };

    // Data untuk grafik program keahlian
    const majorData = {
        labels: @json($majorLabels),
        datasets: [{
            label: 'Jumlah Program Keahlian',
            data: @json($majorData),
            backgroundColor: 'rgba(75, 192, 192, 0.2)', // Light green
            borderColor: 'rgba(75, 192, 192, 1)', // Green
            borderWidth: 2,
            hoverBackgroundColor: 'rgba(75, 192, 192, 0.5)',
            hoverBorderColor: 'rgba(75, 192, 192, 1)',
        }]
    };

    const majorConfig = {
        type: 'bar',
        data: majorData,
        options: {
            responsive: true,
            animation: {
                duration: 1500,
                easing: 'easeOutBounce'
            },
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Jumlah',
                        color: '#555',
                        font: {
                            size: 14
                        }
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Program Keahlian',
                        color: '#555',
                        font: {
                            size: 14
                        }
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
            data: @json(array_values($monthlyContactsData)),
            backgroundColor: 'rgba(255, 206, 86, 0.2)', // Light yellow
            borderColor: 'rgba(255, 206, 86, 1)', // Yellow
            borderWidth: 2,
            hoverBackgroundColor: 'rgba(255, 206, 86, 0.5)',
            hoverBorderColor: 'rgba(255, 206, 86, 1)',
        }]
    };

    const contactConfig = {
        type: 'bar',
        data: contactData,
        options: {
            responsive: true,
            animation: {
                duration: 1500,
                easing: 'easeOutBounce'
            },
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Jumlah',
                        color: '#555',
                        font: {
                            size: 14
                        }
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Bulan',
                        color: '#555',
                        font: {
                            size: 14
                        }
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
