@extends('user.layout.index')

@section('main')
    <main class="main">
        <section class="media__container mb-3">
            <section class="card my-3 p-3 overflow-hidden rounded-3">
                <form action="{{ route('information') }}" method="GET"> {{-- Ubah dari POST ke GET --}}
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Masukkan Nama" aria-label="Name" name="name"
                            value="{{ request()->input('name') }}">
                        <select class="form-select" aria-label="Pilih Kategori" name="kategory">
                            <option selected value="">--- Pilih Kategori ---</option>
                            <option value="informasi-publik"
                                {{ request()->input('kategory') == 'informasi-publik' ? 'selected' : '' }}>
                                Informasi Publik
                            </option>
                            <option value="informasi-harga"
                                {{ request()->input('kategory') == 'informasi-harga' ? 'selected' : '' }}>
                                Informasi Harga
                            </option>
                        </select>
                        <button type="submit" class="btn btn-filter">
                            Filter
                        </button>
                    </div>
                </form>
                <table class="publication__table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!$informations->count() == 0)
                            @php $no = 1; @endphp
                            @foreach ($informations as $index => $information)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td><a href="{{ $information['file_url'] }}">{{ $information['name'] }}</a></td>
                                    <td>{{ $information['category'] }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3" class="text-center">Tidak ada data</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                <!-- Pagination -->
                <div class="d-flex justify-content-end mt-4">
                    {{ $informations->appends(request()->query())->links('vendor.pagination.bootstrap-5') }}
                </div>
            </section>
        </section>
    </main>
@endsection
