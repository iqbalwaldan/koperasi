<?php

namespace App\Http\Controllers\Client\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
