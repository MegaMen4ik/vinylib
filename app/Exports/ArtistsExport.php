<?php

namespace App\Exports;

use App\Models\Artist;
use Maatwebsite\Excel\Concerns\FromCollection;

class ArtistsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $artistsData = Artist::with('bands')->get();
        $artists = collect();
        $artists->push([
            'name' => 'Name',
            'bands' => 'Band(s)',
            'birth_date' => 'Birth date',
        ]);
        foreach ($artistsData as $artistData) {
            $bands = [];
            foreach($artistData->bands as $band) {
                $bands[] = $band->band->name;
            }
            $artists->push([
                'name' => $artistData->name.' '.$artistData->surname,
                'bands' => implode(', ', $bands),
                'birth_date' => $artistData->birth_date,
            ]);
        }
        return $artists;
    }
}
