<?php

namespace App\Imports\YTD;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class MultipleUAUC implements WithMultipleSheets
{
    /**
     * @param Collection $collection
     */
    public function sheets(): array
    {
        return [
            0 => new UAUCImport1(),
            1 => new UAUCImport2(),
            2 => new UAUCImport3(),
            3 => new UAUCImport4(),
        ];
    }
}