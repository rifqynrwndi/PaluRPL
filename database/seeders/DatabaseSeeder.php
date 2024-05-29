<?php

namespace Database\Seeders;

use App\Models\Kost;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            UserSeeder::class,
            KriteriaMahasiswaSeeder::class,
            KriteriaPemilikKostSeeder::class,
            SubKriteriaMahasiswaSeeder::class,
            SubKriteriaPemilikKostSeeder::class,
        ]);
        // \App\Models\Kost::factory(10)->create();
    }
}
