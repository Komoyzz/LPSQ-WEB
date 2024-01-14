<?php

namespace App\Imports\YTD;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PSCImport3 implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {

        // Hapus semua data dari tabel sebelum memulai loop
        DB::table('averagedeficiency')->truncate();

        foreach ($collection as $row) {

            $data['fleet'] = $row['fleet'];
            $data['average_deficiency'] = $row['average_deficiency'];

            // Masukkan data baru ke dalam tabel
            DB::table('averagedeficiency')->insert($data);
        }

    }
}
