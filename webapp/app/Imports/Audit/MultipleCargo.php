<?php

namespace App\Imports\Audit;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class MultipleCargo implements WithMultipleSheets
{
    /**
     * @param Collection $collection
     */
    public function sheets(): array
    {
        return [
            0 => new CargoImport1(),
            1 => new CargoImport2(),
            2 => new CargoImport3(),
            3 => new CargoImport4(),
        ];
    }
}