{{-- @extends('admin.layout.index')

@section('main')
<div class="" style="margin: 0 0 0 300px; padding: 1rem;">
        
        <h1>{{ $title }}</h1>
</div>
@endsection --}}

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
            <div class="page-content">
                <section class="row">
                    <div class="col-12">
                        <table id="tabsle-news"> 
                                <thead>
                                        <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Isi</th>
                                        <th>Penulis</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        {{-- @foreach ($news as $item)
                                        <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->content }}</td>
                                                <td>{{ $item->author }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>
                                                <a href="{{ route('admin.manage-news.edit', $item->id) }}">Edit</a>
                                                <form action="{{ route('admin.manage-news.delete', $item->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit">Delete</button>
                                                </form>
                                                </td>
                                        </tr>
                                        @endforeach --}}
                                </tbody>
                        </table>
                    </div>
                </section>
            </div>

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
@endsection
