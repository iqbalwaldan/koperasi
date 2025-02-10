<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'key' => 'Bidang Perizinan Kelembagaan Pengawasan dan Pemeriksaan',
                'slug' => 'bidang-perizinan-kelembagaan-pengawasan-dan-pemeriksaan',
                'category' => 'Contact Person',
                'category_slug' => 'contact-person',
                'value' => '089518436207',
            ],
            [
                'key' => 'Bidang Pemberdayaan Koperasi dan Usaha Mikro',
                'slug' => 'bidang-pemberdayaan-koperasi-dan-usaha-mikro',
                'category' => 'Contact Person',
                'category_slug' => 'contact-person',
                'value' => '089518436207',
            ],
            [
                'key' => 'UPTD Metrologi Legal',
                'slug' => 'uptd-metrologi-legal',
                'category' => 'Contact Person',
                'category_slug' => 'contact-person',
                'value' => '089518436207',
            ],
            [
                'key' => 'Bidang Perindustrian',
                'slug' => 'bidang-perindustrian',
                'category' => 'Contact Person',
                'category_slug' => 'contact-person',
                'value' => '089518436207',
            ],
            [
                'key' => 'Bidang Perdagangan',
                'slug' => 'bidang-perdagangan',
                'category' => 'Contact Person',
                'category_slug' => 'contact-person',
                'value' => '089518436207',
            ],

            [
                'key' => 'UPTD Pasar',
                'slug' => 'uptd-pasar',
                'category' => 'Contact Person',
                'category_slug' => 'contact-person',
                'value' => '089518436207',
            ],
            [
                'key' => 'Alamat',
                'slug' => 'alamat',
                'category' => 'Footer Contact',
                'category_slug' => 'footer-contact',
                'value' => 'Jl. Urip Sumoharjo No. 6 Sumenep',
            ],
            [
                'key' => 'Telepon',
                'slug' => 'telepon',
                'category' => 'Footer Contact',
                'category_slug' => 'footer-contact',
                'value' => '(0328) 662016',
            ],
            [
                'key' => 'Siska Perbapo',
                'slug' => 'siska-perbapo',
                'category' => 'Link',
                'category_slug' => 'link',
                'value' => 'https://siskaperbapo.jatimprov.go.id/',
            ],
            [
                'key'=> 'SP2KP',
                'slug' => 'sp2kp',
                'category' => 'Link',
                'category_slug' => 'link',
                'value' => 'https://sp2kp.kemendag.go.id/',
            ],
            [
                'key'=> 'Kabupaten Sumenep',
                'slug' => 'kabupaten-sumenep',
                'category' => 'Link',
                'category_slug' => 'link',
                'value' => 'https://sumenepkab.go.id/',
            ],
            [
                'key' => 'Web Gis',
                'slug' => 'web-gis',
                'category' => 'Link',
                'category_slug' => 'link',
                'value' => 'https://gis.sumenepkab.go.id',
            ],
            // [
            //     'key' => 'Logo Utama',
            //     'slug' => 'logo-utama',
            //     'category' => 'Logo',
            //     'category_slug' => 'logo',
            //     'value' => 'logo-utama',
            //     'file' => 'assets/img/Logo/Logo DISKOPUKMPERINDAG Kab. Sumenep.png',
            // ],
        ];

        foreach ($settings as $setting) {
            $set = Setting::create([
                'key' => $setting['key'],
                'slug' => $setting['slug'],
                'category' => $setting['category'],
                'category_slug' => $setting['category_slug'],
                'value' => $setting['value'],
            ]);
            if (isset($setting['file'])) {
                $destinationPath = "file_{$set['slug']}.png";
                Storage::disk('public')->put($destinationPath, file_get_contents(storage_path("app/public/{$setting['file']}")));

                $set->addMediaFromDisk($destinationPath, 'public')->usingName($set['key'])->toMediaCollection($set['value']);
            }
        }
    }
}
