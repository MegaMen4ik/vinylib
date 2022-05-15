<?php

namespace App\Imports;

use App\Models\Band;
use Maatwebsite\Excel\Concerns\ToModel;

class BandsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Band([
            'name'     => $row[0],
            'starts_at'    => $row[1],
            'ends_at' => $row[2],
        ]);
    }
}
