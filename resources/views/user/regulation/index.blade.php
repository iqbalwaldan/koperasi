@extends('user.layout.index')

@section('main')
    <main class="main">
        <div class="media__container">
            <section class="card my-3 overflow-hidden rounded-0">
                <table class="publication__table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($showBasicLaws))
                            @foreach ($showBasicLaws as $index => $basicLaw)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td><a href="{{ $basicLaw['url'] }}">{{ $basicLaw['name'] }}</a></td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="2" class="text-center">Tidak ada data</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </section>
        </div>
    </main>
@endsection
