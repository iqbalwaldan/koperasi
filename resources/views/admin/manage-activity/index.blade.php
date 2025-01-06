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

            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Kegiatan</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-end mb-3">
                            <a href="{{ route('admin.manage-activity.create') }}" class="btn btn-success">
                                Tambah Kegiatan
                            </a>
                        </div>
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tag Name</th>
                                    <th>Judul</th>
                                    <th>Tanggal</th>
                                    <th>Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item['tag_name'] }}</td>
                                        <td>{{ $item['title'] }}</td>
                                        <td>{{ $item['created_at'] }}</td>
                                        <td>
                                            <a id="test"
                                                href="{{ route('admin.manage-activity.edit', $item['slug']) }}"
                                                class="btn btn-primary">Edit</a>
                                            <button class="btn btn-danger btn-delete-activity" data-id="{{ $item['id'] }}">
                                                Hapus
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
    <script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
@endsection
