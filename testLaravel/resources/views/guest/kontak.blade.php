@extends('layout/template')

@section('title', 'Kontak')

@section('content')
<div class="container-xxl py-6">
    <div class="container">
        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Punya Pertanyaan Tentang LENSA?</div>
            <h2 class="mb-5">Apa Yang Mau Kamu Tanyakan Tentang LENSA?</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                <label for="name">Nama Kamu</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                                <label for="email">Email Kamu</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subject" placeholder="Subject" maxlength="50">
                                <label for="subject">Tentang Apa Yang Ingin Kamu Tanyakan?</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                <label for="message">Pesan kamu</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Kirim Pesan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection