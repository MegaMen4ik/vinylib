<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\BandComposition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->queenBand();
        $this->beatlesBand();
        $this->nirvanaBand();
    }

    private function queenBand() {
        $artist = new Artist([
            'name' => 'Freddie',
            'surname' => 'Mercury',
            'birth_date' => '1946-09-05',
        ]);
        $artist->save();
        $artist = new Artist([
            'name' => 'John',
            'surname' => 'Deacon',
            'birth_date' => '1951-08-19',
        ]);
        $artist->save();
        $artist = new Artist([
            'name' => 'Brian',
            'surname' => 'May',
            'birth_date' => '1947-07-19',
        ]);
        $artist->save();
        $artist = new Artist([
            'name' => 'Roger',
            'surname' => 'Taylor',
            'birth_date' => '1949-07-26',
        ]);
        $artist->save();
        $band = new BandComposition([
            'artist_id' => 1,
            'band_id' => 1,
            'get_in' => 1970,
            'get_out' => 1991
        ]);
        $band->save();
        $band = new BandComposition([
            'artist_id' => 2,
            'band_id' => 1,
            'get_in' => 1971,
            'get_out' => 1997
        ]);
        $band->save();
        $band = new BandComposition([
            'artist_id' => 3,
            'band_id' => 1,
            'get_in' => 1970,
        ]);
        $band->save();
        $band = new BandComposition([
            'artist_id' => 4,
            'band_id' => 1,
            'get_in' => 1971,
        ]);
        $band->save();
    }
    private function beatlesBand() {
        $artist = new Artist([
            'name' => 'John',
            'surname' => 'Lennon',
            'birth_date' => '1940-10-09',
        ]);
        $artist->save();
        $artist = new Artist([
            'name' => 'Paul',
            'surname' => 'McCartney',
            'birth_date' => '1942-06-18',
        ]);
        $artist->save();
        $artist = new Artist([
            'name' => 'George',
            'surname' => 'Harrison',
            'birth_date' => '1943-02-25',
        ]);
        $artist->save();
        $artist = new Artist([
            'name' => 'Ringo',
            'surname' => 'Starr',
            'birth_date' => '1940-07-07',
        ]);
        $artist->save();
        $band = new BandComposition([
            'artist_id' => 5,
            'band_id' => 2,
            'get_in' => 1960,
            'get_out' => 1969
        ]);
        $band->save();
        $band = new BandComposition([
            'artist_id' => 6,
            'band_id' => 2,
            'get_in' => 1960,
            'get_out' => 1970
        ]);
        $band->save();
        $band = new BandComposition([
            'artist_id' => 7,
            'band_id' => 2,
            'get_in' => 1960,
            'get_out' => 1970
        ]);
        $band->save();
        $band = new BandComposition([
            'artist_id' => 8,
            'band_id' => 2,
            'get_in' => 1962,
            'get_out' => 1970
        ]);
        $band->save();
    }

    private function nirvanaBand() {
        $artist = new Artist([
            'name' => 'Kurt',
            'surname' => 'Cobain',
            'birth_date' => '1967-02-20',
        ]);
        $artist->save();
        $artist = new Artist([
            'name' => 'Krist',
            'surname' => 'Novoselic',
            'birth_date' => '1965-05-16',
        ]);
        $artist->save();
        $artist = new Artist([
            'name' => 'Dave',
            'surname' => 'Grohl',
            'birth_date' => '1969-01-14',
        ]);
        $artist->save();
        $artist->save();
        $band = new BandComposition([
            'artist_id' => 9,
            'band_id' => 3,
            'get_in' => 1987,
            'get_out' => 1994
        ]);
        $band->save();
        $band = new BandComposition([
            'artist_id' => 10,
            'band_id' => 3,
            'get_in' => 1987,
            'get_out' => 1994
        ]);
        $band->save();
        $band = new BandComposition([
            'artist_id' => 11,
            'band_id' => 3,
            'get_in' => 1990,
            'get_out' => 1994
        ]);
        $band->save();
    }
}
