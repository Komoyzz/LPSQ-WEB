<?php

namespace App\Imports\YTD;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class MultipleOHSI implements WithMultipleSheets
{
    /**
     * @param Collection $collection
     */
    public function sheets(): array
    {
        return [
            0 => new OHSIImport1(),
            1 => new OHSIImport2(),
            2 => new OHSIImport3(),
            3 => new OHSIImport4(),
        ];
    }
}