<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class PetugasSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        // 1 Akun Admin Tetap BPBD
        User::create([
            'name' => 'Admin BPBD Kabupaten Bandung',
            'email' => 'admin.bpbd@bandungkab.go.id',
            'password' => Hash::make('password123'),
        ]);

        // 5 Akun Dummy Petugas Menggunakan Faker id_ID
        for ($i = 0; $i < 5; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password'),
            ]);
        }
    }
}