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
                                    action="{{ route('admin.manage-setting-user.update', $user['username']) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="name">Nama</label>
                                                    <input type="text" id="name" class="form-control" name="name"
                                                        placeholder="Masukkan name" value="{{ $user['name'] }}" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="username">Username</label>
                                                    <input type="text" id="username" class="form-control"
                                                        name="username" placeholder="Masukkan username"
                                                        value="{{ $user['username'] }}" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="role">Role</label>
                                                    <select class="form-select" id="floatingSelect" name="role"
                                                        aria-label="Floating label select example">
                                                        <option disabled>--- Pilih Role ---</option>
                                                        @foreach ($roles as $role)
                                                            <option value="{{ $role['name'] }}"
                                                                {{ $user['role'] == $role['name'] ? 'selected' : '' }}>
                                                                {{ $role['name'] }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="password">Password Baru</label>
                                                    <input type="text" id="password" class="form-control"
                                                        name="password" placeholder="Masukkan password Baru">
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
    <script>
        document.querySelector('button[type="reset"]').addEventListener('click', () => {
            if (ckEditorInstance) {
                ckEditorInstance.setData('');
                document.querySelector('#description-input').value = '';
            }
        });

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
