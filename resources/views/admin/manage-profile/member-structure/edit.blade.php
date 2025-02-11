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
                                <button type="back" id="back-button" class="btn btn-secondary mb-3">
                                    <i class="fa-solid fa-arrow-left"></i>
                                    Kembali
                                </button>
                                <form class="form form-vertical"
                                    action="{{ route('admin.manage-member-structure.update', $data['id']) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="name">Nama</label>
                                                    <input type="text" id="name" class="form-control" name="name"
                                                        placeholder="Masukkan nama anggota" value="{{ $data['name'] }}"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="position">Jabatan</label>
                                                    <input type="text" id="position" class="form-control"
                                                        name="position" placeholder="Masukkan jabatan"
                                                        value="{{ $data['position'] }}" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <fieldset class="form-group">
                                                    <label for="structure">Struktur</label>
                                                    <select id="structure" name="structure" class="form-select" required>
                                                        @foreach ($structures as $structure)
                                                            <option value="{{ $structure['slug'] }}"
                                                                {{ $structure['slug'] == $data['structure'] ? 'selected' : '' }}>
                                                                {{ $structure['name'] }}
                                                        @endforeach
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="photo" class="form-label">Foto
                                                        <br>
                                                        <span style="font-weight: lighter; font-size: 0.9rem">*format
                                                            jpg,png,jpeg | max:5mb
                                                        </span>
                                                    </label>
                                                    <input class="form-control" type="file" id="photo"
                                                        name="photo">
                                                </div>
                                            </div>
                                            <figure class="overflow-hidden">
                                                <img src="{{ $data['image_url'] }}" alt="" width="300"
                                                    class="img-fluid img-cover rounded-3 border">
                                            </figure>
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                                <button type="reset"
                                                    class="btn btn-light-secondary me-1 mb-1" hidden>Reset</button>
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
    <script>
        document.querySelector('button[type="reset"]').addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah reset default
            const form = this.closest('form'); // Cari form terdekat
            form.reset(); // Reset semua input dalam form

            // Hapus manual nilai input agar tidak kembali ke old()
            form.querySelectorAll('input, textarea').forEach(input => input.value = '');
        });

        document.getElementById('back-button').addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah submit form
            window.history.back(); // Navigasi ke halaman sebelumnya
        });
    </script>
@endsection
