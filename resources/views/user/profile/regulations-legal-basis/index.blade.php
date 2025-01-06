@extends('user.layout.index')

@section('main')
    <main class="main">
        <section class="media__container card p-4 my-3">
            <article class="profile">
                @if ($regulationsLegalBasis)
                    {!! $regulationsLegalBasis->description !!}
                @endif
                {{-- <p>Terbentuknya Kementerian Koperasi dan Usaha Kecil dan Menengah Berdasarkan :</p>
                <ol>
                    <li>Keputusan Presiden Republik Indonesia Nomor 228/M Tahun 2001.</li>
                    <li>Keputusan Presiden Republik Indonesia Nomor 101 Tahun 2001 tentang Kedudukan, Tugas, Fungsi,
                        Kewenangan, Susunan Organisasi dan Tata Kerja Menteri Negara.</li>
                    <li>Keputusan Presiden Republik Indonesia Nomor 103 Tahun 2001 tentang Kedudukan, Tugas, Fungsi,
                        Kewenangan, Susunan Organisasi dan Tata Kerja Lembaga Pemerintah Non Departemen.</li>
                    <li>Keputusan Presiden Republik Indonesia Nomor 108 Tahun 2001 tentang Unit Organisasi dan Tugas Eselon
                        I Menteri Negara.</li>
                    <li>Peraturan Presiden Nomor 9 Tahun 2005 tentang Kedudukan, Tugas, Fungsi, Tata Kerja, dan Susunan
                        Organisasi Kementerian Negara Koperasi dan UKM.</li>
                    <li>Peraturan Presiden Nomor 62 Tahun 2005 tentang Perubahan atas Peraturan Presiden Nomor 9 Tahun 2005
                        tentang Kedudukan, Tugas, Fungsi, Susunan Organisasi dan Tata Kerja Kementerian Negara Republik
                        Indonesia.</li>
                    <li>Peraturan Presiden Republik Indonesia Nomor 62 Tahun 2015 Tentang Kementerian Koperasi dan UKM.</li>
                    <li>Peraturan Presiden Republik Indonesia Nomor 96 Tahun 2020 Tentang Kementerian Koperasi dan UKM.</li>
                </ol> --}}
            </article>
        </section>
    </main>
@endsection
