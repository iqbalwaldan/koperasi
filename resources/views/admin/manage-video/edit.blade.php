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
                                <form class="form form-vertical" action="{{ route('admin.manage-video.update', $video[0]['slug']) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="video_title">Judul Video</label>
                                                    <input type="text" id="video-title" class="form-control" name="video_title"
                                                        placeholder="Masukkan judul video..." value="{{ $video[0]["title"] }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="video_url">Link Video</label>
                                                    <p style="margin:0; font-size: 0.8rem; color:grey;">contoh : https://www.youtube.com/watch?v=RhVPFY86O4I</p>
                                                    <input type="text" id="video-url" class="form-control" name="video_url"
                                                        placeholder="Masukkan link video..." value="{{ $video[0]["url"] }}" required>
                                                </div>
                                            </div>
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
        document.querySelector('button[type="reset"]').addEventListener('click', () => {
            if (ckEditorInstance) {
                ckEditorInstance.setData('');
                document.querySelector('#description-input').value = '';
            }
        });

        document.getElementById('back-button').addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah submit form
            window.history.back(); // Navigasi ke halaman sebelumnya
        });
    </script>
@endsection
