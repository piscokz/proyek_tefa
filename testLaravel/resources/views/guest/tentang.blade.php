<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SMK LENTERA BANGSA - SEKOLAH BINAAN ASTRA HONDA MOTOR</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('guest/img/logo/logo.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-pF6AWtgGLkKCFnABl12GRDTXUIfqTX5w7zKJzKkexy23XcC4dbKZfubZn5GyIcvUOSF1yK6T1rB10K8SlXwAHA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="{{ asset('guest/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('guest/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Template Stylesheet -->
    <link href="{{ asset('guest/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.html" class="navbar-brand p-0">
                    <!-- <h1 class="m-0">BizConsult</h1> -->
                    <img src="{{ asset('guest/img/logo/logo.png')}}" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ route('beranda') }}" class="nav-item nav-link">Beranda</a>
                        <a href="{{ route('tentang') }}" class="nav-item nav-link active">Tentang</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Keahlian</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ route('pplg')}}" class="dropdown-item">Pengembangan Perangkat Lunak Dan Gim</a>
                                <a href="{{ route('tbsm')}}" class="dropdown-item">Teknik Bisnis Sepeda Motor</a>
                                <a href="{{ route('tkro')}}" class="dropdown-item">Teknik Kendaraan Ringan Otomotif</a>
                                <a href="{{ route('tkj')}}" class="dropdown-item">Teknik Komputer Dan Jaringan</a>
                                <a href="{{ route('ps')}}" class="dropdown-item">Perbankan Syari'ah</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Program</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ route('bkk')}}" class="dropdown-item">BKK Lensa</a>
                                <a href="{{ route('tc')}}" class="dropdown-item">Teaching Factory</a>
                                <a href="{{ route('pkl')}}" class="dropdown-item">Praktek Kerja Industri</a>
                            </div>
                        </div>
                        <a href="{{ route('kabarlensa')}}" class="nav-item nav-link">Kabar Lensa</a>
                        <a href="{{ route('kontak')}}" class="nav-item nav-link">kontak</a>
                    </div>
                </div>
            </nav>

            <div class="container-xxl bg-primary page-header">
                <div class="container text-center">
                    <h1 class="text-white animated zoomIn mb-3">Tentang LENSA</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="index.html">Beranda</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Tentang Lensa</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- About Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow tada" data-wow-delay="0.1s">
                        <img class="img-fluid border-3 border-success border rounded" data-aos="" src="{{ asset('guest/img/about/profile.jpg')}}">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Tentang Lensa</div>
                        <h2 class="mb-4">SMK LENTERA BANGSA KARAWANG</h2>
                        <!-- <p class="mb-4">Sejarah Berdirinya LENSA</p> -->
                        <div class="row g-3 mb-4">
                            <div class="col-12 d-flex">
                                <div class="ms-4">
                                    <h6>Sebelumnya Bernama Sapta Lestari</h6>
                                    <span>Di tahun 2003 sebuah Yayasan Pendidikan berbasis Umum bernama Yayasan Saptari mendirikan Sebuah Sekolah Yang Bernama <strong>Smk Sapta lestari</strong> Yang Berada Di Jl.Proklamasi, Rengasjaya, Kec.Rengasdengklok, Kabupaten Karawang, Yang Di Dirikan Oleh Ir.Saptari Yang berdomisili di Jakarta, Izin sekolah Telah di keluarkan oleh Dinas Pendidikan Kabupaten Karawang Pada Tahun 2003 Dengan Nomor : 007/754/TU/2003 pada angkatan pertama dengan Kompetensi Keahlian Teknik Komputer Jaringan (TKJ) sampai dengan tahun 2005. </span>
                                </div>
                            </div>
                            <div class="col-12 d-flex">
                                <div class="ms-4">
                                    <h6>Perubahan Nama Menjadi Lentera Bangsa</h6>
                                    <span>Seiring Berjalannya waktu ada perubahan yayasan, ditahun 2008 yayasan <strong>Lentera kalbu</strong> dan penetapan perubahan nama sekolah <strong>SMK Sapta Lestari menjadi SMK Lentera Bangsa</strong> yang ditetapkan oleh keputusan bupati nomor: 421.3/Kep-339-Huk/2010 tertanggal 05 Mei 2010 yang ditandatangai oleh bupati Karawang Dadang S Muchtar. Dan sejak tahun 2010 <strong>SMK Sapta Lestari</strong> Berubah Nama Menjadi <strong>SMK Lentera Bangsa</strong> sampai dengan sekarang. Seiring waktu berjalan sejak berdiri <strong>SMK Lentera Bangsa</strong> membuka jurusan dibidang teknologi kendaraan ringan dan teknik komputer jaringan. Dan mulai tahun 2015 jurusan baru dibuka dengan keahlian teknik sepeda motor dan bisnis managemen dengan konsentrasi keahlian perbankan syariah. Saat ini ruang teori yang sebanyak 14 ruangan dan ruang praktek teknik kendaraan ringan sebanyak 3 ruangan sedangkan untuk jurusan teknik komputer jaringan menggunakan 2 ruangan, serta penambahan lahan untuk kegiatan pengembangan dan praktik lainnya seluas m 2</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Features Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Keunggulan LENSA </div>
                        <h2 class="mb-4">Kenapa Harus LENSA?</h2>
                        <p>Karena LENSA (Lentera Bangsa) Memiliki Beberapa Keunggulan Di banding Sekolah Lain, Keunggulan tersebut Antara Lain:</p>
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
                                <span>DI LENSA Kalian Akan Mendapatkan Banyak Sekali Beasiswa Akademik Maupun Non Akademik</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-secondary rounded-circle me-3">
                                        <i class="fa fa-cubes text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Fasilitas Lengkap</h6>
                                </div>
                                <span>Gedung Dan Peralatan Pratikum Di LENSA Sudah Sangat Lengkap Dan Bersih Tentunya, Di LENSA Juga Sudah Terdapat Kolam Renang Pribadi Bagi Siswa</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-danger  rounded-circle me-3">
                                        <i class="fa fa-parking text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Lahan Parkir Pribadi</h6>
                                </div>
                                <span>LENSA Sudah Menyediakan Lahan Parkir Yang Luas Bagi Siswa Yang Membawa Kendaraan Pribadi</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-warning rounded-circle me-3">
                                        <i class="fa fa-utensils text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Terdapat Kantin Sekolah</h6>
                                </div>
                                <span>LENSA Juga Telah Menyediakan Kantin Sekolah Yang Cukup Lengkap Sehingga Siswa Tidak Perlu Keluar Gerbang Untuk Membeli Jajanan Pada Jam Istirahat</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-theater-masks text-white"></i> <!-- Ikon untuk kegiatan teater/drama -->

                                    </div>
                                    <h6 class="mb-0">Terdapat Banyak Ekstrakurikuler</h6>
                                </div>
                                <span>Terdapat 15 Ekskul Di LENSA Yang Dapat Dipilih Oleh Siswa, Dan Siswa Dapat Memilih Lebih Dari Satu Ekskul</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.6s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-success rounded-circle me-3">
                                        <i class="fa fa-university text-white"></i> <!-- Ikon untuk bank -->
                                    </div>
                                    <h6 class="mb-0">Memiliki Bank Pribadi</h6>
                                </div>
                                <span>LENSA Juga Memiliki Bank Sekolah Pribadi Yang Di Kelola Oleh Jurusan Perbankan Syari'ah Dan Telah Bekerja Sama Dengan Bank BJB</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->


        <!-- Team Start -->
        <!-- Team End -->
        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                        <h5 class="text-white mb-4">KAMPUS UTAMA <i class="fa fa-school text-white"></i> <!-- Ikon untuk sekolah --></h5><hr>
                        <p><i class="fa fa-map-marker-alt me-3"></i>JL. Proklamasi, Bakan Jati Gg Asem, Karyasari Rengasdengklok, Tunggakjati, Kec. Karawang Barat, Karawang, Jawa Barat 41352</p>
                        <p><i class="fa fa-phone-alt me-3"></i>(0267) 8486055</p>
                        <p><i class="fa fa-envelope me-3"></i>smklenterabangsa@yahoo.co.id</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/lenterabangsa.id/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">

                    </div>
                    <div class="col-md-6 col-lg-3">

                    </div>
                    <div class="col-md-6 col-lg-3">
                        <!-- <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">SMK Lentera Bangsa Karawang,</a> All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
							Designed By <a class="border-bottom" href="#">Ibrahim Ahmad Falathin</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('guest/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('guest/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('guest/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('guest/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <!-- Template Javascript -->
    <script src="{{ asset('guest/js/main.js') }}"></script>
</body>

</html>