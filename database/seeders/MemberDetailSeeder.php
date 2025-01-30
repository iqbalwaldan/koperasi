<?php

namespace Database\Seeders;

use App\Models\MemberTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MemberDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'member_tag_id' => 1,
                'name' => 'MOH. RAMLI, S.Sos., M.Si',
                'position' => 'KEPALA DINAS',
                'photo' => url('admin/assets/images/faces/2.jpg'),
            ],
            [
                'member_tag_id' => 2,
                'name' => 'TRI FATHANAH, SE, MM',
                'position' => 'SEKRETARIS DINAS',
                'photo' => url('admin/assets/images/faces/3.jpg'),
            ],
            [
                'member_tag_id' => 3,
                'name' => 'HAIRIL ISKANDAR, SE.,M.Ak',
                'position' => 'Kepala Bidang Perizinan, Kelembagaan, Pengawasan dan Pemeriksaan',
                'photo' => url('admin/assets/images/faces/2.jpg'),
            ],
            [
                'member_tag_id' => 3,
                'name' => 'YULIANA, SE., M.Si',
                'position' => 'Kepala Bidang Pemberdayaan Koperasi dan Usaha Mikro',
                'photo' => url('admin/assets/images/faces/3.jpg'),
            ],
            [
                'member_tag_id' => 3,
                'name' => 'IDHAM HALIL, ST',
                'position' => 'Kepala Bidang Perdagangan',
                'photo' => url('admin/assets/images/faces/2.jpg'),
            ],
            [
                'member_tag_id' => 3,
                'name' => 'AGUS EKA HARIYADI, SE',
                'position' => 'Kepala Bidang Perindustrian',
                'photo' => url('admin/assets/images/faces/2.jpg'),
            ],
            [
                'member_tag_id' => 4,
                'name' => 'ROSIHAN NUR, SH',
                'position' => 'Plt. Sub. Bagian Umum dan Kepegawaian',
                'photo' => url('admin/assets/images/faces/2.jpg'),
            ],
            [
                'member_tag_id' => 4,
                'name' => 'DIDIK PRAYITNO, ST',
                'position' => 'ub. Bagian Program dan Perencanaan',
                'photo' => url('admin/assets/images/faces/2.jpg'),
            ],
            [
                'member_tag_id' => 4,
                'name' => 'JUMAALI, SE',
                'position' => 'Sub. Bagian Keuangan',
                'photo' => url('admin/assets/images/faces/2.jpg'),
            ],
            [
                'member_tag_id' => 4,
                'name' => 'DEVI CHRISTINA WARDHANY, S.E., M.M',
                'position' => 'Analis Perdagangan Ahli Muda',
                'photo' => url('admin/assets/images/faces/3.jpg'),
            ],
            [
                'member_tag_id' => 4,
                'name' => 'PRIYAJI SUBAIDI, S.Sos., M.Si.',
                'position' => 'Penyuluh Perindustrian dan Perdagangan Ahli Muda',
                'photo' => url('admin/assets/images/faces/2.jpg'),
            ],
            [
                'member_tag_id' => 4,
                'name' => 'BIMA AFANDI, S.Pi',
                'position' => 'Negosiator Perdagangan Ahli Muda',
                'photo' => url('admin/assets/images/faces/2.jpg'),
            ],
        ];

        foreach ($data as $item) {
            $member = \App\Models\MemberDetail::create([
                'member_tag_id' => $item['member_tag_id'],
                'name' => $item['name'],
                'position' => $item['position'],
            ]);
            $structure = MemberTag::find($item['member_tag_id'])->slug;
            $slug = Str::slug($member->name) . '-' . Str::slug($member->position) . '-' . time();

            $member->addMediaFromUrl($item['photo'])->usingName($member->name)->usingFileName('member_' . $slug)->toMediaCollection($structure);
        }
    }
}
