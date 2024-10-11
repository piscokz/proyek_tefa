<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-4" data-aos="fade-right" data-aos-delay="100">
                <h5 class="text-white mb-4">KAMPUS UTAMA <i class="fa fa-school text-white"></i></h5>
                <hr class="bg-light">
                <p><i class="fa fa-map-marker-alt me-3"></i>JL. Proklamasi, Bakan Jati Gg Asem, Karyasari Rengasdengklok, Karawang, Jawa Barat 41352</p>
                <p><i class="fa fa-phone-alt me-3"></i>+62 857-1132-5040</p>
                <p><i class="fa fa-envelope me-3"></i>smklenterabangsa@yahoo.co.id</p>
                <div class="d-flex pt-2 social-icons">
                    <a class="btn btn-outline-light me-2 social-link" href="https://www.facebook.com/smklenterabangsa/?_rdc=1&_rdr" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light me-2 social-link" href="https://www.instagram.com/lenterabangsa.id/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light me-2 social-link" href="https://www.youtube.com/watch?v=1b1NTGOx-lY#:~:text=Direksi:%20Ahmad%20JaelaniTalent%20:Endang%20Lasmana,%20SEMuhamad" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light me-2 social-link" href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light me-2 social-link" href="https://wa.me/6285711325040" target="_blank"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-right" data-aos-delay="200">
                <h5 class="text-white mb-4">Quick Links</h5>
                <hr class="bg-light">
                <ul class="list-unstyled">
                    <li><a href="{{ route('beranda') }}" class="text-light {{ Request::routeIs('beranda') ? 'active' : '' }}"><i class="fa fa-angle-right me-2"></i>Beranda</a></li>
                    <li><a href="{{ route('tentang') }}" class="text-light {{ Request::routeIs('tentang') ? 'active' : '' }}"><i class="fa fa-angle-right me-2"></i>Tentang Kami</a></li>
                    <li><a href="{{ route('majors.index') }}" class="text-light {{ Request::routeIs('majors.index') ? 'active' : '' }}"><i class="fa fa-angle-right me-2"></i>Keahlian</a></li>
                    <li><a href="#" class="text-light"><i class="fa fa-angle-right me-2"></i>Program</a></li>
                    <li><a href="{{ route('kontak') }}" class="text-light {{ Request::routeIs('kontak') ? 'active' : '' }}"><i class="fa fa-angle-right me-2"></i>Kontak</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-right" data-aos-delay="300">
                <h5 class="text-white mb-4">Layanan Kami</h5>
                <hr class="bg-light">
                <ul class="list-unstyled">
                    <li><a href="#" class="text-light"><i class="fa fa-angle-right me-2"></i>Pendaftaran</a></li>
                    <li><a href="#" class="text-light"><i class="fa fa-angle-right me-2"></i>Beasiswa</a></li>
                    <li><a href="{{ route('pkl') }}" class="text-light {{ Request::routeIs('pkl') ? 'active' : '' }}"><i class="fa fa-angle-right me-2"></i>Praktek Kerja Industri</a></li>
                    <li><a href="#" class="text-light"><i class="fa fa-angle-right me-2"></i>Ekstrakurikuler</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-2" data-aos="fade-right" data-aos-delay="400">
                <h5 class="text-white mb-4">Jam Kerja</h5>
                <hr class="bg-light">
                <p><i class="fa fa-clock me-2"></i>Senin - Jumat: 08.00 - 16.00</p>
                <p><i class="fa fa-clock me-2"></i>Sabtu: 08.00 - 12.00</p>
                <p><i class="fa fa-clock me-2"></i>Minggu: Tutup</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright text-center py-4" data-aos="fade-up" data-aos-delay="500">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">SMK Lentera Bangsa Karawang</a>, All Rights Reserved. 
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        Remastered By <a class="border-bottom" href="https://www.instagram.com/i.a.falathin/?__pwa=1">Ibrahim Ahmad Falathin</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->