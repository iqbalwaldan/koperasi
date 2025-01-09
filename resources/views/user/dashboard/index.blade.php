@extends('user.layout.index')

@section('main')
    <main class="main">
        <div class="media__container">
            <div class="main__flash-news card w-100 mt-3">
                <div class="flash-news__header">
                    <h2>Flash News</h2>
                </div>
                <marquee class="main__flash-news-list" behavior="scroll" direction="left" {{-- onmouseover="this.stop();" onmouseout="this.start();" --}}>
                    @foreach ($flashNewses as $flashNews)
                        <a href="{{ $flashNews->newsTag->slug }}/{{ $flashNews->slug }}">{{ $flashNews->title }} |</a>
                    @endforeach
                </marquee>
            </div>

            <section class="main__hot-news-card card w-100 mt-3">
                <div class="owl-carousel owl-theme">
                    @foreach ($hotNewses as $hotNews)
                        <article class="main__hot-news">
                            <a href="/publikasi/galeri-foto/{{ $hotNews->slug }}">
                                <div class="hot-news-container">
                                    <figure>
                                        <img src="{{ $hotNews->image_url }}" alt="news" width="800px" height="600px">
                                    </figure>
                                    <div class="caption-container">
                                        <h2>{{ $hotNews->title }}</h2>
                                        <p class="link">Baca Selengkapnya...</p>
                                    </div>
                                </div>
                            </a>
                        </article>
                    @endforeach
                    {{-- <article class="main__hot-news">
                        <a href="">
                            <div class="hot-news-container">
                                <figure>
                                    <img src="{{ asset('assets/img/news/2.jpeg') }}" alt="news" width="770px"
                                        height="552px">
                                </figure>
                                <div class="caption-container">
                                    <h2>Bupati Karawang Aep Syaepulloh meraih penghargaan Jasa Bakti Koperasi dan UMKM
                                        Kategori
                                        Pejabat Negara dari Kementerian Koperasi dan UKM Republik Indonesia.</h2>
                                    <p class="link">Baca Selengkapnya...</p>
                                </div>
                            </div>
                        </a>
                    </article> --}}
                </div>
                <button class="main__hot-news-prev"><i class="fa-solid fa-chevron-left"></i></button>
                <button class="main__hot-news-next"><i class="fa-solid fa-chevron-right"></i></button>
            </section>

            <section class="main__program card my-3 p-4">
                <h2>LAYANAN KAMI</h2>
            <p>
                Berkomitmen untuk mendukung pertumbuhan ekonomi lokal, kami menawarkan berbagai program unggulan yang
                dirancang untuk menguatkan dan memberdayakan usaha kecil dan menengah. Dari pembinaan hingga distribusi,
                setiap program kami dirancang untuk membantu Anda mencapai kesuksesan yang berkelanjutan.
            </p>
            <div class="program-container">
                <div class="program-list card border">
                    <figure class="figure-program-list">
                        <img src="{{ asset('assets/img/2.png') }}" alt="">
                    </figure>
                    <h3>Bidang Perdagangan</h3>
                    {{-- <p>Merupkan sebuah program untuk membantu pelaku usaha dalam proses perdaganan</p> --}}
                    <div class="overlay">
                        {{-- <h3>Bidang Perdagangan</h3> --}}
                        <p>Kegiatan jual beli barang atau jasa yang berfungsi sebagai penghubung antara produsen dan konsumen untuk memenuhi kebutuhan pasar.</p>
                        <a class="program-link" href="{{ route('service-detail', ['slug' => 'bidang-perdagangan']) }}">Lihat Program</a>
                    </div>
                </div>
                <div class="program-list card border">
                    <figure class="figure-program-list">
                        <img src="{{ asset('assets/img/3.png') }}" alt="">
                    </figure>
                    <h3>Bidang Perindustrian</h3>
                    {{-- <p>Merupkan sebuah program untuk membantu pelaku usaha dalam proses perdaganan</p> --}}
                    <div class="overlay">
                        {{-- <h3>Bidang Perindustrian</h3> --}}
                        <p>Proses pengolahan bahan mentah menjadi barang jadi atau setengah jadi dengan memanfaatkan teknologi dan sumber daya.</p>
                        <a class="program-link" href="{{ route('service-detail', ['slug' => 'bidang-perindustrian']) }}">Lihat Program</a>
                    </div>
                </div>
                <div class="program-list card border">
                    <figure class="figure-program-list">
                        <img src="{{ asset('assets/img/4.png') }}" alt="">
                    </figure>
                    <h3>Bidang Pemberdayaan Koperasi dan Usaha Mikro</h3>
                    {{-- <p>Merupkan sebuah program untuk membantu pelaku usaha dalam proses perdaganan</p> --}}
                    <div class="overlay">
                        {{-- <h3>Bidang Pemberdayaan Koperasi dan Usaha Mikro</h3> --}}
                        <p>Usaha kecil dan menengah yang berperan penting dalam mendukung ekonomi lokal melalui penciptaan lapangan kerja dan inovasi.</p>
                        <a class="program-link" href="{{ route('service-detail', ['slug' => 'bidang-pemberdayaan-koperasi-dan-usaha-mikro']) }}">Lihat Program</a>
                    </div>
                </div>
                <div class="program-list card border">
                    <figure class="figure-program-list">
                        <img src="{{ asset('assets/img/5.png') }}" alt="">
                    </figure>
                    <h3>Bidang Perizinan, Kelembagaan, Pengawasan dan Pemeriksaan</h3>
                    {{-- <p>Merupkan sebuah program untuk membantu pelaku usaha dalam proses perdaganan</p> --}}
                    <div class="overlay">
                        {{-- <h3>Bidang Perizinan, Kelembagaan, Pengawasan dan Pemeriksaan</h3> --}}
                        <p>Merupkan sebuah program untuk membantu pelaku usaha dalam proses perdaganan</p>
                        <a class="program-link" href="{{ route('service-detail', ['slug' => 'bidang-perizinan-kelembagaan-pengawasan-dan-pemeriksaan']) }}">Lihat Program</a>
                    </div>
                </div>
                <div class="program-list card border">
                    <figure class="figure-program-list">
                        <img src="{{ asset('assets/img/6.png') }}" alt="">
                    </figure>
                    <h3>UPTD Pasar</h3>
                    {{-- <p>Merupkan sebuah program untuk membantu pelaku usaha dalam proses perdaganan</p> --}}
                    <div class="overlay">
                        {{-- <h3>UPTD Pasar</h3> --}}
                        <p>Merupkan sebuah program untuk membantu pelaku usaha dalam proses perdaganan</p>
                        <a class="program-link" href="{{ route('service-detail', ['slug' => 'uptd-pasar']) }}">Lihat Program</a>
                    </div>
                </div>
                <div class="program-list card border">
                    <figure class="figure-program-list">
                        <img src="{{ asset('assets/img/7.png') }}" alt="">
                    </figure>
                    <h3>UPTD Metrologi Legal</h3>
                    {{-- <p>Merupkan sebuah program untuk membantu pelaku usaha dalam proses perdaganan</p> --}}
                    <div class="overlay">
                        {{-- <h3>UPTD Metrologi Legal</h3> --}}
                        <p>Merupkan sebuah program untuk membantu pelaku usaha dalam proses perdaganan</p>
                        <a class="program-link" href="{{ route('service-detail', ['slug' => 'uptd-metrologi-legal']) }}">Lihat Program</a>
                    </div>
                </div>
            </div>
            </section>

            <div class="main__two-column mt-3 mb-3">
                <section class="two-column-card card w-100 d-flex flex-column justify-content-between">
                    <div class="d-flex flex-column gap-3">
                        <h2>{{ $title_list_article_1 }}</h2>
                        <div class="two-column-list">
                            @foreach ($list_article_1 as $article_1)
                                <article>
                                    <div class="two-column">
                                        <figure class="two-column-figure">
                                            <img src="{{ $article_1->image_url }}" alt="">
                                        </figure>
                                        <div class="two-column-list-detail">
                                            <a href="/publikasi/siaran-pers/{{ $article_1->slug }}">
                                                <h3>{{ $article_1->title }}</h3>
                                            </a>
                                            <p>
                                                {{ date('d-m-Y', strtotime($article_1->date_news)) }}
                                            </p>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                    <div class="two-column-link-container">
                        <a href="/publikasi/siaran-pers">Berita Lainnya<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </section>
                <section class="two-column-card card w-100 d-flex flex-column justify-content-between">
                    <div class="d-flex flex-column gap-3">
                        <h2>{{ $title_list_article_2 }}</h2>
                        <div class="two-column-list">
                            @foreach ($list_article_2 as $article_2)
                                <article>
                                    <div class="two-column">
                                        <figure class="two-column-figure">
                                            <img src="{{ $article_2->image_url }}" alt="">
                                        </figure>
                                        <div class="two-column-list-detail">
                                            <a href="/kegiatan/{{ $article_2->slug }}">
                                                <h3>{{ $article_2->title }}</h3>
                                            </a>
                                            <p>
                                                {{ date('d-m-Y', strtotime($article_2->date_news)) }}
                                            </p>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                    <div class="two-column-link-container">
                        <a href="/kegiatan">Berita Lainnya<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </section>
            </div>
        </div>
    </main>
@endsection
