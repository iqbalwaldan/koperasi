<?php

namespace App\Http\Controllers\Client\User;

use App\Http\Controllers\Controller;
use App\Models\NewsDetail;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $flashNewses = NewsDetail::with('newsTag')
            ->orderBy('date_news', 'desc')
            ->take(10)
            ->get();

        if ($flashNewses->count() > 0) {
            $flashNewses->map(function ($news) {
                if ($news->news_tag_id == 1 || $news->news_tag_id == 2) {
                    if (!str_starts_with($news->newsTag->slug, "/publikasi/")) {
                        $news->newsTag->slug = "/publikasi/{$news->newsTag->slug}";
                    }
                }
                return $news;
            });
        }

        $hotNewses = NewsDetail::where('news_tag_id', 2)->orderBy('date_news', 'desc')
            ->take(5)
            ->get()
            ->map(function ($news) {
                $news->image_url = $news->getFirstMediaUrl('galeri-foto');
                return $news;
            });

        $pressReleases = NewsDetail::where('news_tag_id', 1)
            ->orderBy('date_news', 'desc')
            ->take(3)
            ->get()
            ->map(function ($news) {
                $news->description = strip_tags($news->description);
                $news->image_url = $news->getFirstMediaUrl('siaran-pers');
                return $news;
            });

        $activity = NewsDetail::where('news_tag_id', 3)
            ->orderBy('date_news', 'desc')
            ->take(3)
            ->get()
            ->map(function ($news) {
                $news->description = strip_tags($news->description);
                $news->image_url = $news->getFirstMediaUrl('kegiatan');
                return $news;
            });

        return view('user.dashboard.index', [
            'title' => 'Beranda',
            'flashNewses' => $flashNewses,
            'hotNewses' => $hotNewses,
            'title_list_article_1' => 'Siaran Pers',
            'list_article_1' => $pressReleases,
            'title_list_article_2' => 'Kegiatan',
            'list_article_2' => $activity
        ]);
    }
}
