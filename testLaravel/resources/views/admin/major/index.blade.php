@extends('layout.admintemplate')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-4 text-center">Daftar Program Keahlian</h4>
                        <a href="{{ route('major.create') }}" class="btn btn-primary mb-3">
                            <i class="bi bi-plus-circle"></i> Tambah Program
                        </a>
                    </div>

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-bordered">
                            <thead class="table-primary text-center">
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
                                        <td class="text-center">{{ $major->code }}</td>
                                        <td>{{ $major->name }}</td>
                                        <td class="text-center">
                                            <img src="{{ asset($major->image) }}" alt="image" class="img-thumbnail" width="50">
                                        </td>
                                        <td>{{ Str::limit($major->description, 50) }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('major.show', $major->id) }}" class="btn btn-info btn-sm me-1" title="Details">
                                                <i class="bi bi-eye"></i> Details
                                            </a>
                                            <a href="{{ route('major.edit', $major->id) }}" class="btn btn-warning btn-sm me-1" title="Edit">
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
                    </div>

                    <!-- Pagination Links -->
                    @if($majors instanceof \Illuminate\Pagination\LengthAwarePaginator)
                        <div class="d-flex justify-content-center mt-4">
                            {{ $majors->links() }}
                        </div>
                    @else
                        <p class="text-center">No pages found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
