@extends('layout/admintemplate')

@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-6 grid-margin stretch-card">
      <div class="card">
        <form class="forms-sample" action="{{ route('major.store') }}" method="POST" enctype="multipart/form-data">
          <div class="card-body">
            <h4 class="card-title">Program Keahlian</h4>
            <p class="card-description"> Tambah Data </p>
              <div class="form-group">
                <label for="name">Kode Program Keahlian</label>
                <input type="text" class="form-control" id="code" placeholder="Kode Program Keahlian" value=' {{$major->code}}' name="code">
                
              </div>
              <div class="form-group">
                <label for="name">Nama Program Keahlian</label>
                <input type="text" class="form-control" id="name" placeholder="Nama Program Keahlian" value=' {{$major->name}}' name="name">
                
              </div>
              <div class="form-group">
                <label for="description">Deskripsi Program Keahlian</label>
                <textarea class="form-control" id="description" rows="4" name="description">{{$major->description}}</textarea>
                
              </div>
            
              <a class="btn btn-light" href="{{route('major.index')}}">Cancel</a>
          </div>
        </form>
      </div>
    </div>
    <div class="col-6 grid-margin stretch-card">
        <div class="card">
            <img src="{{asset($major->image)}}" alt="{{asset($major->name)}}">
        </div>
    </div>
  </div>
</div>
@endsection