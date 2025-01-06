@extends('user.layout.index')

@section('main')
<main class="main">
    <section class="media__container mb-3">
        @foreach ($activitys as $news)
                <article class="card card-lg p-3 mt-3">
                    <div class="d-md-flex align-items-stretch gap-3">
                        <figure class="post-item-figure mb-3 mb-md-0 p-0 rounded overflow-hidden">
                            {{-- <img class="" src="{{ asset('assets/img/news/1.jpeg') }}" alt="news" width="770px"
                                height="552px"> --}}
                            <img class="" src="{{ $news->image_url }}" alt="news" width="800px" 
                            height="600px">
                        </figure>
                        <div class="p-0 post-item-description">
                            <div>
                                <h2 class="fs-5 fw-bold text-primary-1">{{ $news->title }}</h2>
                                <p class="post-item-caption text-default-1"> {{ $news->description }} </p>
                            </div>
                            <div>
                                <a href="/kegiatan/{{ $news->slug }}"
                                    class="d-flex align-items-center text-secondary-1">
                                    <p class="m-0">SELENGKAPNYA</p>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                                <hr>
                                <p class="m-0 text-default-1">
                                    <i class="fa-solid fa-calendar"></i>
                                    {{ date('d-m-Y', strtotime($news->date_news)) }}
                                </p>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
    </section>
</main>
@endsection