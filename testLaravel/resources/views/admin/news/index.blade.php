@extends('layout.admintemplate')

@section('title', 'Kelola Berita')

@section('content')
<div class="container mt-4">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="card-title text-primary mb-0">Daftar Berita</h4>
                    <a href="{{ route('admin.news.create') }}" class="btn btn-success">
                        <i class="bi bi-plus-circle"></i> Tambah Berita
                    </a>
                </div>

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if($news->isEmpty())
                    <div class="alert alert-warning text-center" role="alert">
                        Tidak ada berita yang ditemukan.
                    </div>
                @else
                    <!-- Form Pencarian -->
                    <form action="{{ route('admin.news.search') }}" method="GET" class="mb-4">
                        <div class="input-group">
                            <input type="text" name="query" class="form-control" placeholder="Cari berita..." required>
                            <button class="btn btn-outline-primary" type="submit">
                                <i class="bi bi-search"></i> Cari
                            </button>
                        </div>
                    </form>

                    <div class="table-responsive pt-3">
                        <table class="table table-striped table-bordered text-center align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Judul</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($news as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td class="d-flex justify-content-center">
                                        <a href="{{ route('admin.news.show', $item->id) }}" class="btn btn-info btn-sm me-2" title="Details">
                                            <i class="bi bi-eye"></i> Detail
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

                    <!-- Pagination -->
                    <div class="mt-4">
                        {{ $news->links() }} <!-- Tambahkan paginasi -->
                    </div>

                @endif
            </div>
        </div>
    </div>
</div>
@endsection