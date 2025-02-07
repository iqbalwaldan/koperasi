@extends('user.layout.index')

@section('main')
    <main class="main">
        <div class="media__container">
            <section class="card p-3 my-3 overflow-hidden rounded-3">
                <table class="publication__table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($files->isEmpty())
                <tr>
                    <td colspan="3" class="text-center">Tidak ada data</td>
                </tr>
            @else
                @foreach ($files as $index => $file)
                    <tr>
                        <td>{{ ($files->currentPage() - 1) * $files->perPage() + $index + 1 }}</td>
                        <td><a href="{{ $file['file_url'] }}">{{ $file['name'] }}</a></td>
                    </tr>
                @endforeach
            @endif
                    </tbody>
                </table>
                <div class="d-flex justify-content-end mt-4">
                    {{ $files->links('vendor.pagination.bootstrap-5') }}
                </div>
            </section>
        </div>
    </main>
@endsection
