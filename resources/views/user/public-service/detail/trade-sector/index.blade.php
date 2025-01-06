@extends('user.layout.index')

@section('main')
<main class="main">
    <div class="media__container">
        <div class="card p-3 my-3">
            <h2 style="font-size: 1.5rem; margin: 0; text-align: center;">Tabel Harga Rata-Rata Kabupaten Sumenep</h2>
            <h3 style="font-size: 1rem; font-weight: 400; text-align: center;">11 Desember 2024</h3>
            <embed src="{{ asset('assets/file/PASAR ANOM BARU.pdf') }}" type="application/pdf" width="100%" height="1000px" />
        </div>
    </div>
</main>
@endsection