@extends('user.layout.index')

@section('main')
    <main class="main">
        <section class="media__container mt-5 mb-3">
            @if ($newsDetails)
                <figure class="news-detail__figure">
                    <img class="news-detail__img" src="{{ $newsDetails->image_url }}" alt="news" width="800px"
                        height="600px">
                </figure>
                <article class="news-detail__article card">
                    <h2>{{ $newsDetails->title }}</h2>
                    <div class="news-detail__border-bottom news-detail__p  d-flex gap-3 my-3">
                        <p class="text-small">
                            <i class="fa-solid fa-calendar"></i>
                            {{ date('d M Y', strtotime($newsDetails->date_news)) }}
                        </p>
                        <p class="text-small">
                            <i class="fa-solid fa-tag"></i>
                            {{ $newsDetails->news_tag_name }}
                        </p>
                    </div>
                    <div class="news-detail__p">
                        {!! $newsDetails->description !!}
                    </div>
                    @if ($newsDetails->news_tag_id == 3)
                        <div class="d-flex flex-column gap-2 news-detail__border-bottom">
                            <p class="m-0">Lampiran:</p>
                            @foreach ($newsDetails->attachment_url as $attachment)
                                <a href="{{ $attachment['file_url'] }}"
                                    class="activity-attachment">{{ $attachment['name'] }}</a>
                            @endforeach
                        </div>
                    @endif
                </article>
            @endif
            <div class="main__two-column mt-3 mb-3">
                <section class="two-column-card card w-100 d-flex flex-column justify-content-between">
                    <div class="d-flex flex-column gap-3">
                        <h2>{{ $title_list_article_1 }}</h2>
                        <div class="two-column-list">
                            @foreach ($list_article_1 as $article_1)
                                <article>
                                    <div class="two-column">
                                        <figure class="two-column-figure">
                                            <img src="{{ $article_1->image_url }}" alt="">
                                        </figure>
                                        <div class="two-column-list-detail">
                                            <a href="/publikasi/siaran-pers/{{ $article_1->slug }}">
                                                <h3>{{ $article_1->title }}</h3>
                                            </a>
                                            <p>
                                                {{ date('d-m-Y', strtotime($article_1->date_news)) }}
                                            </p>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                    <div class="two-column-link-container">
                        <a href="/publikasi/siaran-pers">Berita Lainnya<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </section>
                <section class="two-column-card card w-100 d-flex flex-column justify-content-between">
                    <div class="d-flex flex-column gap-3">
                        <h2>{{ $title_list_article_2 }}</h2>
                        <div class="two-column-list">
                            @foreach ($list_article_2 as $article_2)
                                <article>
                                    <div class="two-column">
                                        <figure class="two-column-figure">
                                            <img src="{{ $article_2->image_url }}" alt="">
                                        </figure>
                                        <div class="two-column-list-detail">
                                            <a href="/kegiatan/{{ $article_2->slug }}">
                                                <h3>{{ $article_2->title }}</h3>
                                            </a>
                                            <p>
                                                {{ date('d-m-Y', strtotime($article_2->date_news)) }}
                                            </p>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                    <div class="two-column-link-container">
                        <a href="/kegiatan">Berita Lainnya<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </section>
            </div>
        </section>

    </main>
    <script>
        $(document).ready(function() {
            $('.page-title').attr('hidden', true);
        });
    </script>
@endsection
