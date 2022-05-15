<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\AlbumExecutor;
use App\Models\Band;
use Illuminate\Database\Seeder;

class AlbumsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->queenAlbums();
        $this->beatlesAlbums();
        $this->nirvanaAlbums();
    }

    private function queenAlbums()
    {
        $album = new Album([
            'name' => 'Queen',
            'release_date' => '1973-07-13',
        ]);
        $album->save();
        $album = new Album([
            'name' => 'Queen II',
            'release_date' => '1974-05-08',
        ]);
        $album->save();
        $album = new Album([
            'name' => 'Sheer Heart Attack',
            'release_date' => '1974-11-08',
        ]);
        $album->save();
        $album = new Album([
            'name' => 'A Night at the Opera',
            'release_date' => '1975-11-21',
        ]);
        $album->save();
        $album = new Album([
            'name' => 'A Day at the Races',
            'release_date' => '1976-12-10',
        ]);
        $album->save();
        $album = new Album([
            'name' => 'News of the World',
            'release_date' => '1977-10-28',
        ]);
        $album->save();
        $album = new Album([
            'name' => 'Jazz',
            'release_date' => '1978-11-10',
        ]);
        $album->save();
        $album = new Album([
            'name' => 'The Game',
            'release_date' => '1980-06-30',
        ]);
        $album->save();
        $album = new Album([
            'name' => 'Flash Gordon',
            'release_date' => '1980-12-08',
        ]);
        $album->save();
        $album = new Album([
            'name' => 'Hot Space',
            'release_date' => '1982-05-21',
        ]);
        $album->save();
        $album = new Album([
            'name' => 'The Works',
            'release_date' => '1984-02-27',
        ]);
        $album->save();
        $album = new Album([
            'name' => 'A Kind of Magic',
            'release_date' => '1986-06-02',
        ]);
        $album->save();
        $album = new Album([
            'name' => 'The Miracle',
            'release_date' => '1989-05-22',
        ]);
        $album->save();
        $album = new Album([
            'name' => 'Innuendo',
            'release_date' => '1991-02-04',
        ]);
        $album->save();
        $album = new Album([
            'name' => 'Made in Heaven',
            'release_date' => '1995-10-06',
        ]);
        $album->save();
        for($i=1; $i<=15; $i++) {
            $executor = new AlbumExecutor([
                'album_id' => $i,
                'model_name' => Band::class,
                'model_id' => 1
            ]);
            $executor->save();
        }
    }

    private function beatlesAlbums()
    {
        $album = new Album([
            'name' => 'Please Please Me',
            'release_date' => '1963-03-22',
        ]);
        $album->save();
        $album = new Album([
            'name' => 'With the Beatles',
            'release_date' => '1963-11-22',
        ]);
        $album->save();
        $album = new Album([
            'name' => 'A Hard Day’s Night',
            'release_date' => '1964-07-10',
        ]);
        $album->save();
        $album = new Album([
            'name' => 'Beatles for Sale',
            'release_date' => '1964-12-04',
        ]);
        $album->save();
        $album = new Album([
            'name' => 'Help!',
            'release_date' => '1965-08-06',
        ]);
        $album->save();
        $album = new Album([
            'name' => 'Rubber Soul',
            'release_date' => '1965-12-03',
        ]);
        $album->save();
        $album = new Album([
            'name' => 'Revolver',
            'release_date' => '1966-08-05',
        ]);
        $album->save();
        $album = new Album([
            'name' => 'Sgt. Pepper\'s Lonely Hearts Club Band',
            'release_date' => '1967-05-26',
        ]);
        $album->save();
        $album = new Album([
            'name' => 'Magical Mystery Tour',
            'release_date' => '1967-11-27',
        ]);
        $album->save();
        $album = new Album([
            'name' => 'The Beatles ("The White Album")',
            'release_date' => '1968-11-22',
        ]);
        $album->save();
        $album = new Album([
            'name' => 'Yellow Submarine',
            'release_date' => '1969-01-13',
        ]);
        $album->save();
        $album = new Album([
            'name' => 'Abbey Road',
            'release_date' => '1969-09-26',
        ]);
        $album->save();
        $album = new Album([
            'name' => 'Let It Be',
            'release_date' => '1970-05-08',
        ]);
        $album->save();
        for($i=16; $i<=28; $i++) {
            $executor = new AlbumExecutor([
                'album_id' => $i,
                'model_name' => Band::class,
                'model_id' => 2
            ]);
            $executor->save();
        }
    }

    private function nirvanaAlbums()
    {
        $album = new Album([
            'name' => 'Bleach',
            'release_date' => '1989-06-15',
        ]);
        $album->save();
        $album = new Album([
            'name' => 'Nevermind',
            'release_date' => '1991-09-24',
        ]);
        $album->save();
        $album = new Album([
            'name' => 'In Utero',
            'release_date' => '1993-09-13',
        ]);
        $album->save();
        for($i=29; $i<=31; $i++) {
            $executor = new AlbumExecutor([
                'album_id' => $i,
                'model_name' => Band::class,
                'model_id' => 3
            ]);
            $executor->save();
        }
    }
}
