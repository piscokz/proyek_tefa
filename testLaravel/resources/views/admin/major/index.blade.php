@extends('layout.admintemplate')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-primary">Daftar Program Keahlian</h4>

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="table table-striped table-bordered">
                        <thead class="table-primary">
                            <tr>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Gambar</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($majors as $major)
                                <tr>
                                    <td>{{ $major->code }}</td>
                                    <td>{{ $major->name }}</td>
                                    <td>
                                        <img src="{{ asset($major->image) }}" alt="image" class="img-thumbnail" width="50">
                                    </td>
                                    <td>{{ Str::limit($major->description, 50) }}</td>
                                    <td>
                                        <a href="{{ route('major.show', $major->id) }}" class="btn btn-info btn-sm" title="Details">
                                            <i class="bi bi-eye"></i> Details
                                        </a>
                                        <a href="{{ route('major.edit', $major->id) }}" class="btn btn-warning btn-sm" title="Edit">
                                            <i class="bi bi-pencil"></i> Edit
                                        </a>
                                        <form action="{{ route('major.destroy', $major->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                <i class="bi bi-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Check if $majors is indeed a paginator -->
                    @if($majors instanceof \Illuminate\Pagination\LengthAwarePaginator)
                        <div class="d-flex justify-content-center">
                            {{ $majors->links() }} <!-- Pagination links -->
                        </div>
                    @else
                        <br>
                        <p>No pages found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
