<?php

namespace App\Http\Controllers\Client\User;

use App\Http\Controllers\Controller;
use App\Models\NewsDetail;
use App\Models\PublicationDetail;
use App\Models\PublicationTag;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function pressRelease()
    {
        $pressReleases = NewsDetail::where('news_tag_id', 1)->orderBy('date_news', 'DESC')->orderBy('created_at', 'DESC')->get()->map(function ($news) {
            $news->description = strip_tags($news->description);

            $news->image_url = $news->getFirstMediaUrl('siaran-pers');

            return $news;
        });
        return view('user.publication.press-release.index', [
            'title' => 'Siaran Pers',
            'pressReleases' => $pressReleases
        ]);
    }

    public function showPressRelease($slug)
    {
        $showPressRelease = NewsDetail::with('newsTag')->where('slug', $slug)->first();

        if ($showPressRelease) {
            $showPressRelease->news_tag_name = $showPressRelease->newsTag->name;
            $showPressRelease->image_url = $showPressRelease->getFirstMediaUrl('siaran-pers');
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
            'title' => 'Siaran Pers',
            'newsDetails' => $showPressRelease,
            'title_list_article_1' => 'Siaran Pers',
            'list_article_1' => $pressReleases,
            'title_list_article_2' => 'Kegiatan',
            'list_article_2' => $activity
        ]);
    }

    public function information(Request $request)
    {

        $tag = PublicationTag::where('slug', 'informasi')->first();
        $informations = PublicationDetail::where('publication_tag_id', $tag->id)->get();

        $name = $request->input('name');
        $category = $request->input('kategory');

        $data = collect();

        foreach ($informations as $information) {
            $mediaData = $information->getMedia($information->slug)->map(function ($media) use ($information) {
                return [
                    'name' => $media->name,
                    'file_url' => $media->getUrl(),
                    'category' => $information->category,
                    'slug' => $information->slug
                ];
            });

            $data = $data->merge($mediaData);
        }

        $query = collect($data);
        if ($name) {
            $query = $query->filter(function ($item) use ($name) {
                return str_contains(strtolower($item['name']), strtolower($name));
            });
        }

        if ($category) {
            $query = $query->filter(function ($item) use ($category) {
                return str_contains(strtolower($item['slug']), strtolower($category));
            });
        }

        $informations = $query;


        return view('user.publication.information.index', [
            'title' => 'Informasi',
            'informations' => $informations
        ]);
    }



    public function showInformation($slug)
    {
        $showJournalistUMKM = NewsDetail::with('newsTag')->where('slug', $slug)->first();

        if ($showJournalistUMKM) {
            $showJournalistUMKM->news_tag_name = $showJournalistUMKM->newsTag->name;
            $showJournalistUMKM->image_url = $showJournalistUMKM->getFirstMediaUrl('berita-media');
        }

        $pressReleases = NewsDetail::where('news_tag_id', 1)
            ->orderBy('date_news', 'desc')  // Urutkan berdasarkan news_date dari yang terbaru
            ->take(3)  // Ambil hanya 3 berita terbaru
            ->get()
            ->map(function ($news) {
                $news->description = strip_tags($news->description);  // Bersihkan tag HTML
                $news->image_url = $news->getFirstMediaUrl('siaran-pers');  // Ambil URL media pertama

                return $news;
            });

        $activity = NewsDetail::where('news_tag_id', 3)
            ->orderBy('date_news', 'desc')  // Urutkan berdasarkan news_date dari yang terbaru
            ->take(3)  // Ambil hanya 3 berita terbaru
            ->get()
            ->map(function ($news) {
                $news->description = strip_tags($news->description);  // Bersihkan tag HTML
                $news->image_url = $news->getFirstMediaUrl('kegiatan');  // Ambil URL media pertama

                return $news;
            });

        return view('user.detail.publication.index', [
            'title' => 'Warta UMKM',
            'newsDetails' => $showJournalistUMKM,
            'title_list_article_1' => 'Siaran Pers',
            'list_article_1' => $pressReleases,
            'title_list_article_2' => 'Kegiatan',
            'list_article_2' => $activity
        ]);
    }

    public function photoGallery()
    {
        $photoGallerys = NewsDetail::where('news_tag_id', 2)->orderBy('date_news', 'DESC')->get()->map(function ($news) {
            // Bersihkan tag HTML dari deskripsi
            $news->description = strip_tags($news->description);

            // Ambil URL dari media pertama dalam koleksi "siaran-pers"
            $news->image_url = $news->getFirstMediaUrl('galeri-foto');

            return $news;
        });
        return view('user.publication.photo-gallery.index', [
            'title' => 'Geleri Foto',
            'photoGallerys' => $photoGallerys
        ]);
    }

    public function showPhotoGallery($slug)
    {
        $showPhotoGallery = NewsDetail::with('newsTag')->where('slug', $slug)->first();

        if ($showPhotoGallery) {
            $showPhotoGallery->news_tag_name = $showPhotoGallery->newsTag->name;
            $showPhotoGallery->image_url = $showPhotoGallery->getMedia('galeri-foto')->map(function ($media) {
                return $media->getUrl();
            });
        }
        // dd($showPhotoGallery);
        return view('user.detail.gallery.index', [
            'title' => 'Geleri',
            'showPhotoGallery' => $showPhotoGallery
        ]);
    }
}
