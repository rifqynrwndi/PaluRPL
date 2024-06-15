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
        // \App\Models\User::factory(9)->create();
        // //
        User::insert([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'nohp' => '082399431723',
            'password' => Hash::make('admin123'),
            'avatar' => 'user.png',
        ]);
    }
}
