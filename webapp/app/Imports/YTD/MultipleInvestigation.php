<?php

namespace App\Imports\YTD;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class MultipleInvestigation implements WithMultipleSheets
{
    /**
     * @param Collection $collection
     */
    public function sheets(): array
    {
        return [
            0 => new InvestigationImport1(),
            1 => new InvestigationImport2(),
        ];
    }
}
