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
                                <form class="form form-vertical"
                                    action="{{ route('admin.manage-profile.update', $data['slug']) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-body">
                                        <div class="row">
                                            @if ($data['slug'] == 'visi-dan-misi' || $data['slug'] == 'regulasi-tugas-dan-fungsi')
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="description">Deskripsi</label>
                                                        <div id="description">
                                                        </div>
                                                        <input type="hidden" name="description" id="description-input">
                                                    </div>
                                                </div>
                                            @endif
                                            @if ($data['slug'] == 'struktur-organisasi')
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="image" class="form-label">Gambar
                                                            <br>
                                                            <span style="font-weight: lighter; font-size: 0.9rem">*format
                                                                jpg,png,jpeg | max:5mb
                                                            </span>
                                                        </label>
                                                        <input class="form-control" type="file" id="image"
                                                            name="image">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <figure class="text-center overflow-hidden">
                                                        <img src="{{ $data['image_url'] ?? '/'}}" alt="" width="800"
                                                            class="img-fluid img-cover rounded-3 border">
                                                    </figure>
                                                </div>
                                            @endif
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
        if (@json($data['slug']) == 'visi-dan-misi' || @json($data['slug']) ==
            'regulasi-tugas-dan-fungsi') {
            // Ambil data description dari server
            const description = @json($data['description']);

            if (document.querySelector("#description")) {
                const {
                    ClassicEditor,
                    Essentials,
                    Bold,
                    Italic,
                    Font,
                    Paragraph,
                    List,
                } = CKEDITOR;
                ClassicEditor.create(document.querySelector("#description"), {
                        plugins: [Essentials, Bold, Italic, Font, Paragraph, List],
                        toolbar: [
                            "undo",
                            "redo",
                            "|",
                            "bold",
                            "italic",
                            "|",
                            "fontSize",
                            "|",
                            "bulletedList",
                            "numberedList",
                        ],
                    })
                    .then((editor) => {
                        editor.setData(description);
                        editor.model.document.on('change', () => {
                            document.querySelector('#description-input').value = editor.getData();
                        });
                    })
                    .catch((error) => {
                        console.error("Error initializing CKEditor:", error);
                    });
            }
        }
    </script>
@endsection
