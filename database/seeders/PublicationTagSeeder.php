<?php

namespace Database\Seeders;

use App\Models\PublicationTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PublicationTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            [
                'name' => 'Regulasi',
                'slug' => 'regulasi',
            ],
            [
                'name' => 'Informasi',
                'slug' => 'informasi',
            ],
        ];

        foreach ($tags as $tag) {
            PublicationTag::create([
                'name' => $tag['name'],
                'slug' => $tag['slug'],
            ]);
        }

        // 1. Perpu
        // 2. ⁠perpres
        // 3. ⁠permen
        // 4. ⁠peraturan pemerintah prov
        // 5. ⁠pergub
        // 5. ⁠perda
        // 6. ⁠perbub
        // 7. ⁠sk bupati
        // 8. ⁠sk dinas
        // 9. ⁠formulir


        // $tags = [
        //     [
        //         'name' => 'Undang Undang (UU)',
        //         'slug' => 'undang-undang',
        //         'file' => [
        //             [
        //                 'url' => 'assets/file/UU NO 23 TAHUN 2014 TENTANG PEMERINTAHAN DAERAH.pdf',
        //                 'name' => 'UU NO 23 TAHUN 2014 TENTANG PEMERINTAHAN DAERAH',
        //             ],
        //             [
        //                 'url' => 'assets/file/UU NO 7 TAHUN 2014 TENTANG PERDAGANGAN-compressed.pdf',
        //                 'name' => 'UU NO 7 TAHUN 2014 TENTANG PERDAGANGAN',
        //             ],
        //         ]
        //     ],
        //     [
        //         'name' => 'Peraturan Pengganti Undang Undang (PERPU)',
        //         'slug' => 'peraturan-pengganti-undang-undang',
        //         'file' => [
        //             // [
        //             //     'url' => 'assets/file/PERBUB NO 12 TAHUN 2022 TENTANG TATA HUBUNGAN KERJA DAN POLA KOORDINASI SERTA PEMBIDANGAN KOORDINASI TUGAS ASISTEN SEKRETARIS DAERAH.pdf',
        //             //     'name' => 'PERBUB NO 12 TAHUN 2022 TENTANG TATA HUBUNGAN KERJA DAN POLA KOORDINASI SERTA PEMBIDANGAN KOORDINASI TUGAS ASISTEN SEKRETARIS DAERAH',
        //             // ],
        //         ]
        //     ],
        //     [
        //         'name' => 'Peraturan Pemerintah (PP)',
        //         'slug' => 'peraturan-pemerintah',
        //         'file' => [
        //             [
        //                 'url' => 'assets/file/PP NO 29 TAHUN 2021 TENTANG PENYELENGGARAAN BIDANG PERDAGANGAN.pdf',
        //                 'name' => 'PP NO 29 TAHUN 2021 TENTANG PENYELENGGARAAN BIDANG PERDAGANGAN',
        //             ],
        //         ]
        //     ],
        //     [
        //         'name' => 'Peraturan Presiden (PERPRES)',
        //         'slug' => 'peraturan-presiden',
        //         'file' => [
        //             // [
        //             //     'url' => 'assets/file/PERBUB NO 12 TAHUN 2022 TENTANG TATA HUBUNGAN KERJA DAN POLA KOORDINASI SERTA PEMBIDANGAN KOORDINASI TUGAS ASISTEN SEKRETARIS DAERAH.pdf',
        //             //     'name' => 'PERBUB NO 12 TAHUN 2022 TENTANG TATA HUBUNGAN KERJA DAN POLA KOORDINASI SERTA PEMBIDANGAN KOORDINASI TUGAS ASISTEN SEKRETARIS DAERAH',
        //             // ],
        //         ]
        //     ],
        //     [
        //         'name' => 'Peraturan Mentri (PERMEN)',
        //         'slug' => 'peraturan-mentri',
        //         'file' => [
        //             [
        //                 'url' => 'assets/file/PERMENKES NO 17 TAHUN 2020 TENTANG PASAR SEHAT.pdf',
        //                 'name' => 'PERMENKES NO 17 TAHUN 2020 TENTANG PASAR SEHAT',
        //             ],
        //             [
        //                 'url' => 'assets/file/PERMENDAG NO 120 TAHUN 2018 TENTANG PENGENDALIAN DAN PENGAWASAN TERHADAP PENGADAAN, PEREDARAN, DAN PENJUALAN MINUMAN BERALKOHOL.pdf',
        //                 'name' => 'PERMENDAG NO 120 TAHUN 2018 TENTANG PENGENDALIAN DAN PENGAWASAN TERHADAP PENGADAAN, PEREDARAN, DAN PENJUALAN MINUMAN BERALKOHOL',
        //             ],
        //             [
        //                 'url' => 'assets/file/PERMENDAG NO 90 TAHUN 2014 TENTANG PENATAAN DAN PEMBINAAN GUDANG.pdf',
        //                 'name' => 'PERMENDAG NO 90 TAHUN 2014 TENTANG PENATAAN DAN PEMBINAAN GUDANG',
        //             ],
        //             [
        //                 'url' => 'assets/file/PERMENDAG NO 72 TAHUN 2014 TENTANG PENGENDALIAN DAN PENGAWASAN TERHADAP PENGADAAN, PEREDARAN, DAN PENJUALAN MINUMAN BERALKOHOL.pdf',
        //                 'name' => 'PERMENDAG NO 72 TAHUN 2014 TENTANG PENGENDALIAN DAN PENGAWASAN TERHADAP PENGADAAN, PEREDARAN, DAN PENJUALAN MINUMAN BERALKOHOL',
        //             ],
        //             [
        //                 'url' => 'assets/file/PERMENDAG NO 56 TAHUN 2022 TENTANG KETENTUAN ASAL BARANG DAN KETENTUAN PENERBITAN DOKUMEN KETERANGAN ASAL UNTUK BARANG YANG DIESKPOR.pdf',
        //                 'name' => 'PERMENDAG NO 56 TAHUN 2022 TENTANG KETENTUAN ASAL BARANG DAN KETENTUAN PENERBITAN DOKUMEN KETERANGAN ASAL UNTUK BARANG YANG DIESKPOR',
        //             ],
        //             [
        //                 'url' => 'assets/file/PERMENDAG NO 47 TAHUN 2019 TENTANG PENGADAAN, DISTRIBUSI DAN PENGAWASAN BAHAN BERBAHAYA.pdf',
        //                 'name' => 'PERMENDAG NO 47 TAHUN 2019 TENTANG PENGADAAN, DISTRIBUSI DAN PENGAWASAN BAHAN BERBAHAYA',
        //             ],
        //             [
        //                 'url' => 'assets/file/PERMENDAG NO 47 TAHUN 2018 TENTANG PENGENDALIAN DAN PENGAWASAN TERHADAP PENGADAAN, PEREDARAN, DAN PENJUALAN MINUMAN BERALKOHOL.pdf',
        //                 'name' => 'PERMENDAG NO 47 TAHUN 2018 TENTANG PENGENDALIAN DAN PENGAWASAN TERHADAP PENGADAAN, PEREDARAN, DAN PENJUALAN MINUMAN BERALKOHOL',
        //             ],
        //             [
        //                 'url' => 'assets/file/PERMENDAG NO 36 TAHUN 2018 TENTANG PELAKSANAAN PENGAWASAN KEGIATAN PERDAGANGAN.pdf',
        //                 'name' => 'PERMENDAG NO 36 TAHUN 2018 TENTANG PELAKSANAAN PENGAWASAN KEGIATAN PERDAGANGAN',
        //             ],
        //             [
        //                 'url' => 'assets/file/PERMENDAG NO 32 TAHUN 2016 TENTANG PENGENDALIAN DAN PENGAWASAN TERHADAP PENGADAAN, PEREDARAN, DAN PENJUALAN MINUMAN BERALKOHOL.pdf',
        //                 'name' => 'PERMENDAG NO 32 TAHUN 2016 TENTANG PENGENDALIAN DAN PENGAWASAN TERHADAP PENGADAAN, PEREDARAN, DAN PENJUALAN MINUMAN BERALKOHOL',
        //             ],
        //             [
        //                 'url' => 'assets/file/PERMENDAG NO 25 TAHUN 2019 TENTANG PERUBAHAN KEENAM ATAS PERMENDAG NO 20 TAHUN 2014 TENTANG PENGENDALIAN DAN PENGAWASAN TERHADAP MINUMAN BERALKOHOL.pdf',
        //                 'name' => 'PERMENDAG NO 25 TAHUN 2019 TENTANG PERUBAHAN KEENAM ATAS PERMENDAG NO 20 TAHUN 2014 TENTANG PENGENDALIAN DAN PENGAWASAN TERHADAP MINUMAN BERALKOHOL',
        //             ],
        //             [
        //                 'url' => 'assets/file/PERMENDAG NO 25 TAHUN 2019 TENTANG PENGENDALIAN DAN PENGAWASAN TERHADAP PERDAGANGAN, PEREDARAN DAN PENJUALAN MINUMAN BERALKOHOL.pdf',
        //                 'name' => 'PERMENDAG NO 25 TAHUN 2019 TENTANG PENGENDALIAN DAN PENGAWASAN TERHADAP PERDAGANGAN, PEREDARAN DAN PENJUALAN MINUMAN BERALKOHOL',
        //             ],
        //             [
        //                 'url' => 'assets/file/PERMENDAG NO 21 TAHUN 2021 TENTANG PEDOMAN PEMBANGUNAN DAN PENGELOLAAN SARANA PERDAGANGAN-compressed.pdf',
        //                 'name' => 'PERMENDAG NO 21 TAHUN 2021 TENTANG PEDOMAN PEMBANGUNAN DAN PENGELOLAAN SARANA PERDAGANGAN',
        //             ],
        //             [
        //                 'url' => 'assets/file/PERMENDAG NO 20 TAHUN 2014 TENTANG PENGENDALIAN DAN PENGAWASAN TERHADAP PENGADAAN, PEREDARAN, DAN PENJUALAN MINUMAN BERALKOHOL.pdf',
        //                 'name' => 'PERMENDAG NO 20 TAHUN 2014 TENTANG PENGENDALIAN DAN PENGAWASAN TERHADAP PENGADAAN, PEREDARAN, DAN PENJUALAN MINUMAN BERALKOHOL',
        //             ],
        //             [
        //                 'url' => 'assets/file/PERMENDAG NO 06 TAHUN 2015 TENTANG PENGENDALIAN DAN PENGAWASAN TERHADAP PENGADAAN, PEREDARAN, DAN PENJUALAN MINUMAN BERALKOHOL.pdf',
        //                 'name' => 'PERMENDAG NO 06 TAHUN 2015 TENTANG PENGENDALIAN DAN PENGAWASAN TERHADAP PENGADAAN, PEREDARAN, DAN PENJUALAN MINUMAN BERALKOHOL',
        //             ],
        //             [
        //                 'url' => 'assets/file/PERMENDAG NO 04 TAHUN 2023 TENTANG PENGADAAN DAN PENYALURAN PUPUK BERSUBSIDI UNTUK SEKTOR PERTANIAN.pdf',
        //                 'name' => 'PERMENDAG NO 04 TAHUN 2023 TENTANG PENGADAAN DAN PENYALURAN PUPUK BERSUBSIDI UNTUK SEKTOR PERTANIAN',
        //             ],
        //             [
        //                 'url' => 'assets/file/PERMEN PANRB NO 1 TAHUN 2023 TENTANG JABATAN FUNGSIONAL.pdf',
        //                 'name' => 'PERMEN PANRB NO 1 TAHUN 2023 TENTANG JABATAN FUNGSIONAL',
        //             ],
        //         ]
        //     ],
        //     [
        //         'name' => 'Peraturan Pemerintah Provinsi',
        //         'slug' => 'peraturan-pemerintah-provinsi',
        //         'file' => [
        //             // [
        //             //     'url' => 'assets/file/PERBUB NO 12 TAHUN 2022 TENTANG TATA HUBUNGAN KERJA DAN POLA KOORDINASI SERTA PEMBIDANGAN KOORDINASI TUGAS ASISTEN SEKRETARIS DAERAH.pdf',
        //             //     'name' => 'PERBUB NO 12 TAHUN 2022 TENTANG TATA HUBUNGAN KERJA DAN POLA KOORDINASI SERTA PEMBIDANGAN KOORDINASI TUGAS ASISTEN SEKRETARIS DAERAH',
        //             // ],
        //         ]
        //     ],
        //     [
        //         'name' => 'Peraturan Gubernur (PERGUB)',
        //         'slug' => 'peraturan-gubernur',
        //         'file' => [
        //             // [
        //             //     'url' => 'assets/file/PERBUB NO 12 TAHUN 2022 TENTANG TATA HUBUNGAN KERJA DAN POLA KOORDINASI SERTA PEMBIDANGAN KOORDINASI TUGAS ASISTEN SEKRETARIS DAERAH.pdf',
        //             //     'name' => 'PERBUB NO 12 TAHUN 2022 TENTANG TATA HUBUNGAN KERJA DAN POLA KOORDINASI SERTA PEMBIDANGAN KOORDINASI TUGAS ASISTEN SEKRETARIS DAERAH',
        //             // ],
        //         ]
        //     ],
        //     [
        //         'name' => 'Peraturan Daerah (PERDA)',
        //         'slug' => 'peraturan-daerah',
        //         'file' => [
        //             [
        //                 'url' => 'assets/file/PERDA NO 11 TAHUN 2018 TENTANG PENATAAN DAN PEMBERDAYAAN PEDAGANG KAKI LIMA.pdf',
        //                 'name' => 'PERDA NO 11 TAHUN 2018 TENTANG PENATAAN DAN PEMBERDAYAAN PEDAGANG KAKI LIMA',
        //             ],
        //             [
        //                 'url' => 'assets/file/PERDA NO 6 TAHUN 2012 TENTANG PEDOMAN PELAKSANAAN PEMBELIAN DAN PENGUSAHAAN TEMBAKAU.pdf',
        //                 'name' => 'PERDA NO 6 TAHUN 2012 TENTANG PEDOMAN PELAKSANAAN PEMBELIAN DAN PENGUSAHAAN TEMBAKAU',
        //             ],
        //             [
        //                 'url' => 'assets/file/PERDA NO 1 TAHUN 2024 TENTANG PAJAK DAERAH DAN RETRIBUSI DAERAH-compressed.pdf',
        //                 'name' => 'PERDA NO 1 TAHUN 2024 TENTANG PAJAK DAERAH DAN RETRIBUSI DAERAH',
        //             ],
        //         ]
        //     ],
        //     [
        //         'name' => 'Peraturan Bupati (PERBUB)',
        //         'slug' => 'peraturan-bupati',
        //         'file' => [
        //             [
        //                 'url' => 'assets/file/PERBUB NO 79 TAHUN 2022 TENTANG PETA PROSES BISNIS PEMERINTAH KABUPATEN SUMENEP.pdf',
        //                 'name' => 'PERBUB NO 79 TAHUN 2022 TENTANG PETA PROSES BISNIS PEMERINTAH KABUPATEN SUMENEP',
        //             ],
        //             [
        //                 'url' => 'assets/file/PERBUB NO 71 TAHUN 2022 TENTANG PERUBAHAN PERBUB NO 44 TAHUN 2022 TENTANG PENGENDALIAN, PENATAAN DAN PENGAWASAN TOKO SWALAYAN.pdf',
        //                 'name' => 'PERBUB NO 71 TAHUN 2022 TENTANG PERUBAHAN PERBUB NO 44 TAHUN 2022 TENTANG PENGENDALIAN, PENATAAN DAN PENGAWASAN TOKO SWALAYAN',
        //             ],
        //             [
        //                 'url' => 'assets/file/PERBUB NO 67 TAHUN 2023 TENTANG KEDUDUKAN, SUSUNAN ORGANISASI, TUGAS DAN FUNGSI SERTA TATA KERJA BADAN PENDAPATAN DAERAH.pdf',
        //                 'name' => 'PERBUB NO 67 TAHUN 2023 TENTANG KEDUDUKAN, SUSUNAN ORGANISASI, TUGAS DAN FUNGSI SERTA TATA KERJA BADAN PENDAPATAN DAERAH',
        //             ],
        //             [
        //                 'url' => 'assets/file/PERBUB NO 65 TAHUN 2021 TENTANG PEDOMAN PEMBANGUNAN DAN PENGELOLAAN PASAR RAKYAT SEHAT BERSTANDAR NASIONAL INDONESIA.pdf',
        //                 'name' => 'PERBUB NO 65 TAHUN 2021 TENTANG PEDOMAN PEMBANGUNAN DAN PENGELOLAAN PASAR RAKYAT SEHAT BERSTANDAR NASIONAL INDONESIA',
        //             ],
        //             [
        //                 'url' => 'assets/file/PERBUB NO 54 TAHUN 2023 TENTANG TATA NASKAH DINAS DI LINGKUNGAN PEMERINTAH KABUPATEN SUMENEP-compressed.pdf',
        //                 'name' => 'PERBUB NO 54 TAHUN 2023 TENTANG TATA NASKAH DINAS DI LINGKUNGAN PEMERINTAH KABUPATEN SUMENEP',
        //             ],
        //             [
        //                 'url' => 'assets/file/PERBUB NO 54 TAHUN 2022 TENTANG KEDUDUKAN, SUSUNAN ORGANISASI, TUGAS DAN FUNGSI SERTA TATA KERJA UNIT PELAKSANA TEKNIS DAERAH.pdf',
        //                 'name' => 'PERBUB NO 54 TAHUN 2022 TENTANG KEDUDUKAN, SUSUNAN ORGANISASI, TUGAS DAN FUNGSI SERTA TATA KERJA UNIT PELAKSANA TEKNIS DAERAH',
        //             ],
        //             [
        //                 'url' => 'assets/file/PERBUB NO 44 TAHUN 2022 TENTANG PENGENDALIAN, PENATAAN DAN PENGAWASAN TOKO SWALAYAN.pdf',
        //                 'name' => 'PERBUB NO 44 TAHUN 2022 TENTANG PENGENDALIAN, PENATAAN DAN PENGAWASAN TOKO SWALAYAN',
        //             ],
        //             [
        //                 'url' => 'assets/file/PERBUB NO 39 TAHUN 2024 TENTANG PENGGUNAAN DAN PENGELOLAAN FASILITAS PASAR_SIGNED.pdf',
        //                 'name' => 'PERBUB NO 39 TAHUN 2024 TENTANG PENGGUNAAN DAN PENGELOLAAN FASILITAS PASAR_SIGNED',
        //             ],
        //             [
        //                 'url' => 'assets/file/PERBUB NO 39 TAHUN 2024 TENTANG PENGGUNAAN DAN PENGELOLAAN FASILITAS PASAR.pdf',
        //                 'name' => 'PERBUB NO 39 TAHUN 2024 TENTANG PENGGUNAAN DAN PENGELOLAAN FASILITAS PASAR',
        //             ],
        //             [
        //                 'url' => 'assets/file/PERBUB NO 31 TAHUN 2022 TENTANG KEDUDUKAN, SUSUNAN ORGANISASI, TUGAS DAN FUNGSI SERTA TATA KERJA DINAS KOPERASI, UMKM, PERINDUSTRIAN DAN PERDAGANGAN.pdf',
        //                 'name' => 'PERBUB NO 31 TAHUN 2022 TENTANG KEDUDUKAN, SUSUNAN ORGANISASI, TUGAS DAN FUNGSI SERTA TATA KERJA DINAS KOPERASI, UMKM, PERINDUSTRIAN DAN PERDAGANGAN',
        //             ],
        //             [
        //                 'url' => 'assets/file/PERBUB NO 30 TAHUN 2024 TENTANG PENATAUSAHAAN PEMBELIAN TEMBAKAU.pdf',
        //                 'name' => 'PERBUB NO 30 TAHUN 2024 TENTANG PENATAUSAHAAN PEMBELIAN TEMBAKAU',
        //             ],
        //             [
        //                 'url' => 'assets/file/PERBUB NO 29 TAHUN 2024 TENTANG PENATAUSAHAAN PEMBELIAN TEMBAKAU_SIGNED.pdf',
        //                 'name' => 'PERBUB NO 29 TAHUN 2024 TENTANG PENATAUSAHAAN PEMBELIAN TEMBAKAU_SIGNED',
        //             ],
        //             [
        //                 'url' => 'assets/file/PERBUB NO 29 TAHUN 2024 TENTANG PENATAUSAHAAN PEMBELIAN TEMBAKAU.pdf',
        //                 'name' => 'PERBUB NO 29 TAHUN 2024 TENTANG PENATAUSAHAAN PEMBELIAN TEMBAKAU',
        //             ],
        //             [
        //                 'url' => 'assets/file/PERBUB NO 13 TAHUN 2023 TENTANG KODE KLASIFIKASI ARSIP DI LINGKUNGAN PEMERINTAH KABUPATEN SUMENEP.pdf',
        //                 'name' => 'PERBUB NO 13 TAHUN 2023 TENTANG KODE KLASIFIKASI ARSIP DI LINGKUNGAN PEMERINTAH KABUPATEN SUMENEP',
        //             ],
        //             [
        //                 'url' => 'assets/file/PERBUB NO 12 TAHUN 2024 TENTANG PERUBAHAN ATAS PERBUB NO 5 TAHUN 2024 TENTANG KODE WILAYAH KEARSIPAN SURAT DINAS PERANGKAT DAERAH DI LINGKUNGAN PEMERINTAH.pdf',
        //                 'name' => 'PERBUB NO 12 TAHUN 2024 TENTANG PERUBAHAN ATAS PERBUB NO 5 TAHUN 2024 TENTANG KODE WILAYAH KEARSIPAN SURAT DINAS PERANGKAT DAERAH DI LINGKUNGAN PEMERINTAH',
        //             ],
        //             [
        //                 'url' => 'assets/file/PERBUB NO 12 TAHUN 2022 TENTANG TATA HUBUNGAN KERJA DAN POLA KOORDINASI SERTA PEMBIDANGAN KOORDINASI TUGAS ASISTEN SEKRETARIS DAERAH.pdf',
        //                 'name' => 'PERBUB NO 12 TAHUN 2022 TENTANG TATA HUBUNGAN KERJA DAN POLA KOORDINASI SERTA PEMBIDANGAN KOORDINASI TUGAS ASISTEN SEKRETARIS DAERAH',
        //             ],
        //         ]
        //     ],
        //     [
        //         'name' => 'Surat Kuasa Bupati',
        //         'slug' => 'surat-kuasa-bupati',
        //         'file' => [
        //             [
        //                 'url' => 'assets/file/SK BUPATI NO 256 TAHUN 2024 TENTANG MONITORING PENGENDALIAN DAN PENGAWASAN PEMBELIAN ATAU PENJUALAN TEMBAKAU.pdf',
        //                 'name' => 'SK BUPATI NO 256 TAHUN 2024 TENTANG MONITORING PENGENDALIAN DAN PENGAWASAN PEMBELIAN ATAU PENJUALAN TEMBAKAU',
        //             ],
        //             [
        //                 'url' => 'assets/file/SK BUPATI NO 252 TAHUN 2024 TENTANG TITIK IMPAS HARGA TEMBAKAU.pdf',
        //                 'name' => 'SK BUPATI NO 252 TAHUN 2024 TENTANG TITIK IMPAS HARGA TEMBAKAU',
        //             ],
        //             [
        //                 'url' => 'assets/file/SK BUPATI NO 178 TAHUN 2024 TENTANG ALOKASI PUPUK BERSUBSIDI UNTUK SEKTOR PERTANIAN.pdf',
        //                 'name' => 'SK BUPATI NO 178 TAHUN 2024 TENTANG ALOKASI PUPUK BERSUBSIDI UNTUK SEKTOR PERTANIAN',
        //             ],
        //             [
        //                 'url' => 'assets/file/SK BUPATI NO 85 TAHUN 2024 TENTANG TIM PENGENDALIAN INFLASI DAERAH KABUPATEN SUMENEP TAHUN ANGGARAN 2024.pdf',
        //                 'name' => 'SK BUPATI NO 85 TAHUN 2024 TENTANG TIM PENGENDALIAN INFLASI DAERAH KABUPATEN SUMENEP TAHUN ANGGARAN 2024',
        //             ],
        //             [
        //                 'url' => 'assets/file/SK BUPATI NO 69 TAHUN 2024 TENTANG KOMISI PENGAWASAN PUPUK DAN PESTISIDA KABUPATEN SUMENEP TAHUN ANGGARAN 2024.pdf',
        //                 'name' => 'SK BUPATI NO 69 TAHUN 2024 TENTANG KOMISI PENGAWASAN PUPUK DAN PESTISIDA KABUPATEN SUMENEP TAHUN ANGGARAN 2024',
        //             ],
        //         ]
        //     ],
        //     [
        //         'name' => 'Surat Kuasa Dinas',
        //         'slug' => 'surat-kuasa-dinas',
        //         'file' => [
        //             // [
        //             //     'url' => 'assets/file/PERBUB NO 12 TAHUN 2022 TENTANG TATA HUBUNGAN KERJA DAN POLA KOORDINASI SERTA PEMBIDANGAN KOORDINASI TUGAS ASISTEN SEKRETARIS DAERAH.pdf',
        //             //     'name' => 'PERBUB NO 12 TAHUN 2022 TENTANG TATA HUBUNGAN KERJA DAN POLA KOORDINASI SERTA PEMBIDANGAN KOORDINASI TUGAS ASISTEN SEKRETARIS DAERAH',
        //             // ],
        //         ]
        //     ],
        //     [
        //         'name' => 'Lain-lain',
        //         'slug' => 'lain-lain',
        //         'file' => [
        //             [
        //                 'url' => 'assets/file/SNI 8152 TAHUN 2015 TENTANG SNI PASAR RAKYAT.pdf',
        //                 'name' => 'SNI 8152 TAHUN 2015 TENTANG SNI PASAR RAKYAT',
        //             ],
        //         ]
        //     ],
        //     [
        //         'name' => 'Informasi 1',
        //         'slug' => 'informasi-1',
        //         'file' => [
        //             [
        //                 'url' => 'assets/file/SNI 8152 TAHUN 2015 TENTANG SNI PASAR RAKYAT.pdf',
        //                 'name' => 'Informasi 1.1',
        //             ],
        //             [
        //                 'url' => 'assets/file/SNI 8152 TAHUN 2015 TENTANG SNI PASAR RAKYAT.pdf',
        //                 'name' => 'Informasi 1.2',
        //             ],
        //         ]
        //         ],
        //     [
        //         'name' => 'Informasi 2',
        //         'slug' => 'informasi-2',
        //         'file' => [
        //             [
        //                 'url' => 'assets/file/SNI 8152 TAHUN 2015 TENTANG SNI PASAR RAKYAT.pdf',
        //                 'name' => 'Informasi 2.1',
        //             ],
        //             [
        //                 'url' => 'assets/file/SNI 8152 TAHUN 2015 TENTANG SNI PASAR RAKYAT.pdf',
        //                 'name' => 'Informasi 2.2',
        //             ],
        //         ]
        //     ]
        // ];

        // foreach ($tags as $tag) {
        //     $publicationTag = PublicationTag::create([
        //         'name' => $tag['name'],
        //         'slug' => $tag['slug'],
        //     ]);

        //     if ($tag['file']) {
        //         foreach ($tag['file'] as $file) {
        //             $file['slug'] = Str::slug($file['name'], '-');
        //             $destinationPath = "file_{$publicationTag['slug']}_{$file['slug']}.pdf";
        //             Storage::disk('public')->put($destinationPath, file_get_contents(storage_path("app/public/{$file['url']}")));
        //             $publicationTag->addMediaFromDisk($destinationPath, 'public')->usingName($file['name'])->toMediaCollection($tag['slug']);
        //         }
        //     }
        // }
    }
}
