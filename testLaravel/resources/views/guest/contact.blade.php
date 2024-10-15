@extends('layout.template')

@section('title', 'Kontak')

@section('content')
<div class="container-xxl py-6">
    <div class="container">
        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <div class="d-inline-block border rounded-pill text-primary px-4 mb-3 bg-light shadow-sm">Punya Pertanyaan Tentang LENSA?</div>
            <h2 class="mb-5">Apa Yang Mau Kamu Tanyakan Tentang LENSA?</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="card p-4 shadow">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                    <label for="name">Nama Kamu</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required onkeyup="showGravatar()">
                                    <label for="email">Email Kamu</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" name="title" placeholder="Subject" maxlength="50" required>
                                    <label for="subject">Tentang Apa Yang Ingin Kamu Tanyakan?</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 150px" required></textarea>
                                    <label for="message">Pesan kamu</label>
                                </div>
                            </div>

                            <!-- Gravatar Image Section -->
                            <div class="col-12 text-center">
                                <img id="gravatarImage" src="" alt="Gravatar" class="img-fluid rounded-circle mb-3" style="display: none; width: 100px; height: 100px;">
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Kirim Pesan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Include the CryptoJS library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>

<script>
    function showGravatar() {
        const email = document.getElementById('email').value.trim().toLowerCase();
        const gravatarUrl = email ? 'https://www.gravatar.com/avatar/' + md5(email) + '?s=200&d=mp' : '';
        const gravatarImage = document.getElementById('gravatarImage');
        
        // Show the Gravatar image if the email is valid
        if (email) {
            gravatarImage.src = gravatarUrl;
            gravatarImage.style.display = 'block';
        } else {
            gravatarImage.style.display = 'none'; // Hide the image if the email is empty
        }
    }

    function md5(string) {
        return CryptoJS.MD5(string).toString(); // Use the CryptoJS MD5 function
    }
</script>
@endsection