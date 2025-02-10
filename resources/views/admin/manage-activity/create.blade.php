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
                                <button type="back" id="back-button"
                                    class="btn btn-secondary mb-3">
                                    <i class="fa-solid fa-arrow-left"></i> 
                                    Kembali
                                </button>
                                <form class="form form-vertical" action="{{ route('admin.manage-activity.store') }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="title">Judul</label>
                                                    <input type="text" id="title" class="form-control" name="title"
                                                        placeholder="Judul" value="{{ old('title') }}" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="date_news">Tanggal</label>
                                                    <input type="date" id="date_news" class="form-control"
                                                        name="date_news" placeholder="Masukkan Tanggal"
                                                        value="{{ old('date_news') }}" required>
                                                </div>
                                            </div>
                                            {{-- <div class="col-12">
                                                <div class="form-group">
                                                    <label for="description">Deskripsi</label>
                                                    <div id="description">
                                                    </div>
                                                    <input type="hidden" name="description" id="description-input">
                                                </div>
                                            </div> --}}
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="image" class="form-label">Gambar
                                                        <br>
                                                        <span style="font-weight: lighter; font-size: 0.9rem">*format
                                                            jpg,png,jpeg | max:1mb
                                                        </span>
                                                    </label>
                                                    <input class="form-control" type="file" id="image" name="image"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="attachment" class="form-label">Lampiran
                                                        <br>
                                                        <span style="font-weight: lighter; font-size: 0.9rem">
                                                            *max:5mb
                                                        </span>
                                                    </label>
                                                    <input class="form-control" type="file" id="attachment" multiple name="attachment[]"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                                <button type="reset"
                                                    class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <footer>
                {{-- <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="http://ahmadsaugi.com">A. Saugi</a></p>
                    </div>
                </div> --}}
            </footer>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css" />
    <script src="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.umd.js"></script>
    <script>
        // let ckEditorInstance;

        // if (document.querySelector("#description")) {
        //     const {
        //         ClassicEditor,
        //         Essentials,
        //         Bold,
        //         Italic,
        //         Font,
        //         Paragraph,
        //         List,
        //     } = CKEDITOR;

        //     ClassicEditor.create(document.querySelector("#description"), {
        //             plugins: [Essentials, Bold, Italic, Font, Paragraph, List],
        //             toolbar: [
        //                 "undo",
        //                 "redo",
        //                 "|",
        //                 "bold",
        //                 "italic",
        //                 "|",
        //                 "fontSize",
        //                 "|",
        //                 "bulletedList",
        //                 "numberedList",
        //             ],
        //         })
        //         .then((editor) => {
        //             ckEditorInstance = editor;
        //             editor.model.document.on('change', () => {
        //                 document.querySelector('#description-input').value = editor.getData();
        //             });
        //         })
        //         .catch((error) => {
        //             console.error("Error initializing CKEditor:", error);
        //         });
        // }

        // document.querySelector('button[type="reset"]').addEventListener('click', () => {
        //     if (ckEditorInstance) {
        //         ckEditorInstance.setData('');
        //         document.querySelector('#description-input').value = '';
        //     }
        // });

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
