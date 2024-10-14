@extends('layout.admintemplate')

@section('title', 'Kelola Berita')

@section('content')
<div class="container mt-4">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card shadow-sm">
            <div class="card-body text-center">
                <h4 class="card-title mb-4 text-primary">Daftar Berita</h4>
                <a href="{{ route('admin.news.create') }}" class="btn btn-primary mb-3">
                    <i class="bi bi-plus-circle"></i> Tambah Berita
                </a>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if($news->isEmpty())
                    <div class="alert alert-warning" role="alert">
                        Tidak ada berita yang ditemukan.
                    </div>
                @else
                    <div class="table-responsive pt-3">
                        <table class="table table-hover table-bordered text-center align-middle">
                            <thead class="table-primary">
                                <tr>
                                    <th>#</th>
                                    <th>Judul</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($news as $item)
                                <tr class="table-row" style="cursor: pointer;">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td class="d-flex justify-content-center">
                                        <a href="{{ route('admin.news.show', $item->id) }}" class="btn btn-info btn-sm me-2" title="Details">
                                            <i class="bi bi-eye"></i> Details
                                        </a>
                                        <a href="{{ route('admin.news.edit', $item->id) }}" class="btn btn-warning btn-sm me-2" title="Edit">
                                            <i class="bi bi-pencil-square"></i> Edit
                                        </a>
                                        <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this news?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                                <i class="bi bi-trash"></i> Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
