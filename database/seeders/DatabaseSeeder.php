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
        // category
        \App\Models\Category::factory(4)->create();

        // service
        \App\Models\Service::factory(10)->create();

        // workers
        \App\Models\Worker::factory(10)->create();

        // transaction
        \App\Models\Transaction::factory(10)->create();

        $this->call([
            UserSeeder::class,
        ]);
        // \App\Models\Kost::factory(10)->create();
    }
}
