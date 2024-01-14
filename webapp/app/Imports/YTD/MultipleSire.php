<?php

namespace App\Imports\YTD;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class MultipleSire implements WithMultipleSheets
{
    /**
     * @param Collection $collection
     */
    public function sheets(): array
    {
        return [
            0 => new SireImport1(),
            1 => new SireImport2(),
            2 => new SireImport3(),
            3 => new SireImport4(),
            4 => new SireImport5(),
        ];
    }
}