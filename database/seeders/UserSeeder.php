<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::insert([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'nohp' => '082399431723',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
            'avatar' => 'user.png',
        ]);

        // User::insert([
        //     'name' => 'Mahasiswa',
        //     'email' => 'mahasiswa@gmail.com',
        //     'password' => Hash::make('mahasiswa'),
        //     'role' => 'mahasiswa',
        //     'avatar' => 'user.png',
        // ]);

        // User::insert([
        //     'name' => 'Pemilik Kost',
        //     'email' => 'pemilikkost@gmail.com',
        //     'password' => Hash::make('pemilikkost'),
        //     'role' => 'pemilikkost',
        //     'avatar' => 'user.png',
        // ]);
    }
}
