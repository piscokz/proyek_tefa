@extends('layout.admintemplate')

@section('title', 'Kelola Berita')

@section('content')
<div class="container">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body text-center">
                <h4 class="card-title mb-4">Daftar Berita</h4>
                <a href="{{ route('admin.news.create') }}" class="btn btn-primary mb-3">
                    <i class="bi bi-plus-circle"></i> Tambah Berita
                </a>
                <div class="table-responsive pt-3 mx-auto">
                    <table class="table table-bordered mx-auto">
                        <thead class="table-primary">
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
                                <td>
                                    <a href="{{ route('admin.news.show', $item->id) }}" class="btn btn-info btn-sm me-1" title="Details">
                                        <i class="bi bi-eye"></i> Details
                                    </a>
                                    <a href="{{ route('admin.news.edit', $item->id) }}" class="btn btn-warning btn-sm me-1" title="Edit">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>
                                    <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this news?');">
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
            </div>
        </div>
    </div>
</div>
@endsection
