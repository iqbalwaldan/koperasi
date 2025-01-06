<?php

namespace App\Http\Controllers\Client\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ManageController extends Controller
{
    public function pressRelease()
    {
        $data = NewsDetail::with('newsTag')->where('news_tag_id', '1')->orderBy('date_news', 'DESC')->orderBy('created_at', 'DESC')->get()->map(function ($item) {
            return [
                'id' => $item->id,
                'tag_name' => $item->newsTag->name ?? 'Tidak ada tag',
                'title' => Str::limit($item->title, 50, '...'),
                'slug' => $item->slug,
                'created_at' => $item->created_at->format('d F Y'),
            ];
        });
        return view('admin.manage-press-release.index', [
            'title' => 'Manajemen Siaran Pers',
            'active' => 'press-release',
            'data' => $data
        ]);
    }

    public function pressReleaseCreate()
    {
        return view('admin.manage-press-release.create', [
            'title' => 'Tambah Siaran Pers',
            'active' => 'press-release',
        ]);
    }

    public function pressReleaseStore(Request $request)
    {
        DB::beginTransaction();
        try {
            $request->validate([
                'title' => 'required',
                'date_news' => 'required',
                'description' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg|max:1024',
            ]);

            $slug = Str::slug($request->title) . '-' . time();
            $news = NewsDetail::create([
                'title' => $request->title,
                'slug' => $slug,
                'description' => $request->description,
                'news_tag_id' => 1,
                'date_news' => $request->date_news,
                'author' => auth()->user()->name,
            ]);

            $news->addMediaFromRequest('image')->usingName('thumb_' . $slug)->usingFileName('thumb_' . $slug)->toMediaCollection('siaran-pers');

            DB::commit();
            return redirect()->route('admin.manage-press-release.index')->with('success', 'Data siaran pers berhasil ditambahkan!');
        } catch (\Exception $e) {
            DB::rollBack();
            // return redirect()->back()->with('error', 'Gagal menambahkan data siaran pers!');
            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan data siaran pers!');
        }
    }

    public function pressReleaseEdit($slug)
    {
        $imageUrl = NewsDetail::where('slug', $slug)->first()->getFirstMediaUrl('siaran-pers');

        $news = NewsDetail::where('slug', $slug)->get()->map(function ($item) {
            return [
                'id' => $item->id,
                'title' => $item->title,
                'slug' => $item->slug,
                'description' => $item->description,
                'news_tag_id' => $item->news_tag_id,
                'image_url' => $item->image,
                'date_news' => $item->date_news->format('Y-m-d'),
            ];
        });

        $news->transform(function ($item, $key) use ($imageUrl) {
            if ($key === 0) {
                $item['image_url'] = $imageUrl;
            }
            return $item;
        });

        return view('admin.manage-press-release.edit', [
            'title' => 'Edit Siaran Pers',
            'active' => 'press-release',
            'data' => $news
        ]);
    }

    public function pressReleaseUpdate(Request $request, string $slug)
    {
        DB::beginTransaction();
        $news = NewsDetail::where('slug', $slug)->first();
        $request->validate([
            'title' => 'required',
            'date_news' => 'required',
        ]);

        $dataUpdate = [
            'title' => $request->title,
            'date_news' => $request->date_news,
        ];

        if ($request->description !== null) {
            $dataUpdate['description'] = $request->description;
        }

        $slug = Str::slug($request->title) . '-' . time();
        if ($request->title !== $news->title) {
            $dataUpdate['slug'] = $slug;
        }

        $news->update($dataUpdate);

        if ($request->hasFile('image')) {
            try {
                $request->validate([
                    'image' => 'image|mimes:jpeg,png,jpg|max:1024',
                ]);
            } catch (\Exception $e) {
                DB::rollBack();
                return redirect()->back()->with('error', 'Gagal mengunggah gambar!');
            }
            $news->clearMediaCollection('siaran-pers');
            $news->addMediaFromRequest('image')->usingName('thumb_' . $slug)->usingFileName('thumb_' . $slug)->toMediaCollection('siaran-pers');
        }

        DB::commit();
        return redirect()->route('admin.manage-press-release.index')->with('success', 'Data siaran pers berhasil diperbarui!');
    }


    public function pressReleaseDestroy($id)
    {
        $news = NewsDetail::findOrFail($id);
        $news->delete();

        return response()->json(['message' => 'Berita berhasil dihapus!'], 200);
    }

    public function activity()
    {
        $activity = NewsDetail::with('newsTag')->where('news_tag_id', '3')->orderBy('date_news', 'DESC')->orderBy('created_at', 'DESC')->get()->map(function ($item) {
            return [
                'id' => $item->id,
                'tag_name' => $item->newsTag->name ?? 'Tidak ada tag',
                'title' => Str::limit($item->title, 50, '...'),
                'slug' => $item->slug,
                'created_at' => $item->created_at->format('d F Y'),
            ];
        });

        return view('admin.manage-activity.index', [
            'title' => 'Manajemen Kegiatan',
            'active' => 'activity',
            'data' => $activity
        ]);
    }

