<?php

namespace App\Http\Controllers\Client\Admin;

use App\Http\Controllers\Controller;
use App\Models\MemberDetail;
use App\Models\MemberTag;
use App\Models\NewsDetail;
use App\Models\NewsTag;
use App\Models\ProfileDetail;
use App\Models\ProfileTag;
use App\Models\PublicationDetail;
use App\Models\PublicationTag;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Permission\Models\Role;

class ManageController extends Controller
{
    public function profileEdit($slug)
    {
        $profile = ProfileTag::where('slug', $slug)->first();
        $profileDetails = ProfileDetail::where('profile_tag_id', $profile->id)->first();
        if (!$profileDetails || !$profileDetails->getMedia($slug)->count()) {
            $data = [
                'slug' => $slug,
                'description' => $profileDetails->description,
            ];
        } else {
            $data = [
                'slug' => $slug,
                'description' => $profileDetails->description,
                'image_url' => $profileDetails->getFirstMediaUrl($slug),
            ];
        }
        return view('admin.manage-profile.edit', [
            'title' => 'Edit Profil ' . $profile->name,
            'active' => $slug,
            'data' => $data
        ]);
    }
    public function profileUpdate(Request $request, $slug)
    {
        try {
            $tag = ProfileTag::where('slug', $slug)->first();
            $profile = ProfileDetail::where('profile_tag_id', $tag->id)->first();

            if ($request->hasFile('image')) {
                $request->validate([
                    'image' => 'image|mimes:jpeg,png,jpg|max:2048',
                ]);
                $profile->clearMediaCollection($slug);
                $profile->addMediaFromRequest('image')->usingName($slug)->toMediaCollection($slug);
            }

            if ($request->description !== null) {
                $profile->update([
                    'description' => $request->description,
                ]);
            }

            return redirect()->route('admin.manage-profile.edit', $slug)->with('success', 'Profil berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal memperbarui profil!');
        }
    }

    public function memberStructure()
    {
        $members = MemberDetail::with('memberTag')->get()->map(function ($member) {
            return [
                'id' => $member->id,
                'name' => $member->name,
                'position' => $member->position,
                'member_tag_name' => $member->memberTag->name,
            ];
        });
        return view('admin.manage-profile.member-structure.index', [
            'title' => 'Struktur Keanggotaan',
            'active' => 'member-structure',
            'tag' => 'Keanggotaan',
            'members' => $members
        ]);
    }

    public function memberStructureCreate()
    {
        $memberTag = MemberTag::get()->map(function ($item) {
            return [
                'name' => $item->name,
                'slug' => $item->slug,
            ];
        });

        return view('admin.manage-profile.member-structure.create', [
            'title' => 'Struktur Keanggotaan',
            'active' => 'member-structure',
            'tag' => 'Keanggotaan',
            'structures' => $memberTag
        ]);
    }

    public function memberStructureStore(Request $request)
    {
        try {
            DB::beginTransaction();
            $request->validate([
                'name' => 'required',
                'position' => 'required',
                'structure' => 'required',
                'photo' => 'image|mimes:jpeg,png,jpg|max:3072',
            ]);

            $memberTag = MemberTag::where('slug', $request->structure)->first();

            $slug = Str::slug($request->name) . '-' . Str::slug($request->position) . '-' . time();
            $member = MemberDetail::create([
                'member_tag_id' => $memberTag->id,
                'name' => $request->name,
                'position' => $request->position,
            ]);

            $member->addMediaFromRequest('photo')->usingName($request->name)->usingFileName('member_' . $slug)->toMediaCollection($request->structure);
            DB::commit();
            return redirect()->route('admin.manage-member-structure.index')->with('success', 'Struktur keanggotaan berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', $e->getMessage());
            // return redirect()->back()->withInput()->with('error', 'Gagal menambahkan struktur keanggotaan!');
        }
    }

