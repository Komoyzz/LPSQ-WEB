<?php

namespace App\Imports\YTD;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class OHSIImport1 implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {

        // Hapus semua data dari tabel sebelum memulai loop
        DB::table('safetymeet')->truncate();

        foreach ($collection as $row) {

            $data['fleet'] = $row['fleet'];
            $data['jumlah_kapal'] = $row['jumlah_kapal'];
            $data['jumlah_laporan'] = $row['jumlah_laporan'];
            $data['aktual'] = $row['aktual'];
            $data['average'] = $row['average'];
            $data['percentage'] = $row['percentage'];

            // Masukkan data baru ke dalam tabel
            DB::table('safetymeet')->insert($data);
        }

    }
}
