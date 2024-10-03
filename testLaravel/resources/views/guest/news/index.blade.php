@extends('layout.template')

@section('title', 'Kabar Lensa')

@section('content')
    <h1>Kabar Berita Terbaru</h1>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 posts-list">
            @foreach ($news as $item)
                <div class="col-xl-4 col-md-6">
                    <div class="post-item position-relative h-100">
                        <div class="post-img position-relative overflow-hidden wow fadeInUp">
                            <a href="{{ route('guest.news.show', $item->id) }}">
                                <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid" alt="">
                            </a>
                            <br>
                            <br>
                            <span class="post-date">{{ $item->created_at->format('F j') }}</span>
                            <br>
                        </div>

                        <div class="post-content d-flex flex-column">
                            <h3 class="post-title wow fadeInUp">{{ $item->title }}</h3>
                            <p class="wow fadeInUp">{{ Str::limit($item->content, 150) }}</p>
                            <hr>
                            <a href="{{ route('guest.news.selengkapnya', $item->id) }}" class="readmore stretched-link wow fadeInUp">
                                <span>Selengkapnya</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-4">
            {{ $news->links() }}
        </div>
    </div>
@endsection
