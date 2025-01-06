<?php

namespace App\Http\Controllers\Client\User;

use App\Http\Controllers\Controller;
use App\Models\ProfileDetail;
use App\Models\ProfileTag;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function organizationalStructure()
    {
        $organizationalStructure = ProfileDetail::where('profile_tag_id', 1)->first();

        if ($organizationalStructure) {
            $organizationalStructure->image_url = $organizationalStructure->getFirstMediaUrl('struktur-organisasi');
        }

        return view('user.profile.organizational-structure.index', [
            'title' => 'Struktur Organisasi',
            'organizationalStructure' => $organizationalStructure
        ]);
    }

    public function visiMisi()
    {
        $visionMissionTag = ProfileTag::where('slug', 'visi-dan-misi')->first();
        $visionMission = ProfileDetail::where('id', $visionMissionTag->id)->first();

        return view('user.profile.visi-misi.index', [
            'title' => 'Visi Misi',
            'visionMission' => $visionMission
        ]);
    }

    public function regulationsLegalBasis()
    {
        $regulationsLegalBasisTag = ProfileTag::where('slug', 'regulasi-dan-dasar-hukum')->first();
        $regulationsLegalBasis = ProfileDetail::where('id', $regulationsLegalBasisTag->id)->first();

        return view('user.profile.regulations-legal-basis.index', [
            'title' => 'Regulasi dan Dasar Hukum',
            'regulationsLegalBasis' => $regulationsLegalBasis
        ]);
    }

    // public function ministryHistory()
    // {
    //     $historyTag = ProfileTag::where('slug', 'sejarah')->first();
    //     $history = ProfileDetail::where('id', $historyTag->id)->first();

    //     return view('user.profile.ministry-history.index', [
    //         'title' => 'Sejarah',
    //         'history' => $history
    //     ]);
    // }

    public function dutiesFunctions()
    {
        $dutiesFunctionsTag = ProfileTag::where('slug', 'tugas-dan-fungsi')->first();
        $dutiesFunctions = ProfileDetail::where('id', $dutiesFunctionsTag->id)->first();

        return view('user.profile.duties-functions.index', [
            'title' => 'Regulasi, Tugas dan Fungsi',
            'dutiesFunctions' => $dutiesFunctions
        ]);
    }

}
