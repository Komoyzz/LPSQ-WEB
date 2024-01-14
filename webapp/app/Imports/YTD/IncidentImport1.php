<?php

namespace App\Imports\YTD;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class IncidentImport1 implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {

        // Hapus semua data dari tabel sebelum memulai loop
        DB::table('incidentperfleet')->truncate();

        foreach ($collection as $row) {

            $data['fleet'] = $row['fleet'];
            $data['case'] = $row['case'];

            // Masukkan data baru ke dalam tabel
            DB::table('incidentperfleet')->insert($data);
        }

    }
}
