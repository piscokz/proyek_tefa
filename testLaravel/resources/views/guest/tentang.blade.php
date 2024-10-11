@extends('layout/template')

@section('title','Tentang LENSA')

@section('content')

<!-- About Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow tada" data-wow-delay="0.1s">
                <img class="img-fluid border border-3 border-success rounded" src="{{ asset('guest/img/about/profile.jpg') }}" alt="Tentang LENSA">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Tentang Lensa</div>
                <h2 class="mb-4">SMK LENTERA BANGSA KARAWANG</h2>
                <div class="row g-3 mb-4">
                    <div class="col-12">
                        <h6 class="fw-bold">Sebelumnya Bernama Sapta Lestari</h6>
                        <p>
                            Di tahun 2003 sebuah Yayasan Pendidikan berbasis Umum bernama Yayasan Saptari mendirikan Sebuah Sekolah Yang Bernama <strong>SMK Sapta Lestari</strong> Yang Berada Di Jl.Proklamasi, Rengasjaya, Kec.Rengasdengklok, Kabupaten Karawang, Yang Di Dirikan Oleh Ir.Saptari Yang berdomisili di Jakarta. Izin sekolah Telah dikeluarkan oleh Dinas Pendidikan Kabupaten Karawang Pada Tahun 2003 Dengan Nomor: 007/754/TU/2003 pada angkatan pertama dengan Kompetensi Keahlian Teknik Komputer Jaringan (TKJ) sampai dengan tahun 2005.
                        </p>
                    </div>
                    <div class="col-12">
                        <h6 class="fw-bold">Perubahan Nama Menjadi Lentera Bangsa</h6>
                        <p>
                            Seiring berjalannya waktu ada perubahan yayasan, ditahun 2008 yayasan <strong>Lentera Kalbu</strong> dan penetapan perubahan nama sekolah <strong>SMK Sapta Lestari menjadi SMK Lentera Bangsa</strong> yang ditetapkan oleh keputusan bupati nomor: 421.3/Kep-339-Huk/2010 tertanggal 05 Mei 2010 yang ditandatangani oleh bupati Karawang Dadang S Muchtar. Dan sejak tahun 2010 <strong>SMK Sapta Lestari</strong> berubah nama menjadi <strong>SMK Lentera Bangsa</strong> sampai dengan sekarang. Seiring waktu berjalan, sejak berdiri <strong>SMK Lentera Bangsa</strong> membuka jurusan di bidang teknologi kendaraan ringan dan teknik komputer jaringan. Dan mulai tahun 2015, jurusan baru dibuka dengan keahlian teknik sepeda motor dan bisnis manajemen dengan konsentrasi keahlian perbankan syariah. Saat ini ruang teori yang sebanyak 14 ruangan dan ruang praktek teknik kendaraan ringan sebanyak 3 ruangan, sedangkan untuk jurusan teknik komputer jaringan menggunakan 2 ruangan, serta penambahan lahan untuk kegiatan pengembangan dan praktik lainnya seluas m².
                        </p>
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
        <div class="row g-5">
            <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Keunggulan LENSA</div>
                <h2 class="mb-4">Kenapa Harus LENSA?</h2>
                <p>Karena LENSA (Lentera Bangsa) memiliki beberapa keunggulan dibandingkan sekolah lain, keunggulan tersebut antara lain:</p>
            </div>
            <div class="col-lg-7">
                <div class="row g-5">
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-light rounded-circle me-3">
                                <i class="fa fa-graduation-cap text-secondary"></i>
                            </div>
                            <h6 class="mb-0">Terdapat Banyak Beasiswa</h6>
                        </div>
                        <p>Di LENSA kalian akan mendapatkan banyak sekali beasiswa akademik maupun non-akademik.</p>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-secondary rounded-circle me-3">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h6 class="mb-0">Fasilitas Lengkap</h6>
                        </div>
                        <p>Gedung dan peralatan praktek di LENSA sudah sangat lengkap dan bersih. Di LENSA juga sudah terdapat kolam renang pribadi bagi siswa.</p>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-danger rounded-circle me-3">
                                <i class="fa fa-parking text-white"></i>
                            </div>
                            <h6 class="mb-0">Lahan Parkir Pribadi</h6>
                        </div>
                        <p>LENSA sudah menyediakan lahan parkir yang luas bagi siswa yang membawa kendaraan pribadi.</p>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-warning rounded-circle me-3">
                                <i class="fa fa-utensils text-white"></i>
                            </div>
                            <h6 class="mb-0">Terdapat Kantin Sekolah</h6>
                        </div>
                        <p>LENSA juga telah menyediakan kantin sekolah yang cukup lengkap sehingga siswa tidak perlu keluar gerbang untuk membeli jajanan pada jam istirahat.</p>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.6s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                <i class="fa fa-theater-masks text-white"></i> <!-- Ikon untuk kegiatan teater/drama -->
                            </div>
                            <h6 class="mb-0">Terdapat Banyak Ekstrakurikuler</h6>
                        </div>
                        <p>Terdapat 15 ekskul di LENSA yang dapat dipilih oleh siswa, dan siswa dapat memilih lebih dari satu ekskul.</p>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-success rounded-circle me-3">
                                <i class="fa fa-university text-white"></i> <!-- Ikon untuk bank -->
                            </div>
                            <h6 class="mb-0">Memiliki Bank Pribadi</h6>
                        </div>
                        <p>LENSA juga memiliki bank sekolah pribadi yang dikelola oleh jurusan perbankan syariah dan telah bekerja sama dengan Bank BJB.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->

@endsection