<?php

namespace App\Imports\Audit;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class MultipleCircular implements WithMultipleSheets
{
    /**
     * @param Collection $collection
     */
    public function sheets(): array
    {
        return [
            0 => new CircularImport1(),
            1 => new CircularImport2(),
        ];
    }
}
