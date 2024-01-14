<?php

namespace App\Imports\Audit;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class MultipleFeedback implements WithMultipleSheets
{
    /**
     * @param Collection $collection
     */
    public function sheets(): array
    {
        return [
            0 => new FeedbackImport1(),
            1 => new FeedbackImport2(),
            2 => new FeedbackImport3(),
            3 => new FeedbackImport4(),
        ];
    }
}