<?php

namespace App\Imports\YTD;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class MultipleCDI implements WithMultipleSheets
{
    /**
     * @param Collection $collection
     */
    public function sheets(): array
    {
        return [
            0 => new CDIImport1(),
            1 => new CDIImport2(),
        ];
    }
}
