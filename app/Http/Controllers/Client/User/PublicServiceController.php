<?php

namespace App\Http\Controllers\Client\User;

use App\Http\Controllers\Controller;
use App\Models\PublicationDetail;
use App\Models\PublicationTag;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class PublicServiceController extends Controller
{
    public function index()
    {
        return view('user.public-service.index', [
            'title' => 'Layanan Publik',
        ]);
    }

    public function tradeSector()
    {
        return view('user.public-service.detail.trade-sector.index', [
            'title' => 'Bidang Perdagangan',
        ]);
    }
    public function umkm()
    {
        return view('user.public-service.detail.umkm.index', [
            'title' => 'Bidang Pemberdayaan Koperasi dan Usaha Mikro',
        ]);
    }

    public function serviceDetail($slug) {
        $tag = PublicationTag::where('slug', 'layanan')->first();
        $files = PublicationDetail::where('publication_tag_id', $tag->id)
            ->where('slug', $slug)
            ->orderBy('created_at', 'DESC')
            ->first();
    
        if (!$files) {
            abort(404, 'Data tidak ditemukan');
        }
    
        $mediaCollection = $files->getMedia($files->slug)->map(function ($media) use ($files) {
            return [
                'name' => $media->name,
                'file_url' => $media->getUrl(),
            ];
        });
    
        $perPage = 20;
        $currentPage = request()->get('page', 1);
        $pagedData = $mediaCollection->slice(($currentPage - 1) * $perPage, $perPage)->values();
        $paginatedMedia = new LengthAwarePaginator($pagedData, $mediaCollection->count(), $perPage, $currentPage, [
            'path' => request()->url(),
            'query' => request()->query(),
        ]);
    
        return view('user.public-service.detail.index', [
            'title' => 'Layanan ' . $files->category,
            'files' => $paginatedMedia,
        ]);
    }
}
