<?php

namespace App\Imports\YTD;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class IncidentImport3 implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {

        // Hapus semua data dari tabel sebelum memulai loop
        DB::table('incidentreport')->truncate();

        foreach ($collection as $row) {

            $data['fungsi'] = $row['fungsi'];
            $data['jumlah'] = $row['jumlah'];

            // Masukkan data baru ke dalam tabel
            DB::table('incidentreport')->insert($data);
        }

    }
}
