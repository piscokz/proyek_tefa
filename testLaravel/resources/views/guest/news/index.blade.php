@extends('layout.template')

@section('title', 'Kabar Lensa')

@section('content')
    <div class="container">
        <!-- Search Form -->
        <form action="{{ route('guest.news.search') }}" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" name="query" class="form-control" placeholder="Cari berita..." value="{{ request()->input('query') }}">
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
        </form>

        <div class="row gy-4 posts-list">
            @if ($news->isEmpty())
                <div class="col-12 text-center">
                    <p class="text-muted">Tidak ada berita yang ditemukan untuk pencarian: "{{ request()->input('query') }}"</p>
                </div>
            @else
                @foreach ($news as $item)
                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative">
                            <div class="post-img">
                                <a href="{{ route('guest.news.selengkapnya', $item->id) }}">
                                    <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid" alt="">
                                </a>
                                <span class="post-date">{{ $item->created_at->format('F j, Y') }}</span>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title">{{ $item->title }}</h3>
                                <p>{{ Str::limit($item->content, 150) }}</p>
                                <a href="{{ route('guest.news.selengkapnya', $item->id) }}" class="readmore">
                                    <span>Selengkapnya</span><i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

        @if ($news->isNotEmpty())
            <div class="mt-4">
                {{ $news->appends(['query' => request()->input('query')])->links() }}
            </div>
        @endif
    </div>
@endsection