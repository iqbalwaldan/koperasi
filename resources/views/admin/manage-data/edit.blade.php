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
                                    action="{{ route('admin.manage-data.update', $data['id']) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="name">Nama</label>
                                                    <input type="text" id="name" class="form-control" name="name"
                                                        placeholder="Masukkan nama"
                                                        value="{{ old('name', $data['name']) }}" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <fieldset class="form-group">
                                                    <label for="category">Kategori</label>
                                                    <select id="category" name="category" class="form-select" required>
                                                        <option value="">-- Pilih Kategori --</option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->slug }}"
                                                                {{ $category->slug == $data['category'] ? 'selected' : '' }}>
                                                                {{ $category->category }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="file" class="form-label">File
                                                        <br>
                                                        <span style="font-weight: lighter; font-size: 0.9rem">*format
                                                            pdf,doc,docx | max:5mb
                                                        </span>
                                                    </label>
                                                    <input class="form-control" type="file" id="file"
                                                        name="file">
                                                </div>
                                            </div>

                                            <div class="pdf-viewer">
                                                <iframe src="{{ $data['file_url'] }}" width="100%" height="400px"
                                                    style="border: none;"></iframe>
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
    <script>
        document.getElementById('back-button').addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah submit form
            window.history.back(); // Navigasi ke halaman sebelumnya
        });
    </script>
@endsection
