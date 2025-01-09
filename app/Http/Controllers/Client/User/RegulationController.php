<?php

namespace App\Http\Controllers\Client\User;

use App\Http\Controllers\Controller;
use App\Models\PublicationDetail;
use App\Models\PublicationTag;
use Illuminate\Http\Request;

class RegulationController extends Controller
{
    public function index($slug)
    {
        
        $showBasicLawTag = PublicationTag::where('slug', 'regulasi')->first();
        $showBasicLawDetail = PublicationDetail::where('publication_tag_id', $showBasicLawTag->id)->where('slug', $slug)->first();
        if (!$showBasicLawDetail || !$showBasicLawDetail->getMedia($slug)->count()) {
            $showBasicLawDetailFile = null;
        } else {
            $showBasicLawDetailFile = $showBasicLawDetail->getMedia($slug)->map(function ($media) {
                return [
                    'name' => $media->name,
                    'url'  => $media->getUrl(),
                ];
            });
        }
        // dd($showBasicLawDetailFile);

        // dd($showBasicLawTagFile);


        // $showBasicLawDetails = PublicationDetail::where('publication_tag_id', $showBasicLawTag->id)->get();
        // $showBasicLawDetail = PublicationDetail::where('publication_tag_id', $showBasicLawTag->id)->first();
        // // get media library name
        // $showBasicLawDetail = $showBasicLawDetail->getMedia($showBasicLawTag->slug);
        // dd($showBasicLawDetail[0]->name);

        // if ($showBasicLawDetails) {
        //     $showBasicLawDetails->each(function ($detail) use ($showBasicLawTag) {
        //         $detail->file_urls = $detail->getMedia($showBasicLawTag->slug)->map(function ($media) use ($detail) {
        //             return (object) [
        //                 'url' => $media->getUrl(),
        //                 'title' => $detail->title,
        //             ];
        //         });
        //     });
        // }

        return view('user.regulation.index', [
            'title' =>  $showBasicLawTag->name,
            'showBasicLaws' => $showBasicLawDetailFile
        ]);
    }
}
