<?php

namespace Database\Seeders;

use App\Models\SubKriteriaMahasiswa;
use Illuminate\Database\Seeder;

class SubKriteriaMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Kriteria Fasilitas
        SubKriteriaMahasiswa::insert([
            'id_kriteriamahasiswa' => 1,
            'kode' => 1,
            'nama' => '>5',
            'bobot' => 0.648,
            'keterangan' => 'Lengkap'
        ]);

        SubKriteriaMahasiswa::insert([
            'id_kriteriamahasiswa' => 1,
            'kode' => 2,
            'nama' => '>=3 dan <=5',
            'bobot' => 0.23,
            'keterangan' => 'Kurang Lengkap'
        ]);

        SubKriteriaMahasiswa::insert([
            'id_kriteriamahasiswa' => 1,
            'kode' => 3,
            'nama' => '<3',
            'bobot' => 0.122,
            'keterangan' => 'Tidak Lengkap'
        ]);

        //Kriteria Harga Sewa
        SubKriteriaMahasiswa::insert([
            'id_kriteriamahasiswa' => 2,
            'kode' => 4,
            'nama' => '>900.000',
            'bobot' => 0.137,
            'keterangan' => 'Mahal'
        ]);

        SubKriteriaMahasiswa::insert([
            'id_kriteriamahasiswa' => 2,
            'kode' => 5,
            'nama' => '>=500.000 dan <=900.000',
            'bobot' => 0.24,
            'keterangan' => 'Sedang'
        ]);

        SubKriteriaMahasiswa::insert([
            'id_kriteriamahasiswa' => 2,
            'kode' => 6,
            'nama' => '<500.000',
            'bobot' => 0.623,
            'keterangan' => 'Murah'
        ]);

        //Kriteria Lokasi
        SubKriteriaMahasiswa::insert([
            'id_kriteriamahasiswa' => 3,
            'kode' => 7,
            'nama' => 'Jarak dari kost ke kampus cukup terjangkau dengan berjalan kaki',
            'bobot' => 0.681,
            'keterangan' => 'Sangat Baik'
        ]);

        SubKriteriaMahasiswa::insert([
            'id_kriteriamahasiswa' => 3,
            'kode' => 8,
            'nama' => 'Jarak dari kos ke kampus terjangkau dengan kendaraan umum/pribadi',
            'bobot' => 0.201,
            'keterangan' => 'Baik'
        ]);

        SubKriteriaMahasiswa::insert([
            'id_kriteriamahasiswa' => 3,
            'kode' => 9,
            'nama' => 'Kost dekat dengan akses yang diperlukan (warung makan, warnet, mini market, londry)',
            'bobot' => 0.118,
            'keterangan' => 'Cukup'
        ]);

        //Kriteria Kenyamanan
        SubKriteriaMahasiswa::insert([
            'id_kriteriamahasiswa' => 4,
            'kode' => 10,
            'nama' => 'Lingkungan kost tidak rawan banjir',
            'bobot' => 0.595,
            'keterangan' => 'Sangat Baik'
        ]);

        SubKriteriaMahasiswa::insert([
            'id_kriteriamahasiswa' => 4,
            'kode' => 11,
            'nama' => 'Lingkungan kost yang bersih',
            'bobot' => 0.277,
            'keterangan' => 'Baik'
        ]);

        SubKriteriaMahasiswa::insert([
            'id_kriteriamahasiswa' => 4,
            'kode' => 12,
            'nama' => 'Keramahan pemilik / penjaga kost',
            'bobot' => 0.129,
            'keterangan' => 'Cukup'
        ]);

        //Kriteria Keamanan
        SubKriteriaMahasiswa::insert([
            'id_kriteriamahasiswa' => 5,
            'kode' => 13,
            'nama' => 'Aman dari pencurian',
            'bobot' => 0.633,
            'keterangan' => 'Sangat Baik'
        ]);

        SubKriteriaMahasiswa::insert([
            'id_kriteriamahasiswa' => 5,
            'kode' => 14,
            'nama' => 'Keberadaan tuan ruan rumah / penjaga kost',
            'bobot' => 0.26,
            'keterangan' => 'Baik'
        ]);

        SubKriteriaMahasiswa::insert([
            'id_kriteriamahasiswa' => 5,
            'kode' => 15,
            'nama' => 'Tempat kost ada jam malam',
            'bobot' => 0.106,
            'keterangan' => 'Cukup'
        ]);

    }
}
