<?php

namespace Database\Seeders;

use App\Models\Band;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $band = new Band([
            'name' => 'Queen',
            'starts_at' => '1970',
        ]);
        $band->save();
        $band = new Band([
            'name' => 'The Beatles',
            'starts_at' => '1960',
            'ends_at' => '1970',
        ]);
        $band->save();
        $band = new Band([
            'name' => 'Nirvana',
            'starts_at' => '1987',
            'ends_at' => '1994',
        ]);
        $band->save();
    }
}
