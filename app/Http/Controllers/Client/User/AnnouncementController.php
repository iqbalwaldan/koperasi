<?php

namespace App\Http\Controllers\Client\User;

use App\Http\Controllers\Controller;
use App\Models\NewsDetail;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function activity()
    {
        $activitys = NewsDetail::where('news_tag_id', 3)
        ->orderBy('date_news', 'DESC')
        ->orderBy('created_at', 'DESC')
        ->paginate(10);

        $activitys->getCollection()->transform(function ($news) {
            $news->image_url = $news->getFirstMediaUrl('kegiatan');
            return $news;
        });
        return view('user.announcement.activity.index', [
            'title' => 'Kegiatan',
            'activitys' => $activitys,
        ]);
    }

    public function showActivity($slug)
    {
        $showActivity = NewsDetail::with('newsTag')->where('slug', $slug)->first();

        if ($showActivity) {
            $showActivity->news_tag_name = $showActivity->newsTag->name;
            $showActivity->image_url = $showActivity->getFirstMediaUrl('kegiatan');
            $showActivity->attachment_url = $showActivity->getMedia('lampiran')->map(function ($media) {
                return [
                    'name' => $media->name,
                    'file_url' => $media->getUrl()
                ];
            });
        }

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

        return view('user.detail.publication.index', [
            'title' => 'Kegiatan',
            'newsDetails' => $showActivity,
            'title_list_article_1' => 'Siaran Pers',
            'list_article_1' => $pressReleases,
            'title_list_article_2' => 'Kegiatan',
            'list_article_2' => $activity
        ]);
    }
}
