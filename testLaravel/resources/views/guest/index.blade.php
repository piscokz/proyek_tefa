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
    <link href="{{ asset('guest/css/header.css') }}" rel="stylesheet">

</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.html" class="navbar-brand p-0">
                    <img src="{{ asset('guest/img/logo/logo.png') }}  " alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ route('beranda') }}" class="nav-item nav-link active">Beranda</a>
                        <a href="{{ route('tentang') }}" class="nav-item nav-link">Tentang</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle {{ Request::is('majors') ? 'active' : '' }}" data-bs-toggle="dropdown">Keahlian</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ route('majors.index') }}" class="btn btn-warning">
                                    <i class="bi bi-arrow-left"></i> &nbsp;&nbsp;Kembali ke Daftar Program
                                </a>        
                                @foreach($majors as $major)
                                    <a href="{{ route('majors.show', $major->id) }}" class="dropdown-item {{ Request::routeIs('majors.show', $major->id) ? 'active' : '' }}">
                                        {{ $major->name }}
                                    </a>
                                @endforeach
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
                        <a href="{{ route('guest.news.index')}}" class="nav-item nav-link">Kabar Lensa</a>
                        <a href="{{ route('kontak')}}" class="nav-item nav-link">kontak</a>
                    </div>
                </div>
            </nav>

            

            <div class="container-xxl bg-primary hero-header">
                <div class="container">
                    <div class="row g-5 align-items-center animated animate__tada">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4">SMK Lentera Bangsa Karawang</h1>
                            <p class="text-white pb-3">Adalah Sebuah Sekolah Menengah Kejuruan (SMK) Yang Berada Di Kabupaten Karawang Jawa Barat, Indonesia</p>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid border border-3 rounded border-light shadow"  src="{{ asset('guest/img/profile/lb.jpeg') }}" alt="Foto Halaman SMK Lentera Bangsa">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        


        <!-- About Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow tada" data-aos="fade-right" data-wow-delay="0.1s">
                        <img class="img-fluid border border-success border-3 shadow-lg" src="{{ asset('guest/img/profile/kepsek.jpg') }}">
                    </div>
                    <div class="col-lg-6 wow animate__slideInUp" data-wow-delay="0.1s" data-aos="fade-up">
                        <div class="d-inline-block border rounded-pill text-success px-4 mb-3">Sambutan Kepala Sekolah </div>
                        <h2 class="mb-4">Dr. Ahmad Jaelani, Drs, MM</h2>
                        <p align="justify">Bismillahirrahmaanirrohim
                            Assalamualaikum Warahmatullahi Wabarakatuh. 
                            Alhamdulillahirobbilalamin, segala puji dipanjatkan kepada Allah SWT atas berkat rahmat dan segala karunia-Nya, kami telah menyelesaikan pembuatan website sekolah dengan alamat www.smklenterabangsa.sch.id. 
                            Kami mengucapkan selamat datang di halaman website sekolah kami SMK Lentera Bangsa kepada semua pihak, dengan tujuan agar dapat mengakses segala kegiatan/aktifitas, dan fasilitas yang ada di sekolah kami. 
                            Kami selaku pimpinan sekolah mengucapkan banyak terima kasih kepada tim yang telah mendedikasikan waktu dan fikirannya dalam pembuatan website sekolah ini. 
                            Saya berharap semoga dengan adanya website ini mampu memberikan informasi dan sebagai ajang media komunikasi yang positif. Mari kita berprestasi dalam setiap kerja keras kita, agar apa yang telah kita kerjakan bisa bermanfaat bagi kemajuan pendidikan di Indonesia. 
                            Terimakasih yang tiada terhingga saya ucapkan kepada Allah SWT semoga kita selalu ada dalam lindungannya. Amin. 
                            Wassalamualaikum Warahmatullahi Wabarakatuh.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Newsletter Start -->
        <!-- Newsletter End -->

        <!-- Service Start -->
        <div class="container-xxl py-6 ">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" data-aos="slide-up" style="max-width: 600px;">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Keunggulan LENSA</div>
                    <h2 class="mb-5">5 Alasan Memilih SMK Lentera Bangsa</h2>
                </div>
                <div class="row g-4">

                        <div class="col-lg-4 col-md-6 wow animate__slideInLeft" data-wow-delay="0.1s" data-aos="fade-right">
                            <div class="service-item rounded h-100">
                                <div class="d-flex justify-content-between">
                                    <div class="service-icon">
                                        <i class="fa fa-user-tie fa-2x"></i>                                       
                                    </div>
                                </div>
                                <div class="p-5" data-bs-toggle="modal" data-bs-target="#bisnis">
                                    <h5 class="mb-3">Business Research</h5>
                                    <span>Kalian akan dibekali ilmu khusus sesuai minat dan kemampuan untuk mengejar kompetensi diri dalam menghadapi persaingan dunia kerja.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" data-aos="fade-up">
                            <div class="service-item rounded h-100">
                                <div class="d-flex justify-content-between">
                                    <div class="service-icon">
                                        <i class="fa fa-chart-pie fa-2x"></i>
                                    </div>
                                </div>
                                <div class="p-5" data-bs-toggle="modal" data-bs-target="#strategi">
                                    <h5 class="mb-3">Stretagic Planning</h5>
                                    <span>Kalian akan dibekali semangat kewirausahaan melalui program Teaching Factory yang bekerjasama dengan Honda Astra Motor.</span>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s" data-aos="fade-up">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-chart-line fa-2x"></i>
                                </div>
                            </div>
                            <div class="p-5" data-bs-toggle="modal" data-bs-target="#pasar">
                                <h5 class="mb-3">Market Analysis</h5>
                                <span>Kalian akan langsung berkenalan dengang dunia kerja untuk mengasah kompetensi melalui Praktek Kerja Industri.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" data-aos="fade-up">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-chart-area fa-2x"></i>
                                </div>
                            </div>
                            <div class="p-5" data-bs-toggle="modal" data-bs-target="#analisa">
                                <h5 class="mb-3">Financial Analaysis</h5>
                                <span>Gedung representatif guna menunjang kegiatan belajar mengajar yang dilengkapi dengan fasilitas laboratorium dan bengkel kerja untuk praktek.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" data-aos="fade-up-up">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-balance-scale fa-2x"></i>
                                </div>
                            </div>
                            <div class="p-5" data-bs-toggle="modal" data-bs-target="#legal">
                                <h5 class="mb-3">legal Advisory</h5>
                                <span>SMK LENTERA BANGSA akan memberikan beasiswa bagi kalian yang berprestasi dalam bidang akademik.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Features Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="d-inline-block border rounded-pill text-primary px-4 mb-3" data-aos="slide-right">VISI & MISI LENSA</div>
                        <h2 class="mb-4" data-aos="slide-up">MISI</h2>
                        <p data-aos="slide-up">Mewujudkan sekolah yang berprestasi berdasarkan iman dan taqwa</p>
                    </div>
                    <div class="col-lg-7">
                        <br>
                        <br>
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h2 class="mb-4" data-aos="slide-up">VISI</h2>
                    </div>
                        <div class="row g-5">
                            <div class="col-sm-6 wow fadeInUp" data-aos="slide-right" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-cubes text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Bertaqwa terhadap Tuhan Yang Maha Esa</h6>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-4 wow fadeInUp" data-aos="slide-right" data-wow-delay="0.4s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-percent text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Berbudi pekerti luhur</h6>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeInUp" data-aos="slide-right" data-wow-delay="0.5s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-award text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Terampil, mandiri, dan memiliki daya saing di tingkat lokal maupun nasional</h6>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeInUp" data-aos="slide-right" data-wow-delay="0.6s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-smile-beam text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Memiliki wawasan yang luas</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->


        <!-- Client Start -->
        <div class="container bg-blue my-6 py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <center> <h2>BINAAN </center>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="owl-carousel client-carousel">
                    <img class="img-fluid" src="{{ asset('guest/img/company/astra.jpg') }}" alt="">
                    <img class="img-fluid" src="{{ asset('guest/img/company/axioo.png') }}" alt="">
                    <img class="img-fluid" src="{{ asset('guest/img/company/bjb.png') }}" alt="">
                    <img class="img-fluid" src="{{ asset('guest/img/company/inovindo.png') }}" alt="">
                    <img class="img-fluid" src="{{ asset('guest/img/company/daihatsu.png') }}" alt="">
                </div>
            </div>
        </div>
        <!-- Client End -->


        <!-- Testimonial Start -->
        <!-- Testimonial End -->


        <!-- Team Start -->
        <!-- Team End -->
        

        <!-- Footer Start -->
        @include('include.footer')
        <!-- Footer End -->

        


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

        <!-- Self Modal 1-->
    <div class="portfolio-modal modal fade" id="bisnis" tabindex="-1" aria-labelledby="bisnis" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Jurusan Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Business Research</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line" data-aos="fade-right"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star text-warning"></i></div>
                                    <div class="divider-custom-line" data-aos="fade-right"></div>
                                </div>
                                <!-- Jurusan Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/jurusanasset/tkr-icon.png" alt="Icon-TKRO" />
                                <!-- Jurusan Modal - Text-->
                                <p class="mb-4">Program <span class="text-info"><b>Teknik Kendaraan Ringan Otomotif</b></span> di SMK Lentera Bangsa, yang didukung oleh Daihatsu, mengajarkan siswa tentang perawatan, perbaikan, dan modifikasi kendaraan ringan. Mereka belajar tentang mesin, sistem kelistrikan, sistem kemudi, dan sistem suspensi kendaraan. Program ini menawarkan pelatihan praktis dan teori, mempersiapkan siswa untuk bekerja di industri otomotif. Dengan dukungan dari Daihatsu, para siswa memiliki kesempatan untuk mendapatkan wawasan langsung dari salah satu industri mobil terkemuka dari Jepang. <a href="#">Informasi selengkapnya...</a></p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        {{-- <!-- Self Modal 1-->
        <div class="portfolio-modal modal fade" id="strategi" tabindex="-1" aria-labelledby="strategi" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Jurusan Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Business Research</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line" data-aos="fade-right"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star text-warning"></i></div>
                                        <div class="divider-custom-line" data-aos="fade-right"></div>
                                    </div>
                                    <!-- Jurusan Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/jurusanasset/tkr-icon.png" alt="Icon-TKRO" />
                                    <!-- Jurusan Modal - Text-->
                                    <p class="mb-4">Program <span class="text-info"><b>Teknik Kendaraan Ringan Otomotif</b></span> di SMK Lentera Bangsa, yang didukung oleh Daihatsu, mengajarkan siswa tentang perawatan, perbaikan, dan modifikasi kendaraan ringan. Mereka belajar tentang mesin, sistem kelistrikan, sistem kemudi, dan sistem suspensi kendaraan. Program ini menawarkan pelatihan praktis dan teori, mempersiapkan siswa untuk bekerja di industri otomotif. Dengan dukungan dari Daihatsu, para siswa memiliki kesempatan untuk mendapatkan wawasan langsung dari salah satu industri mobil terkemuka dari Jepang. <a href="#">Informasi selengkapnya...</a></p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <!-- Self Modal 1-->
    <div class="portfolio-modal modal fade" id="pasar" tabindex="-1" aria-labelledby="pasar" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Jurusan Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Business Research</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line" data-aos="fade-right"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star text-warning"></i></div>
                                    <div class="divider-custom-line" data-aos="fade-right"></div>
                                </div>
                                <!-- Jurusan Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/jurusanasset/tkr-icon.png" alt="Icon-TKRO" />
                                <!-- Jurusan Modal - Text-->
                                <p class="mb-4">Program <span class="text-info"><b>Teknik Kendaraan Ringan Otomotif</b></span> di SMK Lentera Bangsa, yang didukung oleh Daihatsu, mengajarkan siswa tentang perawatan, perbaikan, dan modifikasi kendaraan ringan. Mereka belajar tentang mesin, sistem kelistrikan, sistem kemudi, dan sistem suspensi kendaraan. Program ini menawarkan pelatihan praktis dan teori, mempersiapkan siswa untuk bekerja di industri otomotif. Dengan dukungan dari Daihatsu, para siswa memiliki kesempatan untuk mendapatkan wawasan langsung dari salah satu industri mobil terkemuka dari Jepang. <a href="#">Informasi selengkapnya...</a></p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Self Modal 1-->
        <div class="portfolio-modal modal fade" id="analisa" tabindex="-1" aria-labelledby="analisa" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Jurusan Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Business Research</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line" data-aos="fade-right"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star text-warning"></i></div>
                                        <div class="divider-custom-line" data-aos="fade-right"></div>
                                    </div>
                                    <!-- Jurusan Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/jurusanasset/tkr-icon.png" alt="Icon-TKRO" />
                                    <!-- Jurusan Modal - Text-->
                                    <p class="mb-4">Program <span class="text-info"><b>Teknik Kendaraan Ringan Otomotif</b></span> di SMK Lentera Bangsa, yang didukung oleh Daihatsu, mengajarkan siswa tentang perawatan, perbaikan, dan modifikasi kendaraan ringan. Mereka belajar tentang mesin, sistem kelistrikan, sistem kemudi, dan sistem suspensi kendaraan. Program ini menawarkan pelatihan praktis dan teori, mempersiapkan siswa untuk bekerja di industri otomotif. Dengan dukungan dari Daihatsu, para siswa memiliki kesempatan untuk mendapatkan wawasan langsung dari salah satu industri mobil terkemuka dari Jepang. <a href="#">Informasi selengkapnya...</a></p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <!-- Self Modal 1-->
    <div class="portfolio-modal modal fade" id="legal" tabindex="-1" aria-labelledby="legal" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Jurusan Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Business Research</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line" data-aos="fade-right"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star text-warning"></i></div>
                                    <div class="divider-custom-line" data-aos="fade-right"></div>
                                </div>
                                <!-- Jurusan Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/jurusanasset/tkr-icon.png" alt="Icon-TKRO" />
                                <!-- Jurusan Modal - Text-->
                                <p class="mb-4">Program <span class="text-info"><b>Teknik Kendaraan Ringan Otomotif</b></span> di SMK Lentera Bangsa, yang didukung oleh Daihatsu, mengajarkan siswa tentang perawatan, perbaikan, dan modifikasi kendaraan ringan. Mereka belajar tentang mesin, sistem kelistrikan, sistem kemudi, dan sistem suspensi kendaraan. Program ini menawarkan pelatihan praktis dan teori, mempersiapkan siswa untuk bekerja di industri otomotif. Dengan dukungan dari Daihatsu, para siswa memiliki kesempatan untuk mendapatkan wawasan langsung dari salah satu industri mobil terkemuka dari Jepang. <a href="#">Informasi selengkapnya...</a></p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


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