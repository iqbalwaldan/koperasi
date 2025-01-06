@extends('user.layout.index')

@section('main')
    <main class="main">
        <div class="media__container">
            <div class="card my-3 p-3">
                <h2 class="my-3" style="color: black; text-align: center; font-weight: 600; font-size: 1.7rem;">
                    KATALOG PRODUK UMKM KABUPATEN SUMENEP
                </h2>
                <div class="gallery-detail__grid my-3">
                    {{-- @foreach ($showPhotoGallery->image_url as $image) --}}
                    <figure class="border shadow">
                        <img src="{{ asset('assets/img/umkm/1.jpg') }}" alt="news" width="770px" height="552px">
                    </figure>
                    <figure class="border shadow">
                        <img src="{{ asset('assets/img/umkm/2.jpg') }}" alt="news" width="770px" height="552px">
                    </figure>
                    <figure class="border shadow">
                        <img src="{{ asset('assets/img/umkm/3.jpg') }}" alt="news" width="770px" height="552px">
                    </figure>
                    <figure class="border shadow">
                        <img src="{{ asset('assets/img/umkm/1.jpg') }}" alt="news" width="770px" height="552px">
                    </figure>
                    <figure class="border shadow">
                        <img src="{{ asset('assets/img/umkm/2.jpg') }}" alt="news" width="770px" height="552px">
                    </figure>
                    <figure class="border shadow">
                        <img src="{{ asset('assets/img/umkm/3.jpg') }}" alt="news" width="770px" height="552px">
                    </figure>
                    <figure class="border shadow">
                        <img src="{{ asset('assets/img/umkm/1.jpg') }}" alt="news" width="770px" height="552px">
                    </figure>
                    <figure class="border shadow">
                        <img src="{{ asset('assets/img/umkm/2.jpg') }}" alt="news" width="770px" height="552px">
                    </figure>
                    <figure class="border shadow">
                        <img src="{{ asset('assets/img/umkm/3.jpg') }}" alt="news" width="770px" height="552px">
                    </figure>
                    {{-- @endforeach --}}
                </div>
            </div>
        </div>
    </main>
@endsection
