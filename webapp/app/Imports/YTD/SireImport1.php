<?php

namespace App\Imports\YTD;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SireImport1 implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {

        // Hapus semua data dari tabel sebelum memulai loop
        DB::table('sireallinspection')->truncate();

        foreach ($collection as $row) {

            $data['total_inspection_sire'] = $row['total_inspection_sire'];
            $data['total_obs'] = $row['total_obs'];
            $data['average'] = $row['average'];
            $data['total_vessel'] = $row['total_vessel'];

            // Masukkan data baru ke dalam tabel
            DB::table('sireallinspection')->insert($data);
        }

    }
}
