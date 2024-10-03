@extends('layout.admintemplate')

@section('title', 'Kelola Berita')

@section('content')
<div class="container">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body text-center"> <!-- Centering content -->
                
                <h4 class="card-title">Daftar Berita</h4>
                <a href="{{ route('admin.news.create') }}" class="btn btn-primary mb-3">Tambah Berita</a>
                <div class="table-responsive pt-3 mx-auto">
                    <table class="table table-bordered mx-auto"> <!-- Centering table -->
                        <thead>
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
                                    <a href="{{ route('admin.news.show', $item->id) }}" class="btn-sm btn btn-info">Details</a> <!-- Details Button -->
                                    <a href="{{ route('admin.news.edit', $item->id) }}" class="btn-sm btn btn-warning">Edit</a>
                                    <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-sm btn btn-danger">Hapus</button>
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
