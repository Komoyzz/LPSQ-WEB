<?php

namespace App\Imports\YTD;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class MultipleInternal implements WithMultipleSheets
{
    /**
     * @param Collection $collection
     */
    public function sheets(): array
    {
        return [
            0 => new InternalImport1(),
            1 => new InternalImport2(),
            2 => new InternalImport3(),
            3 => new InternalImport4(),
            4 => new InternalImport5(),
            5 => new InternalImport6(),
            6 => new InternalImport7(),
        ];
    }
}