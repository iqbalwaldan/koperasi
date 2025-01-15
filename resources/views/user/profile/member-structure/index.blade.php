@extends('user.layout.index')

@section('main')
    <main class="main">
        <div class="media__container">
            <div class="main__member card p-4">
                <h2>Struktur Keanggotaan</h2>
                <p>
                    Dinas Koperasi Usaha Kecil dan Menengah Perindustrian dan Perdagangan
                </p>
                <div class="member-container">
                    @foreach ($members as $member)
                        @if ($member['slug'] == 'kepala-dinas')
                            <div class="member-list-container member-list-container-lg">
                                <div class="member-list p-0">
                                    <figure class="mb-2">
                                        <img src="{{ $member['image_url'] }}" alt="">
                                    </figure>
                                    <h4>{{ $member['name'] }}</h4>
                                    <p>{{ $member['position'] }}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <h3>JAJARAN ESELON III</h3>
                    @foreach ($members as $member)
                        @if ($member['slug'] == 'sekretaris-dinas')
                            <div class="member-list-container member-list-container-lg">
                                <div class="member-list member-list-md p-0">
                                    <figure class="mb-2">
                                        <img src="{{ $member['image_url'] }}" alt="">
                                    </figure>
                                    <h4>{{ $member['name'] }}</h4>
                                    <p>{{ $member['position'] }}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <div class="member-list-container member-list-container-md">
                        @foreach ($members as $member)
                            @if ($member['slug'] == 'eselon-iii')
                                <div class="member-list member-list-md p-0">
                                    <figure class="mb-2">
                                        <img src="{{ $member['image_url'] }}" alt="">
                                    </figure>
                                    <h4>{{ $member['name'] }}</h4>
                                    <p>{{ $member['position'] }}</p>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <h3>JAJARAN ESELON IV, JFT, SUB KOORDINATOR DAN PELAKSANA</h3>
                    <div class="member-list-container member-list-container-sm">
                        @foreach ($members as $member)
                            @if ($member['slug'] == 'eselon-iv-jft-sub-koordinator-dan-pelaksana')
                        <div class="member-list member-list-sm p-0">
                            <figure class="mb-2">
                                <img src="{{ $member['image_url'] }}" alt="">
                            </figure>
                            <h4>{{ $member['name'] }}</h4>
                                    <p>{{ $member['position'] }}</p>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