    public function activityCreate()
    {
        return view('admin.manage-activity.create', [
            'title' => 'Tambah Kegiatan',
            'active' => 'activity',
        ]);
    }

    public function activityStore(Request $request)
    {
        DB::beginTransaction();
        try {
            $request->validate([
                'title' => 'required',
                'date_news' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg|max:1024',
                'attachment.*' => 'file|mimes:jpeg,png,jpg|max:1024',
            ]);

            $slug = Str::slug($request->title) . '-' . time();
            $news = NewsDetail::create([
                'title' => $request->title,
                'slug' => $slug,
                'description' => '',
                'news_tag_id' => 3,
                'date_news' => $request->date_news,
                'author' => auth()->user()->name,
            ]);

            foreach ($request->attachment as $index => $file) {
                $news->addMedia($file)->usingName('lampiran-' . ($index + 1))->usingFileName('file_' . $slug)->toMediaCollection('lampiran');
            }

            $news->addMediaFromRequest('image')->usingName('thumb_' . $slug)->usingFileName('thumb_' . $slug)->toMediaCollection('kegiatan');

            DB::commit();
            return redirect()->route('admin.manage-activity.index')->with('success', 'Data siaran pers berhasil ditambahkan!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan data siaran pers!');
        }
    }

    public function activityEdit($slug)
    {
        $imageUrl = NewsDetail::where('slug', $slug)->first()->getFirstMediaUrl('kegiatan');
        foreach (NewsDetail::where('slug', $slug)->first()->getMedia('lampiran') as $index => $media) {
            $attachments[$index] = [
                'name' => $media->name,
                'url' => $media->getUrl()
            ];
        }

        $news = NewsDetail::where('slug', $slug)->get()->map(function ($item) {
            return [
                'id' => $item->id,
                'title' => $item->title,
                'slug' => $item->slug,
                'news_tag_id' => $item->news_tag_id,
                'image_url' => $item->image,
                'date_news' => $item->date_news->format('Y-m-d'),
            ];
        });

        $news->transform(function ($item, $key) use ($imageUrl, $attachments) {
            if ($key === 0) {
                $item['image_url'] = $imageUrl;
                $item['attachment'] = $attachments;
            }
            return $item;
        });

        return view('admin.manage-activity.edit', [
            'title' => 'Edit Kegiatan',
            'active' => 'activity',
            'data' => $news
        ]);
    }

    public function activityUpdate(Request $request, string $slug)
    {
        DB::beginTransaction();
        $news = NewsDetail::where('slug', $slug)->first();
        $request->validate([
            'title' => 'required',
            'date_news' => 'required',
        ]);

        $dataUpdate = [
            'title' => $request->title,
            'date_news' => $request->date_news,
        ];

        $slug = Str::slug($request->title) . '-' . time();
        if ($request->title !== $news->title) {
            $dataUpdate['slug'] = $slug;
        }

        $news->update($dataUpdate);

        if ($request->hasFile('image')) {
            try {
                $request->validate([
                    'image' => 'image|mimes:jpeg,png,jpg|max:1024',
                ]);
            } catch (\Exception $e) {
                DB::rollBack();
                return redirect()->back()->with('error', 'Gagal mengunggah gambar!');
            }
            $news->clearMediaCollection('kegiatan');
            $news->addMediaFromRequest('image')->usingName('thumb_' . $slug)->usingFileName('thumb_' . $slug)->toMediaCollection('kegiatan');
        }
        if ($request->hasFile('attachment')) {
            try {
                $request->validate([
                    'attachment.*' => 'file|mimes:jpeg,png,jpg|max:1024',
                ]);
            } catch (\Exception $e) {
                DB::rollBack();
                return redirect()->back()->with('error', 'Gagal mengunggah lampiran!');
            }
            $news->clearMediaCollection('lampiran');
            foreach ($request->attachment as $index => $file) {
                $news->addMedia($file)->usingName('lampiran-' . ($index + 1))->usingFileName('file_' . $slug)->toMediaCollection('lampiran');
            }
        }

        DB::commit();
        return redirect()->route('admin.manage-activity.index')->with('success', 'Data siaran pers berhasil diperbarui!');
    }

    public function activityDestroy($id)
    {
        $news = NewsDetail::findOrFail($id);
        $news->delete();

        return response()->json(['message' => 'Berita berhasil dihapus!'], 200);
    }

    









    public function gallery()
    {
        return view('admin.manage-gallery.index', [
            'title' => 'Manajemen Galeri',
            'active' => 'gallery',
        ]);
    }

    public function data()
    {
        return view('admin.manage-data.index', [
            'title' => 'Manajemen Data',
            'active' => 'data',
        ]);
    }
}
