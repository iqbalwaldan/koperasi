@extends('admin.layout.index')

@section('main')
    <div id="app">
        @include('admin.layout.sidebar')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>{{ $title }}</h3>
            </div>

            <section id="basic-vertical-layouts">
                <div class="row match-height">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-vertical" action="{{ route('admin.manage-setting.update') }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-body">
                                        <div class="row">
                                            {{-- <h5>Logo</h5>
                                            <div class="mb-3">
                                                <input class="form-control" type="file" id="logo" name="logo">
                                            </div> --}}

                                            <h5>Informasi Kantor</h5>

                                            <div class="form-group">
                                                <label for="address">Alamat</label>
                                                <input type="text" class="form-control" id="address" name="address"
                                                    placeholder="Masukkan Alamat Kantor" value="{{ $setting['alamat'] }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="telephone">Telefon</label>
                                                <input type="text" class="form-control" id="telephone" name="telephone"
                                                    placeholder="Masukkan Talefon Kantor" value="{{ $setting['telepon'] }}">
                                            </div>

                                            <h5>Kontak</h5>
                                            <div class="form-group">
                                                <label for="bidang_perizinan_kelembagaan_pengawasan_dan_pemeriksaan">Bidang Perizinan Kelembagaan Pengawasan dan Pemeriksaan</label>
                                                <input type="text" class="form-control" id="bidang_perizinan_kelembagaan_pengawasan_dan_pemeriksaan" name="bidang_perizinan_kelembagaan_pengawasan_dan_pemeriksaan"
                                                placeholder="Masukkan Talefon Bidang" value="{{ $setting['bidang-perizinan-kelembagaan-pengawasan-dan-pemeriksaan'] }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="bidang_pemberdayaan_koperasi_dan_usaha_mikro">Bidang Pemberdayaan Koperasi dan Usaha Mikro</label>
                                                <input type="text" class="form-control" id="bidang_pemberdayaan_koperasi_dan_usaha_mikro" name="bidang_pemberdayaan_koperasi_dan_usaha_mikro"
                                                placeholder="Masukkan Talefon Bidang" value="{{ $setting['bidang-pemberdayaan-koperasi-dan-usaha-mikro'] }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="uptd_metrologi_legal">UPTD Metrologi Legal</label>
                                                <input type="text" class="form-control" id="uptd_metrologi_legal" name="uptd_metrologi_legal"
                                                    placeholder="Masukkan Talefon Bidang" value="{{ $setting['uptd-metrologi-legal'] }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="bidang_perindustrian">Bidang Perindustrian</label>
                                                <input type="text" class="form-control" id="bidang_perindustrian" name="bidang_perindustrian"
                                                    placeholder="Masukkan Talefon Bidang" value="{{ $setting['bidang-perindustrian'] }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="bidang_perdagangan">Bidang Perdagangan</label>
                                                <input type="text" class="form-control" id="bidang_perdagangan" name="bidang_perdagangan"
                                                    placeholder="Masukkan Talefon Bidang" value="{{ $setting['bidang-perdagangan'] }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="uptd_pasar">UPTD Pasar</label>
                                                <input type="text" class="form-control" id="uptd_pasar" name="uptd_pasar"
                                                    placeholder="Masukkan Talefon Bidang" value="{{ $setting['uptd-pasar'] }}">
                                            </div>

                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css" />
    <script src="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.umd.js"></script>
@endsection
