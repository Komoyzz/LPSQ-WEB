<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class NavAuditImport implements ToCollection
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $rows)
    {
        //Data navigation audit
        $data = [];

        foreach ($rows as $row) {
            $data[] = [
                'Fleet' => $row[0],
                'Total Vessel' => $row[1],
                'Target' => $row[2],
                'Done' => $row[3],
                'Not Yet' => $row[4],
                'Average' => $row[5],
                'Persentage' => $row[6],
            ];
        }

        return $data;
    }
}
