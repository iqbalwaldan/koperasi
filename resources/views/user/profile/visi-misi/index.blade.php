@extends('user.layout.index')

@section('main')
    <main class="main">
        <section class="media__container card p-4 my-3">
            <article class="profile">
                @if ($visionMission)
                    {!! $visionMission->description !!}
                @endif
                {{-- <p><span class="text-big"><strong>Visi</strong></span></p>
                <p>Terwujudnya Indonesia Maju yang Berdaulat, Mandiri, dan Berkepribadian Berdasarkan Gotong Royong</p>
                <p><span class="text-big"><strong>visi</strong></span></p>
                <ol>
                    <li> Peningkatan Kualitas Manusia Indonesia; </li>
                    <li> Struktur Ekonomi yang Produktif, Merata dan Berdaya Saing; </li>
                    <li> Pembangunan yang Merata dan Berkeadilan; </li>
                    <li> Mencapai Lingkungan Hidup yang Berkelanjutan; </li>
                    <li> Kemajuan Budaya yang Mencerminkan Kepribadian Bangsa; </li>
                    <li> Penegakan Sistem Hukum yang Bebas Korupsi, Bermartabat dan Terpercaya; </li>
                    <li> Perlindungan Bagi Segenap Bangsa dan Memberikan Rasa Aman pada Seluruh Warga; </li>
                    <li> Pengelolaan Pemerintah yang Bersih, Efektif, dan Terpercaya; </li>
                    <li> Sinergi Pemerintah Daerah dalam Kerangka Negara Kesatuan. </li>
                </ol> --}}
                {{-- <p> 1. Peningkatan Kualitas Manusia Indonesia; </p>
                <p> 2 .Struktur Ekonomi yang Produktif, Merata dan Berdaya Saing; </p>
                <p> 3. Pembangunan yang Merata dan Berkeadilan; </p>
                <p> 4. Mencapai Lingkungan Hidup yang Berkelanjutan; </p>
                <p> 5. Kemajuan Budaya yang Mencerminkan Kepribadian Bangsa; </p>
                <p> 6. Penegakan Sistem Hukum yang Bebas Korupsi, Bermartabat dan Terpercaya; </p>
                <p> 7. Perlindungan Bagi Segenap Bangsa dan Memberikan Rasa Aman pada Seluruh Warga; </p>
                <p> 8. Pengelolaan Pemerintah yang Bersih, Efektif, dan Terpercaya; </p>
                <p> 9. Sinergi Pemerintah Daerah dalam Kerangka Negara Kesatuan. </p> --}}
            </article>
        </section>
    </main>
@endsection
