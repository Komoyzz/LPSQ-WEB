<?php

namespace App\Imports\YTD;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class InvestigationImport1 implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {

        // Hapus semua data dari tabel sebelum memulai loop
        DB::table('investigation')->truncate();

        foreach ($collection as $row) {

            $data['tahun'] = $row['tahun'];
            $data['jumlah_insiden_accident'] = $row['jumlah_insiden_accident'];
            $data['done'] = $row['done'];
            $data['not_done'] = $row['not_done'];
            $data['investigation_no'] = $row['investigation_no'];


            // Masukkan data baru ke dalam tabel
            DB::table('investigation')->insert($data);
        }

    }
}