    public function memberStructureEdit($id)
    {
        $member = MemberDetail::findOrFail($id);
        $imageUrl = $member->getFirstMediaUrl($member->memberTag->slug);

        $memberTag = MemberTag::get()->map(function ($item) {
            return [
                'name' => $item->name,
                'slug' => $item->slug,
            ];
        });

        $data = [
            'id' => $member->id,
            'name' => $member->name,
            'position' => $member->position,
            'structure' => $member->memberTag->slug,
            'image_url' => $imageUrl,
        ];

        return view('admin.manage-profile.member-structure.edit', [
            'title' => 'Edit Struktur Keanggotaan',
            'active' => 'member-structure',
            'tag' => 'Keanggotaan',
            'data' => $data,
            'structures' => $memberTag
        ]);
    }

    public function memberStructureUpdate(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $member = MemberDetail::findOrFail($id);
            $request->validate([
                'name' => 'required',
                'position' => 'required',
                'structure' => 'required',
                // 'photo' => 'image|mimes:jpeg,png,jpg|max:3072',
            ]);

            $memberTag = MemberTag::where('slug', $request->structure)->first();

            if ($member->member_tag_id !== $memberTag->id && !$request->hasFile('photo')) {
                $member->getMedia($member->memberTag->slug)->map(function (Media $media) use ($memberTag) {
                    $media->update([
                        'collection_name' => $memberTag->slug,
                    ]);
                });
            }

            $slug = Str::slug($request->name) . '-' . Str::slug($request->position) . '-' . time();
            $member->update([
                'member_tag_id' => $memberTag->id,
                'name' => $request->name,
                'position' => $request->position,
            ]);
            if ($request->hasFile('photo')) {
                try {
                    $request->validate([
                        'photo' => 'image|mimes:jpeg,png,jpg|max:3072',
                    ]);
                } catch (\Exception $e) {
                    DB::rollBack();
                    return redirect()->back()->with('error', 'Gagal mengunggah gambar!');
                }
                $member->clearMediaCollection($member->memberTag->slug);
                $member->addMediaFromRequest('photo')->usingName($request->name)->usingFileName('member_' . $slug)->toMediaCollection($request->structure);
            }

            DB::commit();
            return redirect()->route('admin.manage-member-structure.index')->with('success', 'Struktur keanggotaan berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', $e->getMessage());
            // return redirect()->back()->withInput()->with('error', 'Gagal memperbarui struktur keanggotaan!');
        }
    }

    public function memberStructureDestroy($id)
    {
        try {
            DB::beginTransaction();
            $member = MemberDetail::findOrFail($id);
            // delete media
            $member->clearMediaCollection($member->memberTag->slug);
            $member->delete();
            DB::commit();
            return response()->json(['message' => 'Struktur keanggotaan berhasil dihapus!'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Gagal menghapus struktur keanggotaan!'], 500);
        }
    }

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
        $news = NewsDetail::with('newsTag')->findOrFail($id);
        $news->clearMediaCollection($news->newsTag->slug);
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
            return redirect()->route('admin.manage-activity.index')->with('success', 'Data kegiatan berhasil ditambahkan!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan data kegiatan!');
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
                $news->addMedia($file)->usingName('lampiran-' . ($index + 1))->usingFileName('file_' . $slug . ($index + 1))->toMediaCollection('lampiran');
            }
        }

        DB::commit();
        return redirect()->route('admin.manage-activity.index')->with('success', 'Data kegiatan berhasil diperbarui!');
    }

    public function activityDestroy($id)
    {
        $news = NewsDetail::findOrFail($id);
        $news->delete();

        return response()->json(['message' => 'Berita berhasil dihapus!'], 200);
    }

    public function gallery()
    {
        $gallery = NewsDetail::with('newsTag')->where('news_tag_id', '2')->orderBy('date_news', 'DESC')->orderBy('created_at', 'DESC')->get()->map(function ($item) {
            return [
                'id' => $item->id,
                'tag_name' => $item->newsTag->name ?? 'Tidak ada tag',
                'title' => Str::limit($item->title, 50, '...'),
                'slug' => $item->slug,
                'created_at' => $item->created_at->format('d F Y'),
            ];
        });

        return view('admin.manage-gallery.index', [
            'title' => 'Manajemen Galeri',
            'active' => 'gallery',
            'data' => $gallery
        ]);
    }

    public function galleryCreate()
    {
        return view('admin.manage-gallery.create', [
            'title' => 'Tambah Galeri',
            'active' => 'gallery',
        ]);
    }

    public function galleryStore(Request $request)
    {
        DB::beginTransaction();
        try {
            $request->validate([
                'title' => 'required',
                'date_news' => 'required',
                'description' => 'required',
                'image.*' => 'image|mimes:jpeg,png,jpg|max:1024',
            ]);

            $slug = Str::slug($request->title) . '-' . time();
            $news = NewsDetail::create([
                'title' => $request->title,
                'slug' => $slug,
                'description' => $request->description,
                'news_tag_id' => 2,
                'date_news' => $request->date_news,
                'author' => auth()->user()->name,
            ]);

            foreach ($request->image as $index => $file) {
                $news->addMedia($file)->usingName('thumb_' . $slug . '_' . ($index + 1))->usingFileName('thumb_' . $slug)->toMediaCollection('galeri-foto');
            }

            DB::commit();
            return redirect()->route('admin.manage-gallery.index')->with('success', 'Data galeri foto berhasil ditambahkan!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan data galeri foto!');
        }
    }

    public function galleryEdit($slug)
    {
        foreach (NewsDetail::where('slug', $slug)->first()->getMedia('galeri-foto') as $index => $media) {
            $image[$index] = [
                'name' => $media->name,
                'url' => $media->getUrl()
            ];
        }

        $gellery = NewsDetail::where('slug', $slug)->get()->map(function ($item) {
            return [
                'id' => $item->id,
                'title' => $item->title,
                'slug' => $item->slug,
                'description' => $item->description,
                'news_tag_id' => $item->news_tag_id,
                'date_news' => $item->date_news->format('Y-m-d'),
            ];
        });

        $gellery->transform(function ($item, $key) use ($image) {
            if ($key === 0) {
                $item['images'] = $image;
            }
            return $item;
        });

        return view('admin.manage-gallery.edit', [
            'title' => 'Edit Galeri',
            'active' => 'gallery',
            'data' => $gellery
        ]);
    }

    public function galleryUpdate(Request $request, string $slug)
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

        if ($request->description !== null) {
            $dataUpdate['description'] = $request->description;
        }

        $news->update($dataUpdate);

        if ($request->hasFile('image')) {
            try {
                $request->validate([
                    'image.*' => 'image|mimes:jpeg,png,jpg|max:1024',
                ]);
            } catch (\Exception $e) {
                DB::rollBack();
                return redirect()->back()->with('error', 'Gagal mengunggah lampiran!');
            }
            $news->clearMediaCollection('galeri-foto');
            foreach ($request->image as $index => $file) {
                $news->addMedia($file)->usingName('thumb_' . $slug . '_' . ($index + 1))->usingFileName('thumb_' . $slug . '-' . ($index + 1))->toMediaCollection('galeri-foto');
            }
        }

        DB::commit();
        return redirect()->route('admin.manage-gallery.index')->with('success', 'Data galeri foto berhasil diperbarui!');
    }

    public function data($slug)
    {
        $showBasicLawTag = PublicationTag::where('slug', $slug)->first();
        $showBasicLawDetail = PublicationDetail::with('publicationTag')->where('publication_tag_id', $showBasicLawTag->id)->get();
        // dd($showBasicLawDetail->publicationTag->name);
        $data = [];
        foreach ($showBasicLawDetail as $item) {
            // Ambil semua media berdasarkan slug
            $mediaFiles = $item->getMedia($item->slug)->map(function ($media) use ($item) {
                return [
                    'id' => $media->id,
                    'publication_tag_name' => $item->publicationTag->name,
                    'category' => $item->category,
                    'category_slug' => $item->slug,
                    'name' => $media->name,
                    'file_name' => $media->file_name,
                    'collection_name' => $media->collection_name,
                    'url' => $media->getUrl(),
                ];
            });
            // Gabungkan data ke dalam $data
            $data = array_merge($data, $mediaFiles->toArray());
        }
        // dd($data);

        return view('admin.manage-data.index', [
            'title' => 'Manajemen Data ' . $showBasicLawTag->name,
            'active' => $showBasicLawTag->slug,
            'tag' => $showBasicLawTag->name,
            'data' => $data
        ]);
    }

    public function dataCreate($slug)
    {
        $tag = PublicationTag::where('slug', $slug)->first();
        $userRole = auth()->user()->roles->first()->name;
        if ($userRole === 'super-admin') {
            $categories = PublicationDetail::where('publication_tag_id', $tag->id)->get();
        } else {
            $categories = PublicationDetail::where('publication_tag_id', $tag->id)->where('slug', $userRole)->get();
        }
        return view('admin.manage-data.create', [
            'title' => 'Tambah Data ' . Str::title($slug),
            'active' => $slug,
            'tag' => Str::title($slug),
            'categories' => $categories
        ]);
    }

    public function dataStore(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'category' => 'required',
                'file' => 'required|file|mimes:pdf|max:5120',
            ]);

            $file_name = Str::slug('file_' . $request->name) . '-' . time();

            $data = PublicationDetail::with('publicationTag')->where('slug', $request->category)->first();
            if (!$data) {
                return redirect()->back()->withInput()->with('error', 'Kategori tidak ditemukan!');
            }

            $data->addMediaFromRequest('file')->usingName($request->name)->usingFileName($file_name)->toMediaCollection($data->slug);
            if ($data->publicationTag->slug === 'layanan') {
                return redirect()->route('admin.manage-service.index')->with('success', 'Data berhasil ditambahkan!');
            } else {
                return redirect()->route('admin.manage-data.index', $data->publicationTag->slug)->with('success', 'Data berhasil ditambahkan!');
            }
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan data!');
        }
    }

    public function dataEdit($id)
    {
        $media = Media::findOrFail($id);
        $model = PublicationDetail::with('publicationTag')->where('id', $media->model_id)->first();
        $userRole = auth()->user()->roles->first()->name;
        if ($userRole === 'super-admin') {
            $categories = PublicationDetail::where('publication_tag_id', $model->publication_tag_id)->get();
        } else {
            $categories = PublicationDetail::where('publication_tag_id', $model->publication_tag_id)->where('slug', $userRole)->get();
        }
        $data = [
            'id' => $media->id,
            'name' => $media->name,
            'category' => $media->collection_name,
            'file_url' => $media->getUrl(),
        ];
        return view('admin.manage-data.edit', [
            'title' => 'Edit Data ' . $model->publicationTag->name,
            'active' => $model->publicationTag->slug,
            'tag' => $model->publicationTag->name,
            'data' => $data,
            'categories' => $categories
        ]);
    }

    public function dataUpdate(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required',
                'category' => 'required',
                'file' => 'file|mimes:pdf|max:5120',
            ]);

            $media = Media::findOrFail($id);
            $model = PublicationDetail::with('publicationTag')->where('id', $media->model_id)->first();

            $userRole = auth()->user()->roles->first()->name;

            if ($userRole != 'super-admin') {
                if ($userRole !== $model->slug) {
                    return redirect()->back()->with('error', 'Anda tidak memiliki akses!');
                }
            }

            if ($media->file_name !== $request->name) {
                $file_name = Str::slug('file_' . $request->name) . '-' . time();
                $media->update([
                    'name' => $request->name,
                    'file_name' => $file_name,
                ]);
            }

            if ($media->collection_name !== $request->category) {
                $categories = PublicationDetail::where('slug', $request->category)->first();
                $media->update([
                    'collection_name' => $request->category,
                    'model_id' => $categories->id,
                ]);
            }

            if ($request->hasFile('file')) {
                $media = Media::findOrFail($id);
                $model = PublicationDetail::with('publicationTag')->where('id', $media->model_id)->first();
                $file_name = Str::slug('file_' . $request->name) . '-' . time();
                $media->delete();
                $model->addMediaFromRequest('file')->usingName($request->name)->usingFileName($file_name)->toMediaCollection($model->slug);
            }

            if ($model->publicationTag->slug === 'layanan') {
                return redirect()->route('admin.manage-service.index')->with('success', 'Data berhasil diperbarui!');
            }
            return redirect()->route('admin.manage-data.index', $model->publicationTag->slug)->with('success', 'Data berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal memperbarui data!');
        }
    }

    public function dataDestroy($id)
    {
        try {
            $media = Media::findOrFail($id);
            $userRole = auth()->user()->roles->first()->name;
            if ($userRole != 'super-admin') {
                $model = PublicationDetail::with('publicationTag')->where('id', $media->model_id)->first();
                if ($userRole !== $model->slug) {
                    return response()->json(['message' => 'Anda tidak memiliki akses!'], 403);
                }
            }
            $media->delete();
            return response()->json(['message' => 'Data berhasil dihapus!'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Gagal menghapus data!'], 500);
        }
    }

    public function service()
    {
        $showBasicLawTag = PublicationTag::where('slug', 'layanan')->first();
        $userRole = auth()->user()->roles->first()->name;
        if ($userRole === 'super-admin') {
            $showBasicLawDetail = PublicationDetail::with('publicationTag')->where('publication_tag_id', $showBasicLawTag->id)->get();
        } else {
            $showBasicLawDetail = PublicationDetail::with('publicationTag')->where('publication_tag_id', $showBasicLawTag->id)->where('slug', $userRole)->get();
        }
        $data = [];
        foreach ($showBasicLawDetail as $item) {
            $mediaFiles = $item->getMedia($item->slug)->map(function ($media) use ($item) {
                return [
                    'id' => $media->id,
                    'publication_tag_name' => $item->publicationTag->name,
                    'category' => $item->category,
                    'category_slug' => $item->slug,
                    'name' => $media->name,
                    'file_name' => $media->file_name,
                    'collection_name' => $media->collection_name,
                    'url' => $media->getUrl(),
                ];
            });
            $data = array_merge($data, $mediaFiles->toArray());
        }

        return view('admin.manage-service.index', [
            'title' => 'Manajemen Data ' . $showBasicLawTag->name,
            'active' => $showBasicLawTag->slug,
            'tag' => $showBasicLawTag->name,
            'data' => $data
        ]);
    }

    public function settingEdit()
    {
        $setting = Setting::all();
        foreach ($setting as $item) {
            $data[$item->slug] = $item->value;
        }
        return view('admin.sett.edit', [
            'title' => 'Pengaturan Umum',
            'active' => 'pengaturan-umum',
            'setting' => $data
        ]);
    }

    public function settingUpdate(Request $request)
    {
        $update = [
            'alamat' => $request->address,
            'telepon' => $request->telephone,
            'bidang-perizinan-kelembagaan-pengawasan-dan-pemeriksaan' => $request->bidang_perizinan_kelembagaan_pengawasan_dan_pemeriksaan,
            'bidang-pemberdayaan-koperasi-dan-usaha-mikro' => $request->bidang_pemberdayaan_koperasi_dan_usaha_mikro,
            'uptd-metrologi-legal' => $request->uptd_metrologi_legal,
            'bidang-perindustrian' => $request->bidang_perindustrian,
            'bidang-perdagangan' => $request->bidang_perdagangan,
            'uptd-pasar' => $request->uptd_pasar,
        ];
        foreach ($update as $key => $value) {
            if ($value !== null) {
                $setting = Setting::where('slug', $key)->first();
                if ($setting) {
                    $setting->update(['value' => $value]);
                }
            }
        }

        return redirect()->route('admin.manage-setting.edit')->with('success', 'Pengaturan berhasil diperbarui!');
    }

    public function settingUser()
    {
        $users = User::with('roles')->get()->map(function ($user) {
            return [
                'name' => $user->name,
                'username' => $user->username,
                'role' => $user->getRoleNames()[0],
            ];
        });
        return view('admin.manage-setting-user.index', [
            'title' => 'Pengaturan Pengguna',
            'active' => 'pengaturan-pengguna',
            'users' => $users
        ]);
    }
    public function settingUserCreate()
    {
        $roles = Role::get()->map(function ($role) {
            return [
                'name' => $role->name,
            ];
        });
        return view('admin.manage-setting-user.create', [
            'title' => 'Tambah Pengguna',
            'active' => 'pengaturan-pengguna',
            'roles' => $roles
        ]);
    }

    public function settingUserStore(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'username' => 'required',
                'role' => 'required',
            ]);

            $user = User::create([
                'name' => $request->name,
                'username' => $request->username,
                // 'password' => Hash::make($request->password),
                'password' => bcrypt($request->password),
            ]);

            $user->assignRole($request->role);

            return redirect()->route('admin.manage-setting-user.index')->with('success', 'Pengguna berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan pengguna!');
        }
    }

    public function settingUserEdit($username)
    {
        try {
            $user = User::where('username', $username)->get()->map(function ($user) {
                return [
                    'name' => $user->name,
                    'username' => $user->username,
                    'role' => $user->getRoleNames()[0],
                ];
            });
            $roles = Role::get()->map(function ($role) {
                return [
                    'name' => $role->name,
                ];
            });

            return view('admin.manage-setting-user.edit', [
                'title' => 'Edit Pengguna',
                'active' => 'pengaturan-pengguna',
                'user' => $user[0],
                'roles' => $roles
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menampilkan pengguna!');
        }
    }

    public function settingUserUpdate(Request $request, $username)
    {
        try {
            $request->validate([
                'name' => 'required',
                'username' => 'required',
                'role' => 'required',
            ]);

            $user = User::where('username', $username)->first();
            $user->update([
                'name' => $request->name,
                'username' => $request->username,
            ]);
            if ($request->password !== null) {
                $user->update([
                    'password' => bcrypt($request->password),
                ]);
            }
            $user->syncRoles($request->role);

            if (Auth::user()->username === $username) {
                Auth::logout();
            }

            return redirect()->route('admin.manage-setting-user.index')->with('success', 'Pengguna berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal memperbarui pengguna!');
        }
    }

    public function settingUserDestroy($username)
    {
        try {
            $user = User::where('username', $username)->first();
            $user->delete();
            return response()->json(['message' => 'Pengguna berhasil dihapus!'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Gagal menghapus pengguna!'], 500);
        }
    }

    public function video()
    {
        try {
            $tagId = NewsTag::where('slug', 'galeri-video')->first()->id;
            $videos = NewsDetail::where('news_tag_id', $tagId)->orderBy('created_at', 'DESC')->get()->map(function ($item) {
                return [
                    'slug' => $item->slug,
                    'title' => $item->title,
                    'url' => $item->description,
                ];
            });

            return view('admin.manage-video.index', [
                'title' => 'Manajemen Video',
                'active' => 'video',
                'videos' => $videos
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menampilkan video!');
        }
    }

    public function videoCreate()
    {
        return view('admin.manage-video.create', [
            'title' => 'Tambah Video',
            'active' => 'video',
        ]);
    }

    public function videoStore(Request $request)
    {
        try {
            $request->validate([
                'video_title' => 'required',
                'video_url' => 'required',
            ]);

            NewsDetail::create([
                'news_tag_id' => 4,
                'slug' => Str::slug($request->video_title) . '-' . time(),
                'title' => $request->video_title,
                'description' => $request->video_url,
                'date_news' => now(),
                'author' => auth()->user()->name,
            ]);

            return redirect()->route('admin.manage-video.index')->with('success', 'Video berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan video!');
        }
    }
    
    public function videoEdit($slug){
        $video = NewsDetail::where('slug', $slug)->get()->map(function ($item) {
            return [
                'slug' => $item->slug,
                'title' => $item->title,
                'url' => $item->description,
            ];
        });
        return view('admin.manage-video.edit', [
            'title' => 'Edit Video',
            'active' => 'video',
            'video' => $video
        ]);
    }

    public function videoUpdate(Request $request){
        try {
            $request->validate([
                'video_title' => 'required',
                'video_url' => 'required',
            ]);

            $video = NewsDetail::where('slug', $request->slug)->first();
            $video->update([
                'title' => $request->video_title,
                'description' => $request->video_url,
            ]);

            return redirect()->route('admin.manage-video.index')->with('success', 'Video berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal memperbarui video!');
        }
    }

    public function videoDestroy($slug)
    {
        try {
            $newsDetail = NewsDetail::where('slug', $slug)->first();
            $newsDetail->delete();
            return response()->json(['message' => 'Pengguna berhasil dihapus!'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Gagal menghapus pengguna!'], 500);
        }
    }
}
