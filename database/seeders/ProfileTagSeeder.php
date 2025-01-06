<?php

namespace Database\Seeders;

use App\Models\ProfileTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            ['Struktur Organisasi', 'struktur-organisasi'],
            ['Sejarah', 'sejarah'],
            ['Visi dan Misi', 'visi-dan-misi'],
            ['Tugas dan Fungsi', 'tugas-dan-fungsi'],
            ['Regulasi dan Dasar Hukum', 'regulasi-dan-dasar-hukum'],
        ];

        foreach ($tags as $tag) {
            ProfileTag::create([
                'name' => $tag[0],
                'slug' => $tag[1],
            ]);
        }
    }
}
