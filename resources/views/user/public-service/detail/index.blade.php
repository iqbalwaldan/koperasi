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
                        @if (!$files->count() == 0)
                            @foreach ($files as $index => $file)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td><a href="{{ $file['file_url'] }}">{{ $file['name'] }}</a></td>
                                    {{-- <td>{{ $file['category'] }}</td> --}}
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="2" class="text-center">Tidak ada file</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </section>
        </div>
    </main>
@endsection
