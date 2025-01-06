@extends('user.layout.index')

@section('main')
<main class="main">
    <div class="media__container">
        @if ($organizationalStructure)
        <section class="organizational-structure card my-3 overflow-hidden">
            <figure>
                {{-- <img src="{{ $organizationalStructure->image_url }}" alt="Struktur Organisasi" width="800" height="600"> --}}
                <img src="{{ asset('assets/img/struktur-organisasi-new.jpg') }}" alt="Struktur Organisasi" width="800" height="600">
            </figure>
        </section>
        @endif
    </div>
</main>
@endsection