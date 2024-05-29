<?php

namespace Database\Seeders;

use App\Models\KriteriaPemilikKost;
use Illuminate\Database\Seeder;

class KriteriaPemilikKostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KriteriaPemilikKost::insert([
            'id' => 1,
            'nama' => 'Luas Kamar',
            'bobot' => 0.667,
        ]);

        KriteriaPemilikKost::insert([
            'id' => 2,
            'nama' => 'Jarak Dari Kampus',
            'bobot' => 0.235,
        ]);

        KriteriaPemilikKost::insert([
            'id' => 3,
            'nama' => 'Desain Rumah',
            'bobot' => 0.091,
        ]);
    }
}
