<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SMK LENTERA BANGSA - SEKOLAH BINAAN ASTRA HONDA MOTOR</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('guest/img/logo/logo.png')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('guest/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('guest/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('guest/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('guest/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('guest/css/style2.css')}}" rel="stylesheet">
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
                <img src="{{ asset('guest/img/logo/logo.png')}}" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ route('beranda')}}" class="nav-item nav-link">Beranda</a>
                    <a href="{{ route('tentang')}}" class="nav-item nav-link">Tentang</a>
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
                    <a href="{{ route('kabarlensa')}}" class="nav-item nav-link active">Kabar Lensa</a>
                    <a href="{{ route('kontak')}}" class="nav-item nav-link">kontak</a>
                </div>
            </div>
        </nav>

            <div class="container-xxl bg-primary page-header">
                <div class="container text-center">
                    <h1 class="text-white animated zoomIn mb-3">Kabar Lensa</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="index.html">Beranda</a></li>
                            <li class="breadcrumb-item"><a class="text-white">Kabar Lensa</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        <!-- Navbar & Hero End -->


        <!-- 404 Start -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
      
              <div class="row gy-4 posts-list">
      
                <div class="col-xl-4 col-md-6">
                  <div class="post-item position-relative h-100">
      
                    <div class="post-img position-relative overflow-hidden wow fadeInUp">
                        <a href="kabardetail.html"><img src="{{ asset('guest/img/jurusan/dojo.jpg')}}" class="img-fluid" alt=""></a>
                        <br>
                        <br>
                        <span class="post-date">March 19</span>
                        <br>
                      </div>
      
                    <div class="post-content d-flex flex-column">
      
                      <h3 class="post-title wow fadeInUp">Peresmian Dojo Center SMK Lentera Bangsa</h3>
      
                      <p class="wow fadeInUp">
                        Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et
                        laboriosam eius aut nostrum quidem aliquid dicta.
                      </p>
      
                      <hr>
      
                      <a href="kabardetail.html" class="readmore stretched-link wow fadeInUp"><span>Selengkapnya</span><i
                          class="bi bi-arrow-right"></i></a>
      
                    </div>
      
                  </div>
                </div>
                <div class="col-xl-4 col-md-6">
                  <div class="post-item position-relative h-100">
      
                    <div class="post-img position-relative overflow-hidden wow fadeInUp">
                        <a href="kabardetail.html"><img src="{{ asset('guest/img/jurusan/dojo.jpg')}}" class="img-fluid wow fadeInUp" alt=""></a>
                      <br>
                      <br>
                      <span class="post-date wow fadeInUp">December 12</span>
                      <br>
                    </div>
      
                    <div class="post-content d-flex flex-column">
      
                      <h3 class="post-title wow fadeInUp">Peresmian Dojo Center SMK Lentera Bangsa</h3>
      
                      <p class="wow fadeInUp">
                        Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et
                        laboriosam eius aut nostrum quidem aliquid dicta.
                      </p>
      
                      <hr>
      
                      <a href="kabardetail.html" class="readmore stretched-link wow fadeInUp"><span>Selengkapnya</span><i
                          class="bi bi-arrow-right"></i></a>
      
                    </div>
      
                  </div>
                </div>
                <div class="col-xl-4 col-md-6">
                  <div class="post-item position-relative h-100">
      
                    <div class="post-img position-relative overflow-hidden wow fadeInUp">
                        <a href="kabardetail.html"><img src="{{ asset('guest/img/jurusan/dojo.jpg')}}" class="img-fluid wow fadeInUp" alt=""></a>
                      <br>
                      <br>
                      <span class="post-date wow fadeInUp">December 12</span>
                      <br>
                    </div>
      
                    <div class="post-content d-flex flex-column">
      
                      <h3 class="post-title wow fadeInUp">Peresmian Dojo Center SMK Lentera Bangsa</h3>
      
                      <p class="wow fadeInUp">
                        Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et
                        laboriosam eius aut nostrum quidem aliquid dicta.
                      </p>
      
                      <hr>
      
                      <a href="kabardetail.html" class="readmore stretched-link wow fadeInUp"><span>Selengkapnya</span><i
                          class="bi bi-arrow-right"></i></a>
      
                    </div>
      
                  </div>
                </div>
                <div class="col-xl-4 col-md-6">
                  <div class="post-item position-relative h-100">
      
                    <div class="post-img position-relative overflow-hidden wow fadeInUp">
                        <a href="kabardetail.html"><img src="{{ asset('guest/img/jurusan/dojo.jpg')}}" class="img-fluid wow fadeInUp" alt=""></a>
                      <br>
                      <br>
                      <span class="post-date wow fadeInUp">December 12</span>
                      <br>
                    </div>
      
                    <div class="post-content d-flex flex-column">
      
                      <h3 class="post-title wow fadeInUp">Peresmian Dojo Center SMK Lentera Bangsa</h3>
      
                      <p class="wow fadeInUp">
                        Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et
                        laboriosam eius aut nostrum quidem aliquid dicta.
                      </p>
      
                      <hr>
      
                      <a href="kabardetail.html" class="readmore stretched-link wow fadeInUp"><span>Selengkapnya</span><i
                          class="bi bi-arrow-right"></i></a>
      
                    </div>
      
                  </div>
                </div>
                <div class="col-xl-4 col-md-6">
                  <div class="post-item position-relative h-100">
      
                    <div class="post-img position-relative overflow-hidden wow fadeInUp">
                        <a href="kabardetail.html"><img src="{{ asset('guest/img/jurusan/dojo.jpg')}}" class="img-fluid wow fadeInUp" alt=""></a>
                      <br>
                      <br>
                      <span class="post-date wow fadeInUp">December 12</span>
                      <br>
                    </div>
      
                    <div class="post-content d-flex flex-column">
      
                      <h3 class="post-title wow fadeInUp">Peresmian Dojo Center SMK Lentera Bangsa</h3>
      
                      <p class="wow fadeInUp">
                        Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et
                        laboriosam eius aut nostrum quidem aliquid dicta.
                      </p>
      
                      <hr>
      
                      <a href="kabardetail.html" class="readmore stretched-link wow fadeInUp"><span>Selengkapnya</span><i
                          class="bi bi-arrow-right"></i></a>
      
                    </div>
      
                  </div>
                </div>
                <div class="col-xl-4 col-md-6">
                  <div class="post-item position-relative h-100">
      
                    <div class="post-img position-relative overflow-hidden wow fadeInUp">
                        <a href="kabardetail.html"><img src="{{ asset('guest/img/jurusan/dojo.jpg')}}" class="img-fluid wow fadeInUp" alt=""></a>
                      <br>
                      <br>
                      <span class="post-date wow fadeInUp">December 12</span>
                      <br>
                    </div>
      
                    <div class="post-content d-flex flex-column">
      
                      <h3 class="post-title wow fadeInUp">Peresmian Dojo Center SMK Lentera Bangsa</h3>
      
                      <p class="wow fadeInUp">
                        Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et
                        laboriosam eius aut nostrum quidem aliquid dicta.
                      </p>
      
                      <hr>
                      <a href="kabardetail.html" class="readmore stretched-link wow fadeInUp"><span>Selengkapnya</span><i
                          class="bi bi-arrow-right"></i></a>
                    </div>
      
                  </div>
                </div>
                <!-- End post list item -->

              </div><!-- End blog posts list -->              <!-- End blog pagination -->
      
            </div>
          </section>
        <!-- 404 End -->
        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                        <h5 class="text-white mb-4">KAMPUS UTAMA</h5>
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
    <script src="{{ asset('guest/lib/wow/wow.min.js')}}"></script>
    <script src="{{ asset('guest/lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('guest/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{asset('guest/js/main.js')}}"></script>
</body>

</html>