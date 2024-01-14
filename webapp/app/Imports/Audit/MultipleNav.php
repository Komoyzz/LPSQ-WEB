<?php

namespace App\Imports\Audit;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class MultipleNav implements WithMultipleSheets
{
    /**
     * @param Collection $collection
     */
    public function sheets(): array
    {
        return [
            0 => new NavImport1(),
            1 => new NavImport2(),
            2 => new NavImport3(),
            3 => new NavImport4(),
        ];
    }
}

