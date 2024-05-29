<?php

namespace Database\Seeders;

use App\Models\SubKriteriaPemilikKost;
use Illuminate\Database\Seeder;

class SubKriteriaPemilikKostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Kriteria Luas Kamar
        SubKriteriaPemilikKost::insert([
            'id_kriteriapemilikkost' => 1,
            'kode' => 16,
            'nama' => '4x5 m',
            'bobot' => 0.715,
            'keterangan' => 'Sangat Baik'
        ]);

        SubKriteriaPemilikKost::insert([
            'id_kriteriapemilikkost' => 1,
            'kode' => 17,
            'nama' => '3x4 m',
            'bobot' => 0.187,
            'keterangan' => 'Baik'
        ]);

        SubKriteriaPemilikKost::insert([
            'id_kriteriapemilikkost' => 1,
            'kode' => 18,
            'nama' => '3x3 m',
            'bobot' => 0.098,
            'keterangan' => 'Cukup'
        ]);

        //Kriteria Jarak Dari Kampus
        SubKriteriaPemilikKost::insert([
            'id_kriteriapemilikkost' => 2,
            'kode' => 19,
            'nama' => '<500 m',
            'bobot' => 0.619,
            'keterangan' => 'Sangat Baik'
        ]);

        SubKriteriaPemilikKost::insert([
            'id_kriteriapemilikkost' => 2,
            'kode' => 20,
            'nama' => '>=500 m dan <=1500 m',
            'bobot' => 0.284,
            'keterangan' => 'Baik'
        ]);

        SubKriteriaPemilikKost::insert([
            'id_kriteriapemilikkost' => 2,
            'kode' => 21,
            'nama' => '>1500 m',
            'bobot' => 0.096,
            'keterangan' => 'Cukup'
        ]);

        //Kriteria Desain Rumah
        SubKriteriaPemilikKost::insert([
            'id_kriteriapemilikkost' => 3,
            'kode' => 22,
            'nama' => 'Permanen',
            'bobot' => 0.648,
            'keterangan' => 'Sangat Baik'
        ]);

        SubKriteriaPemilikKost::insert([
            'id_kriteriapemilikkost' => 3,
            'kode' => 23,
            'nama' => 'Sekat gypsum',
            'bobot' => 0.23,
            'keterangan' => 'Baik'
        ]);

        SubKriteriaPemilikKost::insert([
            'id_kriteriapemilikkost' => 3,
            'kode' => 24,
            'nama' => 'Sekat triplek',
            'bobot' => 0.122,
            'keterangan' => 'Cukup'
        ]);
    }
}
