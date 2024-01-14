<?php

namespace App\Imports\Audit;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class MultipleMooring implements WithMultipleSheets
{
    /**
     * @param Collection $collection
     */
    public function sheets(): array
    {
        return [
            0 => new MooringImport1(),
            1 => new MooringImport2(),
            2 => new MooringImport3(),
            3 => new MooringImport4(),
        ];
    }
}
