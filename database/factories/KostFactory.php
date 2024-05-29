<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_user' => 1,
            'nama_kost' => $this->faker->name(),
            'fasilitas' => '["Lemari","Kamar Mandi Luar","Kipas Angin","TV"]',
            'harga_sewa' => 900000,
            'lokasi' => 'Jarak dari kos ke kampus terjangkau dengan kendaraan umum/pribadi',
            'kenyamanan' => 'Lingkungan kost yang bersih',
            'keamanan' => 'Aman dari pencurian',
            'panjangkamar' => 4,
            'lebarkamar' => 5,
            'jarak_dari_Kampus' => 650,
            'desain_rumah' => 'Sekat Gypsum',
            'gambar' => '20221121 131638 11638Desain-Rumah-Kost-Kostan-Minimalis.jpg',
        ];
    }
}
