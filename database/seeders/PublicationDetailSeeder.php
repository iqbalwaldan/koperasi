<?php

namespace Database\Seeders;

use App\Models\PublicationDetail;
use App\Models\PublicationTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class PublicationDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $publicationDetails = [
            [
                'publication_tag_id' => 1,
                'category' => 'Undang Undang',
                'file' => [
                    [
                        'title' => 'UU NO 23 TAHUN 2014 TENTANG PEMERINTAHAN DAERAH',
                        'url' => 'assets/file/UU NO 23 TAHUN 2014 TENTANG PEMERINTAHAN DAERAH.pdf'
                    ],
                    [
                        'title' => 'UU NO 7 TAHUN 2014 TENTANG PERDAGANGAN',
                        'url' => 'assets/file/UU NO 7 TAHUN 2014 TENTANG PERDAGANGAN-compressed.pdf',
                    ],
                ]
            ],
        ];

        foreach ($publicationDetails as $publicationDetail) {
            $publicationDetaill = PublicationDetail::create([
                'publication_tag_id' => $publicationDetail['publication_tag_id'],
                'category' => $publicationDetail['category'],
            ]);

            // create slug from title

            foreach ($publicationDetail['file'] as $file) {
                $slugTitle = \Str::slug($file['title']);
                $slugCategory = \Str::slug($publicationDetail['category']);

                $destinationPath = "file_{$slugTitle}.pdf";
                // Storage::disk('public')->put($destinationPath, file_get_contents(public_path($file['url'])));
                Storage::disk('public')->put($destinationPath, file_get_contents(storage_path("app/public/{$file['url']}")));

                $publicationDetaill->addMediaFromDisk($destinationPath, 'public')->usingName($file['title'])->toMediaCollection($slugCategory);
            }
        }
    }
}
