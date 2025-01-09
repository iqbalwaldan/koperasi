@extends('user.layout.index')

@section('main')
<main class="main">
    <div class="media__container">
        <section class="main__program card my-3">
            <h2>LAYANAN KAMI</h2>
            <p>
                Berkomitmen untuk mendukung pertumbuhan ekonomi lokal, kami menawarkan berbagai program unggulan yang
                dirancang untuk menguatkan dan memberdayakan usaha kecil dan menengah. Dari pembinaan hingga distribusi,
                setiap program kami dirancang untuk membantu Anda mencapai kesuksesan yang berkelanjutan.
            </p>
            <div class="program-container">
                <div class="program-list card">
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
                <div class="program-list card">
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
                <div class="program-list card">
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
                <div class="program-list card">
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
                <div class="program-list card">
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
                <div class="program-list card">
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
    </div>
</main>
@endsection