<?php

namespace Database\Seeders;

use App\Models\NewsTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            ['Siaran Pers', 'siaran-pers'],
            // ['Berita Media', 'berita-media'],
            ['Galeri Foto', 'galeri-foto'],
            ['Kegiatan', 'kegiatan'],
            ['Galeri Video', 'galeri-video'],
        ];

        foreach ($tags as $tag) {
            NewsTag::create([
                'name' => $tag[0],
                'slug' => $tag[1],
            ]);
        }
    }
}
