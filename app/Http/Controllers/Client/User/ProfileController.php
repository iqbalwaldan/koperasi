<?php

namespace App\Http\Controllers\Client\User;

use App\Http\Controllers\Controller;
use App\Models\MemberDetail;
use App\Models\MemberTag;
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
    public function memberStructure()
    {
        $members = MemberDetail::with('memberTag')->get();

        $data = $members->flatMap(function ($member) {
            return $member->getMedia($member->memberTag->slug)->map(function ($media) use ($member) {
                return [
                    'name' => $member->name,
                    'image_url' => $media->getUrl(),
                    'position' => $member->position,
                    'slug' => $member->memberTag->slug,
                ];
            });
        });
        
        return view('user.profile.member-structure.index', [
            'title' => 'Struktur Keanggotaan',
            'members' => $data
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

    public function dutiesFunctions()
    {
        $dutiesFunctionsTag = ProfileTag::where('slug', 'regulasi-tugas-dan-fungsi')->first();
        $dutiesFunctions = ProfileDetail::where('id', $dutiesFunctionsTag->id)->first();

        return view('user.profile.duties-functions.index', [
            'title' => 'Regulasi, Tugas dan Fungsi',
            'dutiesFunctions' => $dutiesFunctions
        ]);
    }
}
