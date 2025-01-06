@extends('user.layout.index')

@section('main')
    <main class="main">
        <section class="media__container mt-3 mb-3">
            <div class="card gallery-detail__container">
                @if ($showPhotoGallery) 
                {!! $showPhotoGallery->description !!}
                <div class="gallery-detail__grid">
                    @foreach ($showPhotoGallery->image_url as $image)
                    <figure>
                        <img src="{{ $image }}" alt="news" width="770px" height="552px">
                    </figure>
                    @endforeach
                    {{-- <figure>
                        <img src="{{ asset('assets/img/news/1.jpeg') }}" alt="news" width="770px" height="552px">
                    </figure>
                    <figure>
                        <img src="{{ asset('assets/img/news/1.jpeg') }}" alt="news" width="770px" height="552px">
                    </figure>
                    <figure>
                        <img src="{{ asset('assets/img/news/1.jpeg') }}" alt="news" width="770px" height="552px">
                    </figure>
                    <figure>
                        <img src="{{ asset('assets/img/news/1.jpeg') }}" alt="news" width="770px" height="552px">
                    </figure> --}}
                </div>
                @endif
            </div>
        </section>
    </main>
    {{-- <script>
        $(document).ready(function() {
            $('.page-title').attr('hidden', true);
        });
    </script> --}}
@endsection
