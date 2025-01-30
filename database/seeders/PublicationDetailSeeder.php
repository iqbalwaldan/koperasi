<?php

namespace Database\Seeders;

use App\Models\PublicationDetail;
use App\Models\PublicationTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


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
                'slug' => 'undang-undang',
                'file' => [
                    [
                        'title' => 'UU NO 23 TAHUN 2014 TENTANG PEMERINTAHAN DAERAH',
                        'url' => url('assets/file/'.rawurlencode('UU NO 23 TAHUN 2014 TENTANG PEMERINTAHAN DAERAH.pdf'))
                    ],
                    [
                        'title' => 'UU NO 7 TAHUN 2014 TENTANG PERDAGANGAN',
                        'url' => url('assets/file/'.rawurlencode('UU NO 7 TAHUN 2014 TENTANG PERDAGANGAN-compressed.pdf'))
                    ],
                ]
            ],
            [
                'publication_tag_id' => 1,
                'category' => 'Peraturan Pengganti Undang Undang',
                'slug' => 'peraturan-pengganti-undang-undang',
                'file' => [
                    [
                        'title' => 'UU NO 11 TAHUN 2014 TENTANG PEMERINTAHAN DAERAH',
                        'url' => url('assets/file/'.rawurlencode('UU NO 23 TAHUN 2014 TENTANG PEMERINTAHAN DAERAH.pdf'))
                    ],
                    [
                        'title' => 'UU NO 12 TAHUN 2014 TENTANG PERDAGANGAN',
                        'url' => url('assets/file/'.rawurlencode('UU NO 7 TAHUN 2014 TENTANG PERDAGANGAN-compressed.pdf')),
                    ],
                ]
            ],
            [
                'publication_tag_id' => 1,
                'category' => 'Peraturan Pemerintah',
                'slug' => 'peraturan-pemerintah',
            ],
            [
                'publication_tag_id' => 1,
                'category' => 'Peraturan Presiden',
                'slug' => 'peraturan-presiden',
            ],
            [
                'publication_tag_id' => 1,
                'category' => 'Peraturan Mentri',
                'slug' => 'peraturan-mentri',
            ],
            [
                'publication_tag_id' => 1,
                'category' => 'Peraturan Pemerintah Provinsi',
                'slug' => 'peraturan-pemerintah-provinsi',
            ],
            [
                'publication_tag_id' => 1,
                'category' => 'Peraturan Gubernur',
                'slug' => 'peraturan-gubernur',
            ],
            [
                'publication_tag_id' => 1,
                'category' => 'Peraturan Daerah',
                'slug' => 'peraturan-daerah',
            ],
            [
                'publication_tag_id' => 1,
                'category' => 'Peraturan Bupati',
                'slug' => 'peraturan-bupati',
            ],
            [
                'publication_tag_id' => 1,
                'category' => 'Surat Kuasa Bupati',
                'slug' => 'surat-kuasa-bupati',
            ],
            [
                'publication_tag_id' => 1,
                'category' => 'Surat Kuasa Dinas',
                'slug' => 'surat-kuasa-dinas',
            ],
            [
                'publication_tag_id' => 1,
                'category' => 'Lain-lain',
                'slug' => 'lain-lain',
            ],
            [
                'publication_tag_id' => 2,
                'category' => 'Bidang Perdagangan',
                'slug' => 'bidang-perdagangan',
                'file' => [
                    [
                        'title' => 'Form Permohonan Izin Usaha Perdagangan',
                        'url' => url('assets/file/'.rawurlencode('file.pdf'))
                    ],
                    [
                        'title' => 'Form Pendaftaran Usaha Perdagangan',
                        'url' => url('assets/file/'.rawurlencode('file.pdf'))
                    ],
                ]
            ],
            [
                'publication_tag_id' => 2,
                'category' => 'Bidang Perindustrian',
                'slug' => 'bidang-perindustrian',
                'file' => [
                    [
                        'title' => 'Form Permohonan Izin Usaha Perindustrian',
                        'url' => url('assets/file/'.rawurlencode('file.pdf'))
                    ],
                    [
                        'title' => 'Form Pendaftaran Usaha Perindustrian',
                        'url' => url('assets/file/'.rawurlencode('file.pdf'))
                    ],
                ]
            ],
            [
                'publication_tag_id' => 2,
                'category' => 'Bidang Pemberdayaan Koperasi dan Usaha Mikro',
                'slug' => 'bidang-pemberdayaan-koperasi-dan-usaha-mikro',
                'file' => [
                    [
                        'title' => 'Form Permohonan Izin Usaha Koperasi',
                        'url' => url('assets/file/'.rawurlencode('file.pdf'))
                    ],
                    [
                        'title' => 'Form Pendaftaran Usaha Koperasi',
                        'url' => url('assets/file/'.rawurlencode('file.pdf'))
                    ],
                ]
            ],
            [
                'publication_tag_id' => 2,
                'category' => 'Bidang Perizinan Kelembagaan Pengawasan dan Pemeriksaan',
                'slug' => 'bidang-perizinan-kelembagaan-pengawasan-dan-pemeriksaan',
                'file' => [
                    [
                        'title' => 'Form Laporan Pengawasan',
                        'url' => url('assets/file/'.rawurlencode('file.pdf'))
                    ],
                    [
                        'title' => 'Form Laporan Pemeriksaan',
                        'url' => url('assets/file/'.rawurlencode('file.pdf'))
                    ],
                ]
            ],
            [
                'publication_tag_id' => 2,
                'category' => 'UPTD Pasar',
                'slug' => 'uptd-pasar',
                'file' => [
                    [
                        'title' => 'Form Pendaftaran Pedagang Pasar',
                        'url' => url('assets/file/'.rawurlencode('file.pdf'))
                    ],
                    [
                        'title' => 'Form Pendataan Kios Pasar',
                        'url' => url('assets/file/'.rawurlencode('file.pdf'))
                    ],
                ]
            ],
            [
                'publication_tag_id' => 2,
                'category' => 'UPTD Metrologi Legal',
                'slug' => 'uptd-metrologi-legal',
                'file' => [
                    [
                        'title' => 'Form Pendaftaran Alat Ukur',
                        'url' => url('assets/file/'.rawurlencode('file.pdf'))
                    ],
                    [
                        'title' => 'Form Pendaftaran Jasa Metrologi',
                        'url' => url('assets/file/'.rawurlencode('file.pdf'))
                    ],
                ]
            ],
            [
                'publication_tag_id' => 3,
                'category' => 'Informasi Publik',
                'slug' => 'informasi-publik',
                'file' => [
                    [
                        'title' => 'Laporan Keuangan Tahun 2024',
                        'url' => url('assets/file/'.rawurlencode('file.pdf'))
                    ],
                ]
            ],
            [
                'publication_tag_id' => 3,
                'category' => 'Informasi Harga',
                'slug' => 'informasi-harga',
                'file' => [
                    [
                        'title' => 'Harga Bahan Pokok Tanggal 16 Jan 2025',
                        'url' => url('assets/file/'.rawurlencode('Harga Bahan Pokok Tanggal 16 Jan 2025.pdf'))
                    ],
                    [
                        'title' => 'Harga Bahan Pokok Tanggal 17 Jan 2025',
                        'url' => url('assets/file/'.rawurlencode('Harga Bahan Pokok Tanggal 17 Jan 2025.pdf')),
                    ],
                ]
            ],
        ];

        foreach ($publicationDetails as $publicationDetail) {
            $publicationDetaill = PublicationDetail::create([
                'publication_tag_id' => $publicationDetail['publication_tag_id'],
                'category' => $publicationDetail['category'],
                'slug' => $publicationDetail['slug'],
            ]);

            // create slug from title

            if (!isset($publicationDetail['file'])) {
                continue;
            }
            foreach ($publicationDetail['file'] as $file) {
                $slugTitle = Str::slug($file['title']);
                $slugCategory = Str::slug($publicationDetail['category']);

                $destinationPath = "file_{$slugTitle}.pdf";

                $publicationDetaill->addMediaFromUrl($file['url'])->usingName($file['title'])->usingFileName($destinationPath)->toMediaCollection($slugCategory);
            }
        }
    }
}
