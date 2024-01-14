<?php

namespace App\Imports\YTD;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CDIImport1 implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {

        // Hapus semua data dari tabel sebelum memulai loop
        DB::table('cdiaverage')->truncate();

        foreach ($collection as $row) {

            $data['tahun'] = $row['tahun'];
            $data['total_cdi'] = $row['total_cdi'];
            $data['total_obs'] = $row['total_obs'];
            $data['average'] = $row['average'];

            // Masukkan data baru ke dalam tabel
            DB::table('cdiaverage')->insert($data);
        }

    }
}