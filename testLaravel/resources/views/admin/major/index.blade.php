@extends('layout/admintemplate')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Bordered table</h4>
        <a href="{{route('major.create')}}" class="btn-sm btn btn-primary">Tambah Data</a>
        <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th> # </th>
                <th> Kode </th>
                <th> Nama </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($majors as $major)
                <tr>
                  <td> 1 </td>
                  <td> {{ $major->code }} </td>
                  <td> {{ $major->name }} </td>
                  <td>
                    <a href="{{ route('major.show', $major->id)}}" class="btn-sm btn btn-info"> Details</a>
                    <a href="" class="btn-sm btn btn-warning">Edit</a>
                    <a href="" class="btn-sm btn btn-danger">Delete</a>
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
