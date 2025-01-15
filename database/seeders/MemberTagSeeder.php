<?php

namespace Database\Seeders;

use App\Models\MemberTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Kepala Dinas',
                'slug' => 'kepala-dinas',
            ],
            [
                'name' => 'Sekretaris Dinas',
                'slug' => 'sekretaris-dinas',
            ],
            [
                'name' => 'ESELON III',
                'slug' => 'eselon-iii',
            ],
            [
                'name' => 'ESELON IV, JFT, SUB KOORDINATOR DAN PELAKSANA',
                'slug' => 'eselon-iv-jft-sub-koordinator-dan-pelaksana',
            ]
        ];

        foreach ($data as $tag) {
            MemberTag::create([
                'name' => $tag['name'],
                'slug' => $tag['slug'],
            ]);
        }
    }
}
