<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // user seeder

        Role::create(['name' => 'super-admin']);
        Role::create(['name' => 'bidang-perdagangan']);
        Role::create(['name' => 'bidang-perindustrian']);
        Role::create(['name' => 'bidang-pemberdayaan-koperasi-dan-usaha-mikro']);
        Role::create(['name' => 'bidang-perizinan-kelembagaan-pengawasan-dan-pemeriksaan']);
        Role::create(['name' => 'uptd-pasar']);
        Role::create(['name' => 'uptd-metrologi-legal']);

        $users = [
            [
                'name' => 'Super Admin',
                'username' => 'superAdmin',
                'password' => bcrypt('password'),
                'role' => 'super-admin'
            ],
            [
                'name' => 'Admin Bidang Perdagangan',
                'username' => 'adminPerdagangan',
                'password' => bcrypt('password'),
                'role' => 'bidang-perdagangan'
            ],
            [
                'name' => 'Admin Bidang Perindustrian',
                'username' => 'adminPerindustrian',
                'password' => bcrypt('password'),
                'role' => 'bidang-perindustrian'
            ],
            [
                'name' => 'Admin Bidang Pemberdayaan Koperasi dan Usaha Mikro',
                'username' => 'adminPemberdayaanKoperasiDanUsahaMikro',
                'password' => bcrypt('password'),
                'role' => 'bidang-pemberdayaan-koperasi-dan-usaha-mikro'
            ],
            [
                'name' => 'Admin Bidang Perizinan Kelembagaan Pengawasan dan Pemeriksaan',
                'username' => 'adminPerizinanKelembagaanPengawasanDanPemeriksaan',
                'password' => bcrypt('password'),
                'role' => 'bidang-perizinan-kelembagaan-pengawasan-dan-pemeriksaan'
            ],
            [
                'name' => 'Admin UPTD Pasar',
                'username' => 'adminUptdPasar',
                'password' => bcrypt('password'),
                'role' => 'uptd-pasar'
            ],
            [
                'name' => 'Admin UPTD Metrologi Legal',
                'username' => 'adminUptdMetrologiLegal',
                'password' => bcrypt('password'),
                'role' => 'uptd-metrologi-legal'
            ],
        ];

        foreach ($users as $key => $value) {
            $user = User::create([
                'name' => $value['name'],
                'username' => $value['username'],
                'password' => $value['password'],
            ]);
            $user->assignRole($value['role']);
        }

        $this->call([
            NewsSeeder::class,
            ProfileSeeder::class,
            PublicationSeeder::class,
            SettingSeeder::class,
            MemberSeeder::class,
        ]);
    }
}
