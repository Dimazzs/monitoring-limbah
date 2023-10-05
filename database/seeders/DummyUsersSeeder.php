<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name' => 'Arga',
                'email' => 'pengguna@gmail.com',
                'role' => 'pengguna',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'Dimas',
                'email' => 'pegawai@gmail.com',
                'role' => 'pegawai',
                'password' => bcrypt('123456')
            ], [
                'name' => 'Silpi',
                'email' => 'pengawas@gmail.com',
                'role' => 'pengawas',
                'password' => bcrypt('123456')
            ], [
                'name' => 'Amanda',
                'email' => 'ketua@gmail.com',
                'role' => 'ketua',
                'password' => bcrypt('123456')
            ],
        ];
        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
