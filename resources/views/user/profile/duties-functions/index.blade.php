@extends('user.layout.index')

@section('main')
    <main class="main">
        <section class="media__container card p-4 my-3">
            <article class="profile">
                @if ($dutiesFunctions)
                    {!! $dutiesFunctions->description !!}
                @endif
                {{-- <p><span class="text-big"><strong>KEMENTERIAN KOPERASI DAN UKM</strong></span></p>
                <p><strong>TUGAS</strong></p>
                <p>Tugas dan fungsi Kementerian Koperasi dan UKM telah ditetapkan dalam Peraturan Presiden Nomor 96 Tahun
                    2020 tentang Kementerian Koperasi dan Usaha Kecil dan Menengah, yaitu: Kementerian Koperasi dan Usaha
                    Kecil dan Menengah mempunyai tugas menyelenggarakan urusan di bidang koperasi dan usaha kecil dan
                    menengah dalam pemerintahan untuk membantu Presiden dalam menyelenggarakan pemerintahan negara.</p>
                <p><strong>FUNGSI</strong></p>
                <ol>
                    <li>Perumusan dan penetapan kebijakan di bidang perkoperasian, usaha mikro, usaha kecil dan menengah,
                        dan kewirausahaan; </li>
                    <li>Koordinasi dan sinkronisasi pelaksanaan kebijakan di bidang perkoperasian, usaha mikro, usaha kecil
                        dan menengah, dan kewirausahaan;</li>
                    <li>Koordinasi pelaksanaan tugas, pembinaan, dan pemberian dukungan administrasi kepada seluruh unsur
                        organisasi di lingkungan Kementerian Koperasi dan Usaha Kecil dan Menengah;</li>
                    <li>Pengelolaan barang milik negara yang menjadi tanggung jawab Kementerian Koperasi dan Usaha Kecil dan
                        Menengah;</li>
                    <li>Pengawasan atas pelaksanaan tugas di lingkungan Kementerian Koperasi dan Usaha Kecil dan Menengah;
                        dan</li>
                    <li>Penyelenggaraan fungsi lain yang diberikan oleh Presiden.</li>
                </ol> --}}
            </article>
        </section>
    </main>
@endsection
