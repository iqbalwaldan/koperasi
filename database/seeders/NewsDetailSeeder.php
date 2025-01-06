<?php

namespace Database\Seeders;

use App\Models\NewsDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class NewsDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newsDetails = [
            [
                'news_tag_id' => 1,
                'title' => 'Menkop Pastikan Kesiapan Program Dukung Asta Cita Swasembada Pangan1',
                'slug' => 'menkop-pastikan-kesiapan-program-dukung-asta-cita-swasembada-pangan1',
                'description' => '<p>Jakarta - Menteri Koperasi (Menkop) Budi Arie Setiadi menyampaikan kesiapan Kementerian Koperasi (Kemenkop) dalam mendukung program Pemerintah. Mulai dari penguatan kelembagaan koperasi, swasembada pangan, hilirisasi hingga menyukseskan program Makan Bergizi Gratis (MBG).</p><br><br><p>“Peran Kemenkop ini mendukung Asta Cita 2 terkait swasembada pangan, serta prioritas Asta Cita 3 terkait pengembangan industri agro-maritim berbasis koperasi dan industrialisasi melalui koperasi,” ucapnya dalam Rapat Tingkat Menteri bersama Menteri Koordinator (Menko) Bidang Pemberdayaan Masyarakat, di Jakarta, Selasa (3/12/2024).</p>',
                'date_news' => '2024-12-04',
                'author' => 'Admin',
                'image_path' => [
                    'assets/img/news/1.jpeg',
                ]

            ],
            [
                'news_tag_id' => 1,
                'title' => 'Menkop Pastikan Kesiapan Program Dukung Asta Cita Swasembada Pangan2 Menkop Pastikan Kesiapan Program Dukung Asta Cita Swasembada Pangan2 Menkop Pastikan Kesiapan Program Dukung Asta Cita Swasembada Pangan2',
                'slug' => 'menkop-pastikan-kesiapan-program-dukung-asta-cita-swasembada-pangan2',
                'description' => '<p>Jakarta - Menteri Koperasi (Menkop) Budi Arie Setiadi menyampaikan kesiapan Kementerian Koperasi (Kemenkop) dalam mendukung program Pemerintah. Mulai dari penguatan kelembagaan koperasi, swasembada pangan, hilirisasi hingga menyukseskan program Makan Bergizi Gratis (MBG).</p><br><br><p>“Peran Kemenkop ini mendukung Asta Cita 2 terkait swasembada pangan, serta prioritas Asta Cita 3 terkait pengembangan industri agro-maritim berbasis koperasi dan industrialisasi melalui koperasi,” ucapnya dalam Rapat Tingkat Menteri bersama Menteri Koordinator (Menko) Bidang Pemberdayaan Masyarakat, di Jakarta, Selasa (3/12/2024).</p>',
                'date_news' => '2024-12-06',
                'author' => 'Admin',
                'image_path' => [
                    'assets/img/news/2.jpeg',
                ]
            ],
            [
                'news_tag_id' => 1,
                'title' => 'Menkop Pastikan Kesiapan Program Dukung Asta Cita Swasembada Pangan3',
                'slug' => 'menkop-pastikan-kesiapan-program-dukung-asta-cita-swasembada-pangan3',
                'description' => '<p>Jakarta - Menteri Koperasi (Menkop) Budi Arie Setiadi menyampaikan kesiapan Kementerian Koperasi (Kemenkop) dalam mendukung program Pemerintah. Mulai dari penguatan kelembagaan koperasi, swasembada pangan, hilirisasi hingga menyukseskan program Makan Bergizi Gratis (MBG).</p><br><br><p>“Peran Kemenkop ini mendukung Asta Cita 2 terkait swasembada pangan, serta prioritas Asta Cita 3 terkait pengembangan industri agro-maritim berbasis koperasi dan industrialisasi melalui koperasi,” ucapnya dalam Rapat Tingkat Menteri bersama Menteri Koordinator (Menko) Bidang Pemberdayaan Masyarakat, di Jakarta, Selasa (3/12/2024).</p>',
                'date_news' => '2024-12-04',
                'author' => 'Admin',
                'image_path' => [
                    'assets/img/news/3.jpg',
                ]
            ],
            [
                'news_tag_id' => 1,
                'title' => 'Menkop Pastikan Kesiapan Program Dukung Asta Cita Swasembada Pangan3',
                'slug' => 'menkop-pastikan-kesiapan-program-dukung-asta-cita-swasembada-pangan4',
                'description' => '<p>Jakarta - Menteri Koperasi (Menkop) Budi Arie Setiadi menyampaikan kesiapan Kementerian Koperasi (Kemenkop) dalam mendukung program Pemerintah. Mulai dari penguatan kelembagaan koperasi, swasembada pangan, hilirisasi hingga menyukseskan program Makan Bergizi Gratis (MBG).</p><br><br><p>“Peran Kemenkop ini mendukung Asta Cita 2 terkait swasembada pangan, serta prioritas Asta Cita 3 terkait pengembangan industri agro-maritim berbasis koperasi dan industrialisasi melalui koperasi,” ucapnya dalam Rapat Tingkat Menteri bersama Menteri Koordinator (Menko) Bidang Pemberdayaan Masyarakat, di Jakarta, Selasa (3/12/2024).</p>',
                'date_news' => '2024-12-10',
                'author' => 'Admin',
                'image_path' => [
                    'assets/img/news/4.jpg',
                ]
            ],
            [
                'news_tag_id' => 1,
                'title' => 'Menkop Pastikan Kesiapan Program Dukung Asta Cita Swasembada Pangan5',
                'slug' => 'menkop-pastikan-kesiapan-program-dukung-asta-cita-swasembada-pangan5',
                'description' => '<p>Jakarta - Menteri Koperasi (Menkop) Budi Arie Setiadi menyampaikan kesiapan Kementerian Koperasi (Kemenkop) dalam mendukung program Pemerintah. Mulai dari penguatan kelembagaan koperasi, swasembada pangan, hilirisasi hingga menyukseskan program Makan Bergizi Gratis (MBG).</p><br><br><p>“Peran Kemenkop ini mendukung Asta Cita 2 terkait swasembada pangan, serta prioritas Asta Cita 3 terkait pengembangan industri agro-maritim berbasis koperasi dan industrialisasi melalui koperasi,” ucapnya dalam Rapat Tingkat Menteri bersama Menteri Koordinator (Menko) Bidang Pemberdayaan Masyarakat, di Jakarta, Selasa (3/12/2024).</p>',
                'date_news' => '2024-12-04',
                'author' => 'Admin',
                'image_path' => [
                    'assets/img/news/5.jpg',
                ]
            ],
            [
                'news_tag_id' => 1,
                'title' => 'Menkop Pastikan Kesiapan Program Dukung Asta Cita Swasembada Pangan5',
                'slug' => 'menkop-pastikan-kesiapan-program-dukung-asta-cita-swasembada-pangan6',
                'description' => '<p>Jakarta - Menteri Koperasi (Menkop) Budi Arie Setiadi menyampaikan kesiapan Kementerian Koperasi (Kemenkop) dalam mendukung program Pemerintah. Mulai dari penguatan kelembagaan koperasi, swasembada pangan, hilirisasi hingga menyukseskan program Makan Bergizi Gratis (MBG).</p><br><br><p>“Peran Kemenkop ini mendukung Asta Cita 2 terkait swasembada pangan, serta prioritas Asta Cita 3 terkait pengembangan industri agro-maritim berbasis koperasi dan industrialisasi melalui koperasi,” ucapnya dalam Rapat Tingkat Menteri bersama Menteri Koordinator (Menko) Bidang Pemberdayaan Masyarakat, di Jakarta, Selasa (3/12/2024).</p>',
                'date_news' => '2024-12-20',
                'author' => 'Admin',
                'image_path' => [
                    'assets/img/news/6.jpg',
                ]

            ],
            [
                'news_tag_id' => 1,
                'title' => 'Menkop Pastikan Kesiapan Program Dukung Asta Cita Swasembada Pangan5',
                'slug' => 'menkop-pastikan-kesiapan-program-dukung-asta-cita-swasembada-pangan7',
                'description' => '<p>Jakarta - Menteri Koperasi (Menkop) Budi Arie Setiadi menyampaikan kesiapan Kementerian Koperasi (Kemenkop) dalam mendukung program Pemerintah. Mulai dari penguatan kelembagaan koperasi, swasembada pangan, hilirisasi hingga menyukseskan program Makan Bergizi Gratis (MBG).</p><br><br><p>“Peran Kemenkop ini mendukung Asta Cita 2 terkait swasembada pangan, serta prioritas Asta Cita 3 terkait pengembangan industri agro-maritim berbasis koperasi dan industrialisasi melalui koperasi,” ucapnya dalam Rapat Tingkat Menteri bersama Menteri Koordinator (Menko) Bidang Pemberdayaan Masyarakat, di Jakarta, Selasa (3/12/2024).</p>',
                'date_news' => '2024-12-04',
                'author' => 'Admin',
                'image_path' => [
                    'assets/img/news/7.jpg',
                ]
            ],
            [
                'news_tag_id' => 1,
                'title' => 'Menkop Pastikan Kesiapan Program Dukung Asta Cita Swasembada Pangan5',
                'slug' => 'menkop-pastikan-kesiapan-program-dukung-asta-cita-swasembada-pangan8',
                'description' => '<p>Jakarta - Menteri Koperasi (Menkop) Budi Arie Setiadi menyampaikan kesiapan Kementerian Koperasi (Kemenkop) dalam mendukung program Pemerintah. Mulai dari penguatan kelembagaan koperasi, swasembada pangan, hilirisasi hingga menyukseskan program Makan Bergizi Gratis (MBG).</p><br><br><p>“Peran Kemenkop ini mendukung Asta Cita 2 terkait swasembada pangan, serta prioritas Asta Cita 3 terkait pengembangan industri agro-maritim berbasis koperasi dan industrialisasi melalui koperasi,” ucapnya dalam Rapat Tingkat Menteri bersama Menteri Koordinator (Menko) Bidang Pemberdayaan Masyarakat, di Jakarta, Selasa (3/12/2024).</p>',
                'date_news' => '2024-12-04',
                'author' => 'Admin',
                'image_path' => [
                    'assets/img/news/8.jpg',
                ]
            ],
            [
                'news_tag_id' => 1,
                'title' => 'Menkop Pastikan Kesiapan Program Dukung Asta Cita Swasembada Pangan5',
                'slug' => 'menkop-pastikan-kesiapan-program-dukung-asta-cita-swasembada-pangan9',
                'description' => '<p>Jakarta - Menteri Koperasi (Menkop) Budi Arie Setiadi menyampaikan kesiapan Kementerian Koperasi (Kemenkop) dalam mendukung program Pemerintah. Mulai dari penguatan kelembagaan koperasi, swasembada pangan, hilirisasi hingga menyukseskan program Makan Bergizi Gratis (MBG).</p><br><br><p>“Peran Kemenkop ini mendukung Asta Cita 2 terkait swasembada pangan, serta prioritas Asta Cita 3 terkait pengembangan industri agro-maritim berbasis koperasi dan industrialisasi melalui koperasi,” ucapnya dalam Rapat Tingkat Menteri bersama Menteri Koordinator (Menko) Bidang Pemberdayaan Masyarakat, di Jakarta, Selasa (3/12/2024).</p>',
                'date_news' => '2024-12-07',
                'author' => 'Admin',
                'image_path' => [
                    'assets/img/news/9.jpg',
                ]
            ],
            [
                'news_tag_id' => 2,
                'title' => 'Menkop Pastikan Kesiapan Program Dukung Asta Cita Swasembada Pangan10',
                'slug' => 'menkop-pastikan-kesiapan-program-dukung-asta-cita-swasembada-pangan10',
                'description' => '<p>Jakarta - Menteri Koperasi (Menkop) Budi Arie Setiadi menyampaikan kesiapan Kementerian Koperasi (Kemenkop) dalam mendukung program Pemerintah. Mulai dari penguatan kelembagaan koperasi, swasembada pangan, hilirisasi hingga menyukseskan program Makan Bergizi Gratis (MBG).</p><br><br><p>“Peran Kemenkop ini mendukung Asta Cita 2 terkait swasembada pangan, serta prioritas Asta Cita 3 terkait pengembangan industri agro-maritim berbasis koperasi dan industrialisasi melalui koperasi,” ucapnya dalam Rapat Tingkat Menteri bersama Menteri Koordinator (Menko) Bidang Pemberdayaan Masyarakat, di Jakarta, Selasa (3/12/2024).</p>',
                'date_news' => '2024-12-10',
                'author' => 'Admin',
                'image_path' => [
                    'assets/img/news/10.jpg',
                    'assets/img/news/2.jpeg',
                    'assets/img/news/3.jpg',
                ]
            ],
            [
                'news_tag_id' => 2,
                'title' => 'Menkop Pastikan Kesiapan Program Dukung Asta Cita Swasembada Pangan11',
                'slug' => 'menkop-pastikan-kesiapan-program-dukung-asta-cita-swasembada-pangan11',
                'description' => '<p>Jakarta - Menteri Koperasi (Menkop) Budi Arie Setiadi menyampaikan kesiapan Kementerian Koperasi (Kemenkop) dalam mendukung program Pemerintah. Mulai dari penguatan kelembagaan koperasi, swasembada pangan, hilirisasi hingga menyukseskan program Makan Bergizi Gratis (MBG).</p><br><br><p>“Peran Kemenkop ini mendukung Asta Cita 2 terkait swasembada pangan, serta prioritas Asta Cita 3 terkait pengembangan industri agro-maritim berbasis koperasi dan industrialisasi melalui koperasi,” ucapnya dalam Rapat Tingkat Menteri bersama Menteri Koordinator (Menko) Bidang Pemberdayaan Masyarakat, di Jakarta, Selasa (3/12/2024).</p>',
                'date_news' => '2024-12-11',
                'author' => 'Admin',
                'image_path' => [
                    'assets/img/news/11.jpg',
                    'assets/img/news/1.jpeg',
                    'assets/img/news/2.jpeg',
                ]
            ],
            [
                'news_tag_id' => 2,
                'title' => 'Menkop Pastikan Kesiapan Program Dukung Asta Cita Swasembada Pangan12 Menkop Pastikan Kesiapan Program Dukung Asta Cita Swasembada Pangan12',
                'slug' => 'menkop-pastikan-kesiapan-program-dukung-asta-cita-swasembada-pangan12',
                'description' => '<p>Jakarta - Menteri Koperasi (Menkop) Budi Arie Setiadi menyampaikan kesiapan Kementerian Koperasi (Kemenkop) dalam mendukung program Pemerintah. Mulai dari penguatan kelembagaan koperasi, swasembada pangan, hilirisasi hingga menyukseskan program Makan Bergizi Gratis (MBG).</p><br><br><p>“Peran Kemenkop ini mendukung Asta Cita 2 terkait swasembada pangan, serta prioritas Asta Cita 3 terkait pengembangan industri agro-maritim berbasis koperasi dan industrialisasi melalui koperasi,” ucapnya dalam Rapat Tingkat Menteri bersama Menteri Koordinator (Menko) Bidang Pemberdayaan Masyarakat, di Jakarta, Selasa (3/12/2024).</p>',
                'date_news' => '2024-12-12',
                'author' => 'Admin',
                'image_path' => [
                    'assets/img/news/12.jpg',
                    'assets/img/news/3.jpg',
                    'assets/img/news/1.jpeg',
                ]
            ],
            [
                'news_tag_id' => 2,
                'title' => 'Menkop Pastikan Kesiapan13',
                'slug' => 'menkop-pastikan-kesiapan-program-dukung-asta-cita-swasembada-pangan13',
                'description' => '<p>“Peran Kemenkop ini mendukung Asta Cita 2 terkait swasembada pangan, serta prioritas Asta Cita 3 terkait pengembangan industri agro-maritim berbasis koperasi dan industrialisasi melalui koperasi,” ucapnya dalam Rapat Tingkat Menteri bersama Menteri Koordinator (Menko) Bidang Pemberdayaan Masyarakat, di Jakarta, Selasa (3/12/2024).</p>',
                'date_news' => '2024-12-13',
                'author' => 'Admin',
                'image_path' => [
                    'assets/img/news/13.jpg',
                    'assets/img/news/1.jpeg',
                    'assets/img/news/3.jpg',
                ]
            ],
            [
                'news_tag_id' => 1,
                'title' => 'Dinas Koperasi, UKM, Perindustrian dan Perdagangan Kab. Sumenep mendapatkan penghargaan Pasar Tertib Ukur Tahun 2023',
                'slug' => 'dinas-koperasi-ukm-perindustrian-dan-perdagangan-kab-sumenep-mendapatkan-penghargaan-pasar-tertib-ukur-tahun-2023',
                'description' => '<p>UPTD Metrologi Legal - Dinas Koperasi, UKM, Perindustrian dan Perdagangan Kab. Sumenep mendapatkan penghargaan Pasar Tertib Ukur Tahun 2023 untuk Pasar Ganding dan Pasar Talango, dan merupakan satu-satunya Kabupaten di wilayah Madura yang memperoleh penghargaan tersebut.</p><br><p>Penghargaan Pasar Tertib Ukur yang diterima langsung oleh Kepala Dinas Koperasi,UKM, Perindag Kab. Sumenep Moh. Ramli, S.Sos., M.Si pada tanggal 5 Desember 2024 di Direktorat Metrologi Bandung. Penghargaan ini adalah wujud nyata dari Kinerja UPTD Metrologi Sumenep menuju Tertib Ukur.</p>',
                'date_news' => '2024-12-30',
                'author' => 'Admin',
                'image_path' => [
                    'assets/img/news/14.jpg',
                ]
            ],
            [
                'news_tag_id' => 3,
                'title' => 'Pengumuman Lowongan Tenaga Pendukung Biro Manajemen Kinerja, Organisasi dan SDM Aparatur',
                'slug' => 'pengumuman-lowongan-tenaga-pendukung-biro-manajemen-kinerja-organisasi-dan-sdm-aparatur',
                'description' => '',
                'date_news' => '2024-12-30',
                'author' => 'Admin',
                'image_path' => [
                    'assets/img/news/14.jpg',
                ],
                'file_path' => [
                    [
                        'name' => 'lampiran-1',
                        'url' => 'assets/file/file.pdf',
                    ],
                    [
                        'name' => 'lampiran-2',
                        'url' => 'assets/file/file.pdf',
                    ],
                    [
                        'name' => 'lampiran-3',
                        'url' => 'assets/file/file.pdf',
                    ],
                ]
            ],
            [
                'news_tag_id' => 3,
                'title' => 'Pengumuman Lowongan Tenaga Pendukung Biro Manajemen Kinerja, Organisasi dan SDM Aparatur',
                'slug' => 'pengumuman-lowongan-tenaga-pendukung-biro-manajemen-kinerja-organisasi-dan-sdm-aparatur1',
                'description' => '',
                'date_news' => '2024-12-30',
                'author' => 'Admin',
                'image_path' => [
                    'assets/img/news/13.jpg',
                ],
                'file_path' => [
                    [
                        'name' => 'lampiran-1',
                        'url' => 'assets/file/file.pdf',
                    ],
                    [
                        'name' => 'lampiran-2',
                        'url' => 'assets/file/file.pdf',
                    ],
                ]
            ],
        ];

        foreach ($newsDetails as $newsData) {
            // Buat record di database
            $news = NewsDetail::create([
                'news_tag_id' => $newsData['news_tag_id'],
                'title' => $newsData['title'],
                'slug' => $newsData['slug'],
                'description' => $newsData['description'],
                'date_news' => $newsData['date_news'],
                'author' => $newsData['author'],
            ]);
            for ($i = 0; $i < count($newsData['image_path']); $i++) {
                $destinationPath = "thumb_{$newsData['slug']}_{$i}.jpg";
                Storage::disk('public')->put($destinationPath, file_get_contents(storage_path("app/public/{$newsData['image_path'][$i]}")));

                if ($news->news_tag_id == 1) {
                    $news->addMediaFromDisk($destinationPath, 'public')->toMediaCollection('siaran-pers');
                // } else if ($news->news_tag_id == 2) {
                //     $news->addMediaFromDisk($destinationPath, 'public')->toMediaCollection('berita-media');
                } else if ($news->news_tag_id == 2) {
                    $news->addMediaFromDisk($destinationPath, 'public')->toMediaCollection('galeri-foto');
                } else if ($news->news_tag_id == 3) {
                    $news->addMediaFromDisk($destinationPath, 'public')->toMediaCollection('kegiatan');
                    if ($newsData['file_path']) {
                        for ($i = 0, $j = 1; $i < count($newsData['file_path']); $i++, $j++) {
                            $destinationPathFile = "file_{$newsData['slug']}_{$j}.pdf";
                            Storage::disk('public')->put($destinationPathFile, file_get_contents(storage_path("app/public/{$newsData['file_path'][$i]['url']}")));
                            $news->addMediaFromDisk($destinationPathFile, 'public')->usingName($newsData['file_path'][$i]['name'])->toMediaCollection('lampiran');
                        }
                    }
                }
            }
            // $destinationPath = "thumb_{$newsData['slug']}.jpg";
            // Storage::disk('public')->put($destinationPath, file_get_contents(storage_path("app/public/{$newsData['image_path']}")));

        }
    }
}
