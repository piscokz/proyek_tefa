@extends('layout.template')

@section('title', 'Daftar Program Keahlian')

@section('content')
<div class="container-xxl py-6">
    <div class="container text-center">
        <h4 class="mb-5">Daftar Program Keahlian</h4>
        <div class="row">
            @foreach($majors as $major)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <img src="{{ asset($major->image) }}" class="card-img-top" alt="{{ $major->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $major->name }}</h5>
                            <p class="card-text">{{ Str::limit($major->description, 100) }}</p>
                            <a href="{{ route('majors.show', $major->id) }}" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
