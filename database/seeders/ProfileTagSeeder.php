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
            ['Visi dan Misi', 'visi-dan-misi'],
            ['Regulasi, Tugas dan Fungsi', 'regulasi-tugas-dan-fungsi'],
        ];

        foreach ($tags as $tag) {
            ProfileTag::create([
                'name' => $tag[0],
                'slug' => $tag[1],
            ]);
        }
    }
}
