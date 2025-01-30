<?php

namespace Database\Seeders;

use App\Models\ProfileDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ProfileDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profileDetails = [
            [
                'profile_tag_id' => 1,
                'title' => 'strukur organisasi',
                'description' => url('assets/img/profile/'.rawurlencode('struktur-organisasi.jpg')),
            ],
            [
                'profile_tag_id' => 2,
                'title' => 'visi dan misi',
                'description' => '<p><span class="text-big"><strong>Visi</strong></span></p><p>Terwujudnya Indonesia Maju yang Berdaulat, Mandiri, dan Berkepribadian Berdasarkan Gotong Royong</p><p><span class="text-big"><strong>Misi</strong></span></p><ol><li>Peningkatan Kualitas Manusia Indonesia;</li><li>Struktur Ekonomi yang Produktif, Merata dan Berdaya Saing;</li><li>Pembangunan yang Merata dan Berkeadilan;</li><li>Mencapai Lingkungan Hidup yang Berkelanjutan;</li><li>Kemajuan Budaya yang Mencerminkan Kepribadian Bangsa;</li><li>Penegakan Sistem Hukum yang Bebas Korupsi, Bermartabat dan Terpercaya;</li><li>Perlindungan Bagi Segenap Bangsa dan Memberikan Rasa Aman pada Seluruh Warga;</li><li>Pengelolaan Pemerintah yang Bersih, Efektif, dan Terpercaya;</li><li>Sinergi Pemerintah Daerah dalam Kerangka Negara Kesatuan.</li></ol>'
            ],
            [
                'profile_tag_id' => 3,
                'title' => 'regulasi, tugas dan fungsi',
                'description' => '<p><strong>REGULASI</strong></p><p><strong>TUGAS</strong></p><p>Membantu Bupati melaksanakan urusan pemerintahan yang menjadi kewenangan pemerintah kabupaten bidang pembinaan koperasi, usaha kecil dan menengah, bidang perindustrian dan bidang perdagangan.</p><p><strong>FUNGSI</strong></p><ol><li>Penyusunan dan pengoordinasian program kerja pelaksanaan tugas koperasi, usaha mikro dan kecil;</li><li>Perumusan kebijaksanaan dan penyusunan program, perencanaan teknis pendirian dan pembinaan koperasi, usaha mikro dan kecil;</li><li>Penyusunan pedoman pembinaan kelembagaan dan usaha koperasi serta fasilitas pembiayaan simpan pinjam;</li><li>Pelaksanaan pembinaan, pengawasan, pengendalian, pendirian badan hukum koperasi;</li><li>Pelaksanaan pembinaan dan pengembangan sumber daya manusia koperasi, usaha mikro dan kecil serta advokasi dan hukum;</li><li>Pembinaan kepada masyarakat koperasi, usaha mikro dan kecil serta pemasaran;</li><li>Penyusunan dan pengoordinasian program kerja pelaksanaan tugas perindustrian dan perdagangan;</li><li>Pelaksanaan penyusunan rencana pembinaan dan pengembangan bidang perindustrian;</li><li>Pelaksanaan penyusunan rencana pembinaan dan pengembangan bidang perdagangan;</li><li>Pelaksanaan koordinasi dengan instansi dan lembaga terkait pelaksanaan perindustrian, perdagangan, pemberdayaan industri dan perdagangan;</li><li>Pelaksanaan pengawasan, pengendalian serta evaluasi dan pelaporan penyelenggaraan bidang perindustrian dan perdagangan;</li><li>Pelaksanaan kerjasama dengan lembaga pemerintah dan lembaga lainnya; dan</li><li>Pelaksanaan tugas lain yang dibarikan Bupati.</li></ol>'
            ],
        ];

        foreach ($profileDetails as $profileDetail) {
            $profile = ProfileDetail::create($profileDetail);

            if ($profileDetail['profile_tag_id'] === 1) {
                $destinationPath = "thumb_struktur-organisasi.jpg";
                $profile->addMediaFromUrl($profileDetail['description'])->usingName($profileDetail['title'])->usingFileName($destinationPath)->toMediaCollection('struktur-organisasi');
            }
        }
    }
}
