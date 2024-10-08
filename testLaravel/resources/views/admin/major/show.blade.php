@extends('layout/admintemplate')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    @if ($major)
                        <h4 class="card-title">{{ $major->name }}</h4>

                        <div class="mb-3">
                            <img src="{{ asset($major->image) }}" alt="image" class="img-thumbnail" style="max-width: 300px;">
                        </div>

                        <p><strong>Kode Program Keahlian:</strong> {{ $major->code }}</p>
                        <p><strong>Deskripsi:</strong></p>
                        <p>{{ $major->description }}</p>
                        
                        <a href="{{ route('major.index') }}" class="btn btn-primary">Kembali ke Daftar</a>
                    @else
                        <h4 class="card-title">Program keahlian tidak ditemukan.</h4>
                        <a href="{{ route('major.index') }}" class="btn btn-primary">Kembali ke Daftar</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
