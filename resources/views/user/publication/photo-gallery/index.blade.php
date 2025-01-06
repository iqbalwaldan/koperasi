@extends('user.layout.index')

@section('main')
    <main class="main">
        <section class="media__container mt-3 mb-3">
            <div class="gallery__grid">
                @foreach ($photoGallerys as $photoGallery)
                    <article class="card gallery__grid-item">
                        <a href="galeri-foto/{{ $photoGallery->slug }}">
                            <figure class="gallery__figure">
                                <img src="{{ $photoGallery->image_url }}" alt="news" width="800px" height="600px">
                            </figure>
                        </a>
                        <div class="figure__description">
                            <p>{{ $photoGallery->date_news }}</p>
                            <a href="galeri-foto/{{ $photoGallery->slug }}">
                                <h2>{{ $photoGallery->title }}</h2>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>
    </main>
@endsection
