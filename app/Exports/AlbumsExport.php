<?php

namespace App\Exports;

use App\Models\Album;
use Maatwebsite\Excel\Concerns\FromCollection;

class AlbumsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $albumsData = Album::all();
        $albums = collect();
        $albums->push([
            'name' => 'Name',
            'executor' => 'Artist/Band',
            'album' => 'Album',
        ]);
        foreach ($albumsData as $albumData) {
            $executors = [];
            foreach($albumData->executors as $executor) {
                if(!empty($executor->executor->surname))
                    $executors[] = $executor->executor->name.' '.$executor->executor->surname;
                else
                    $executors[] = $executor->executor->name;
            }
            $albums->push([
                'name' => $albumData->name,
                'executor' => implode(', ', $executors),
                'album' => $albumData->release_date,
            ]);
        }
        return $albums;
    }
}
