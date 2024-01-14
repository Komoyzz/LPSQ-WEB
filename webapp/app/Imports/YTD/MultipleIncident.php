<?php

namespace App\Imports\YTD;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class MultipleIncident implements WithMultipleSheets
{
    /**
     * @param Collection $collection
     */
    public function sheets(): array
    {
        return [
            0 => new IncidentImport1(),
            1 => new IncidentImport2(),
            2 => new IncidentImport3(),
        ];
    }
}