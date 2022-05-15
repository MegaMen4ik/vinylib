<?php

namespace Database\Seeders;

use App\Models\Band;
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
            BandsSeeder::class,
            ArtistsSeeder::class,
            AlbumsSeeder::class,
            SongsSeeder::class
        ]);
    }
}
