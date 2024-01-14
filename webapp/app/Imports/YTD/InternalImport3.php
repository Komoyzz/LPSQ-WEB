<?php

namespace App\Imports\YTD;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class InternalImport3 implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {

        // Hapus semua data dari tabel sebelum memulai loop
        DB::table('ispsfleet')->truncate();

        foreach ($collection as $row) {

            $data['no'] = $row['no'];
            $data['isps_element'] = $row['isps_element'];
            $data['jumlah_nc'] = $row['jumlah_nc'];

            // Masukkan data baru ke dalam tabel
            DB::table('ispsfleet')->insert($data);
        }

    }
}
