@extends('layout.template')

@section('title', 'Kabar Lensa')

@section('content')
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 posts-list">
            @if ($news->isEmpty())
                <div class="col-12 text-center">
                    <p class="text-muted">Tidak ada berita yang ditemukan.</p> <!-- Pesan not found -->
                </div>
            @else
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
            @endif
        </div>

        <!-- Pagination -->
        @if ($news->isNotEmpty())
            <div class="mt-4">
                {{ $news->links() }} <!-- This will render the pagination links -->
            </div>
        @endif
    </div>
@endsection
