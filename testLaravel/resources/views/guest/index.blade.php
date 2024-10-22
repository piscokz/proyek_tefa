<!DOCTYPE html>
<html lang="en">

@include('include.taghead')

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
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0 shadow" id="navbar">
                <a href="{{ route('beranda')}}" class="navbar-brand p-0">
                    <img src="{{ asset('guest/img/logo/logo.png') }}" alt="Logo" class="img-fluid" style="max-height: 40px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ route('beranda') }}" class="nav-item nav-link active animated fadeInLeft"><i class="fas fa-home"></i> Beranda</a>
                        @if (Auth::check())
                            <a href="{{ route('admin.dashboard.index')}}" class="nav-link nav-item {{ Request::is('major*') ? 'active' : '' }} animated fadeInLeft">
                                <i class="fas fa-user-tie animated fadeIn"></i> Dashboard                                  
                            </a>
                        @endif
                        <a href="{{ route('tentang') }}" class="nav-item nav-link animated fadeInLeft"><i class="fas fa-info-circle"></i> Tentang</a>
                        <a href="{{ route('majors.index')}}" class="nav-link nav-item {{ Request::is('major*') ? 'active' : '' }} animated fadeInLeft">
                            <i class="fas fa-graduation-cap animated fadeIn"></i> Keahlian
                        </a>
                        {{-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle {{ Request::is('majors') ? 'active' : '' }}" data-bs-toggle="dropdown"><i class="fas fa-graduation-cap"></i> Keahlian</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ route('majors.index') }}" class="btn btn-warning">
                                    <i class="bi bi-arrow-left"></i> &nbsp;&nbsp; Daftar Program
                                </a>
                                @foreach($majors as $major)
                                    <a href="{{ route('majors.show', $major->id) }}" class="dropdown-item {{ Request::routeIs('majors.show', $major->id) ? 'active' : '' }}">
                                        {{ $major->name }}
                                    </a>
                                @endforeach
                            </div>
                        </div> --}}
                        <div class="nav-item dropdown animated fadeInLeft">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-chalkboard-teacher"></i> Program</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ route('bkk') }}" class="dropdown-item">BKK Lensa</a>
                                <a href="{{ route('tc') }}" class="dropdown-item">Teaching Factory</a>
                                <a href="{{ route('pkl') }}" class="dropdown-item">Praktek Kerja Industri</a>
                            </div>
                        </div>
                        <a href="{{ route('guest.news.index') }}" class="nav-item nav-link animated fadeInLeft"><i class="fas fa-newspaper"></i> Kabar Lensa</a>
                        <a href="{{ route('kontak') }}" class="nav-item nav-link animated fadeInLeft"><i class="fas fa-phone-alt"></i> Kontak Kami</a>
                    </div>
                </div>
            </nav>

            <div class="container-xxl bg-primary hero-header position-relative overflow-hidden">
                <!-- Optional Background Image -->
                <div class="hero-background" style="background-image: url('{{ asset('https://smklenterabangsa.sch.id/wp-content/uploads/2019/02/IMG-20190222-WA0002.jpg')}}'); background-size: cover; background-position: center; position: absolute; top: 0; left: 0; right: 0; bottom: 0; opacity: 0.3;"></div>
            
                <div class="container position-relative z-index-1">
                    <div class="row g-5 align-items-center animated animate__tada">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 display-4 animated fadeInLeft">
                                <span id="typed-text"></span><span class="cursor"></span> <!-- Teks yang diketik -->
                            </h1>
                            <p class="text-white pb-3 fs-5 animated fadeInUp">
                                Adalah Sebuah Sekolah Menengah Kejuruan (SMK) Yang Berada Di Kabupaten Karawang Jawa Barat, Indonesia
                            </p>
                            <a href="{{ route('kontak') }}" class="btn btn-outline-warning btn-lg animated fadeInUp delay-1s">
                                <i class="fas fa-envelope"></i> &nbsp;Hubungi Kami
                            </a>                            
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid border border-3 rounded border-light shadow animated fadeInRight" src="{{ asset('guest/img/profile/lb.jpeg') }}" alt="Foto Halaman SMK Lentera Bangsa">
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
        <div class="container-xxl py-6">
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
                                <h5 class="mb-3">Strategic Planning</h5>
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
                                <span>Kalian akan langsung berkenalan dengan dunia kerja untuk mengasah kompetensi melalui Praktek Kerja Industri.</span>
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
                                <h5 class="mb-3">Financial Analysis</h5>
                                <span>Gedung representatif guna menunjang kegiatan belajar mengajar yang dilengkapi dengan fasilitas laboratorium dan bengkel kerja untuk praktek.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" data-aos="fade-up">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-balance-scale fa-2x"></i>
                                </div>
                            </div>
                            <div class="p-5" data-bs-toggle="modal" data-bs-target="#legal">
                                <h5 class="mb-3">Legal Advisory</h5>
                                <span>SMK LENTERA BANGSA akan memberikan beasiswa bagi kalian yang berprestasi dalam bidang akademik.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->



        <!-- Features Start -->
        <div class="container-xxl py-6 bg-light position-relative overflow-hidden">
            <div class="floating-bg-shapes"></div> <!-- Abstract floating shapes in background -->
            <div class="container position-relative">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="d-inline-block border rounded-pill text-white bg-primary px-4 mb-3" data-aos="slide-right">VISI & MISI LENSA</div>
                        <h2 class="mb-4" data-aos="slide-up">MISI</h2>
                        <p class="lead" data-aos="slide-up">Mewujudkan sekolah yang berprestasi berdasarkan iman dan taqwa.</p>
                    </div>
                    <div class="col-lg-7">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                            <h2 class="mb-4" data-aos="slide-up">VISI</h2>
                        </div>
                        <div class="row g-4">
                            <div class="col-sm-6 wow fadeInUp" data-aos="slide-right" data-wow-delay="0.3s">
                                <div class="card shadow-sm h-100 border-0 animated-card">
                                    <div class="card-body text-center">
                                        <div class="btn-square bg-primary rounded-circle mb-3 mx-auto p-3 floating-icon">
                                            <i class="bi bi-star-fill text-white" style="font-size: 21px;"></i>
                                        </div>
                                        <h6 class="fw-bold">Bertaqwa terhadap Tuhan Yang Maha Esa</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeInUp" data-aos="slide-right" data-wow-delay="0.4s">
                                <div class="card shadow-sm h-100 border-0 animated-card">
                                    <div class="card-body text-center">
                                        <div class="btn-square bg-primary rounded-circle mb-3 mx-auto p-3 floating-icon">
                                            <i class="bi bi-heart-fill text-white" style="font-size: 21px;"></i>
                                        </div>
                                        <h6 class="fw-bold">Berbudi pekerti luhur</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeInUp" data-aos="slide-right" data-wow-delay="0.5s">
                                <div class="card shadow-sm h-100 border-0 animated-card">
                                    <div class="card-body text-center">
                                        <div class="btn-square bg-primary rounded-circle mb-3 mx-auto p-3 floating-icon">
                                            <i class="bi bi-person-check-fill text-white" style="font-size: 21px;"></i>
                                        </div>
                                        <h6 class="fw-bold">Terampil, mandiri, dan memiliki daya saing</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeInUp" data-aos="slide-right" data-wow-delay="0.6s">
                                <div class="card shadow-sm h-100 border-0 animated-card">
                                    <div class="card-body text-center">
                                        <div class="btn-square bg-primary rounded-circle mb-3 mx-auto p-3 floating-icon">
                                            <i class="bi bi-book-fill text-white" style="font-size: 21px;"></i>
                                        </div>
                                        <h6 class="fw-bold">Memiliki wawasan yang luas</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->

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
                    <a target="_blank" href="https://www.astra-honda.com/">
                        <img class="img-fluid" src="{{ asset('guest/img/company/astra.jpg') }}" alt="logo Astra Honda Motor">
                    </a>
                    <a target="_blank" href="https://www.axiooworld.com/?gad_source=1&gclid=Cj0KCQjw99e4BhDiARIsAISE7P9hBxwHw77BjeKqE78yqfKXW-Ao9b9taTGgJ5svUhHk0UxUY4XIeWcaAt6aEALw_wcB">
                        <img class="img-fluid" src="{{ asset('guest/img/company/axioo.png') }}" alt="Logo Axioo">
                    </a>
                    <a target="_blank" href="https://inovindo.co.id/">
                        <img class="img-fluid" src="{{ asset('guest/img/company/inovindo.png') }}" alt="Logo Inovindo">
                    </a>
                    <a target="_blank" href="https://www.bankbjb.co.id/">
                        <img class="img-fluid" src="{{ asset('guest/img/company/bjb.png') }}" alt="Logo Bank Jabar Banten">
                    </a>
                    <a target="_blank" href="https://www.astra-daihatsu.id/getAdvised/newCar?productCode=AYLA&utm_source=google&utm_medium=cpc&utm_campaign=pmax_dso_sales-marketing_ayla&utm_term=&network=x&matchtype=&adposition=&device=c&gad_source=1&gclid=Cj0KCQjw99e4BhDiARIsAISE7P81WGGov8wH1gIoc4a9NEcAMxPWo4PmWlWIs8fVBk_32R-bn-dNeAgaAqxFEALw_wcB">
                        <img class="img-fluid" src="{{ asset('guest/img/company/daihatsu.png') }}" alt="Logo Daihatsu">
                    </a>
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

        <!-- Business Research Modal -->
        <div class="modal fade" id="bisnis" tabindex="-1" aria-labelledby="bisnisLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <i class="fa fa-user-tie fa-2x me-2" aria-hidden="true"></i>
                        <h5 class="modal-title" id="bisnisLabel">Business Research</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Dalam program Business Research, kalian akan diajarkan metode dan strategi penelitian bisnis yang relevan untuk mempersiapkan diri di dunia industri.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Strategic Planning Modal -->
        <div class="modal fade" id="strategi" tabindex="-1" aria-labelledby="strategiLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <i class="fa fa-chart-line fa-2x me-2" aria-hidden="true"></i>
                        <h5 class="modal-title" id="strategiLabel">Strategic Planning</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Program ini memberikan wawasan tentang perencanaan strategis untuk mengembangkan kemampuan kewirausahaan kalian.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Market Analysis Modal -->
        <div class="modal fade" id="pasar" tabindex="-1" aria-labelledby="pasarLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <i class="fa fa-chart-pie fa-2x me-2" aria-hidden="true"></i>
                        <h5 class="modal-title" id="pasarLabel">Market Analysis</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Kalian akan mempelajari bagaimana melakukan analisis pasar dan pengaruhnya terhadap keputusan bisnis.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Financial Analysis Modal -->
        <div class="modal fade" id="analisa" tabindex="-1" aria-labelledby="analisaLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <i class="fa fa-chart-area fa-2x me-2" aria-hidden="true"></i>
                        <h5 class="modal-title" id="analisaLabel">Financial Analysis</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Dalam program ini, kalian akan mempelajari bagaimana menganalisis kondisi keuangan sebuah perusahaan.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Legal Advisory Modal -->
        <div class="modal fade" id="legal" tabindex="-1" aria-labelledby="legalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <i class="fa fa-balance-scale fa-2x me-2" aria-hidden="true"></i>
                        <h5 class="modal-title" id="legalLabel">Legal Advisory</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Program Legal Advisory membantu kalian memahami aspek hukum dalam bisnis dan memberikan bimbingan dalam bidang hukum.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>


        


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
    <script src="{{ asset('guest/js/footer.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- Template Javascript -->
    <script src="{{ asset('guest/js/main.js') }}"></script>
    <script>
        const modals = document.querySelectorAll('.modal');
        modals.forEach(modal => {
            modal.addEventListener('show.bs.modal', function () {
                console.log(`${this.id} is opened`);
                // You can add more interactive features here
            });
        });
    </script>

<script>
    var typed = new Typed('#typed-text', {
        strings: ["SMK Lentera Bangsa Karawang"], // Teks yang akan diketik
        typeSpeed: 150,  // Kecepatan mengetik
        backSpeed: 50,   // Kecepatan menghapus
        backDelay: 2000, // Jeda sebelum mulai menghapus
        startDelay: 1000, // Jeda sebelum mulai mengetik pertama kali
        loop: true,      // Agar teks terus diulang
        showCursor: true, // Tampilkan kursor kedip
        cursorChar: '|',  // Karakter kursor
    });
</script>
    
    

</body>

</html>