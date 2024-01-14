<?php

namespace App\Imports\YTD;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CDIImport2 implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {

        // Hapus semua data dari tabel sebelum memulai loop
        DB::table('cdisection')->truncate();

        foreach ($collection as $row) {

            $data['section'] = $row['section'];
            $data['total_obs'] = $row['total_obs'];

            // Masukkan data baru ke dalam tabel
            DB::table('cdisection')->insert($data);
        }

    }
}