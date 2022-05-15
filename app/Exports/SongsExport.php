<?php

namespace App\Exports;

use App\Models\Song;
use Maatwebsite\Excel\Concerns\FromCollection;

class SongsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $songsData = Song::with(['album'])->get();
        $songs = collect();
        $songs->push([
            'name' => 'Name',
            'album' => 'Album',
            'executor' => 'Artist/Band',
            'length' => 'Song Length'
        ]);
        foreach ($songsData as $songData) {
            $executors = [];
            foreach($songData->album->executors as $executor) {
                if(!empty($executor->executor->surname))
                    $executors[] = $executor->executor->name.' '.$executor->executor->surname;
                else
                    $executors[] = $executor->executor->name;
            }
            $songs->push([
                'name' => $songData->name,
                'album' => $songData->album->name,
                'executor' => implode(', ', $executors),
                'length' => $songData->length%60 != 0 ? ($songData->length%60 < 10 ? floor($songData->length / 60).':0'.$songData->length%60 : floor($songData->length / 60).':'.$songData->length%60) : floor($songData->length / 60).':00'
            ]);
        }
        return $songs;
    }
}
