<?php

namespace App\Http\Controllers\Client\User;

use App\Http\Controllers\Controller;
use App\Models\PublicationDetail;
use App\Models\PublicationTag;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class RegulationController extends Controller
{
    public function index($slug)
    {
        $showBasicLawTag = PublicationTag::where('slug', 'regulasi')->first();
        $showBasicLawDetail = PublicationDetail::where('publication_tag_id', $showBasicLawTag->id)->where('slug', $slug)->first();

        if (!$showBasicLawDetail || !$showBasicLawDetail->getMedia($slug)->count()) {
            $showBasicLawDetailFile = collect([]);
        } else {
            $showBasicLawDetailFile = $showBasicLawDetail->getMedia($slug)->map(function ($media) {
                return [
                    'name' => $media->name,
                    'url'  => $media->getUrl(),
                ];
            });
        }

        $perPage = 20;
        $currentPage = Paginator::resolveCurrentPage() ?: 1;
        $currentItems = $showBasicLawDetailFile->slice(($currentPage - 1) * $perPage, $perPage)->values();
        $paginatedItems = new LengthAwarePaginator($currentItems, $showBasicLawDetailFile->count(), $perPage, $currentPage, [
            'path' => Paginator::resolveCurrentPath(),
        ]);

        return view('user.regulation.index', [
            'title' =>  $showBasicLawTag->name,
            'showBasicLaws' => $paginatedItems
        ]);
    }
}
