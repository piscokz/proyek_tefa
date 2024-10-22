@extends('layout/template')

@section('title','Tentang LENSA')

@section('content')

<!-- About Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow animate__animated animate__fadeInLeft" data-wow-delay="0.1s">
                <!-- Ganti gambar dengan video YouTube -->
                <iframe class="border border-3 border-success rounded-3 shadow-lg" width="100%" height="315" 
                    src="https://www.youtube.com/embed/1b1NTGOx-lY" 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    allowfullscreen>
                </iframe>
            </div>
            <div class="col-lg-6 wow animate__animated animate__fadeInRight" data-wow-delay="0.1s">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3 bg-light shadow-sm">Tentang Lensa</div>
                <h2 class="mb-4 display-6">SMK LENTERA BANGSA KARAWANG</h2>
                <div class="row g-3 mb-4">
                    <div class="col-12">
                        <h6 class="fw-bold text-uppercase text-primary">Sebelumnya Bernama Sapta Lestari</h6>
                        <p>
                            Di tahun 2003 sebuah Yayasan Pendidikan berbasis Umum bernama Yayasan Saptari mendirikan Sebuah Sekolah yang bernama <strong>SMK Sapta Lestari</strong> di Jl.Proklamasi, Rengasjaya, Kec.Rengasdengklok, Kabupaten Karawang. Izin sekolah telah dikeluarkan oleh Dinas Pendidikan Kabupaten Karawang pada tahun 2003.
                        </p>
                    </div>
                    <div class="col-12">
                        <h6 class="fw-bold text-uppercase text-primary">Perubahan Nama Menjadi Lentera Bangsa</h6>
                        <p>
                            Pada tahun 2008, yayasan <strong>Lentera Kalbu</strong> menetapkan perubahan nama sekolah menjadi <strong>SMK Lentera Bangsa</strong> yang disahkan oleh keputusan bupati Karawang. Hingga saat ini, <strong>SMK Lentera Bangsa</strong> telah berkembang dengan jurusan teknik komputer jaringan, teknik sepeda motor, dan perbankan syariah.
                        </p>
                    </div>
                    <div class="col-12">
                        <a href="https://www.youtube.com/@smklenterabangsatv3736" target="_blank" class="btn btn-danger w-100 d-flex align-items-center justify-content-center">
                            <i class="fab fa-youtube me-2"></i> Buka YouTube
                        </a>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Features Start -->
<div class="container-xxl py-6 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-5 wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3 bg-white shadow-sm">Keunggulan LENSA</div>
                <h2 class="mb-4 display-6">Kenapa Harus LENSA?</h2>
                <p class="lead">LENSA memiliki berbagai keunggulan yang membedakannya dengan sekolah lain, seperti fasilitas yang lengkap, banyaknya beasiswa, dan program ekstrakurikuler yang beragam.</p>
            </div>
        </div>

        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                    <div class="card-body text-center">
                        <div class="icon-box mb-4">
                            <i class="fa fa-graduation-cap fa-3x text-primary"></i>
                        </div>
                        <h5 class="card-title mb-3">Banyak Beasiswa</h5>
                        <p class="card-text">LENSA menawarkan banyak beasiswa akademik dan non-akademik untuk mendukung prestasi siswa.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                    <div class="card-body text-center">
                        <div class="icon-box mb-4">
                            <i class="fa fa-cubes fa-3x text-primary"></i>
                        </div>
                        <h5 class="card-title mb-3">Fasilitas Lengkap</h5>
                        <p class="card-text">Gedung dan fasilitas praktek di LENSA sangat lengkap dan bersih, termasuk kolam renang pribadi.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                    <div class="card-body text-center">
                        <div class="icon-box mb-4">
                            <i class="fa fa-parking fa-3x text-primary"></i>
                        </div>
                        <h5 class="card-title mb-3">Lahan Parkir Pribadi</h5>
                        <p class="card-text">LENSA menyediakan lahan parkir yang luas untuk siswa yang membawa kendaraan pribadi.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm wow animate__animated animate__fadeInUp" data-wow-delay="0.5s">
                    <div class="card-body text-center">
                        <div class="icon-box mb-4">
                            <i class="fa fa-utensils fa-3x text-primary"></i>
                        </div>
                        <h5 class="card-title mb-3">Kantin Sekolah</h5>
                        <p class="card-text">Kantin sekolah yang lengkap, membuat siswa nyaman saat istirahat tanpa harus keluar sekolah.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
                    <div class="card-body text-center">
                        <div class="icon-box mb-4">
                            <i class="fa fa-theater-masks fa-3x text-primary"></i>
                        </div>
                        <h5 class="card-title mb-3">Banyak Ekstrakurikuler</h5>
                        <p class="card-text">LENSA menawarkan 15 ekstrakurikuler yang menarik, mulai dari seni hingga olahraga.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm wow animate__animated animate__fadeInUp" data-wow-delay="0.7s">
                    <div class="card-body text-center">
                        <div class="icon-box mb-4">
                            <i class="fa fa-university fa-3x text-primary"></i>
                        </div>
                        <h5 class="card-title mb-3">Bank Pribadi</h5>
                        <p class="card-text">LENSA memiliki bank pribadi yang dikelola jurusan Perbankan Syariah bekerja sama dengan Bank BJB.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->

@endsection
