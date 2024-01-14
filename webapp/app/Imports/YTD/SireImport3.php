<?php

namespace App\Imports\YTD;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SireImport3 implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {

        // Hapus semua data dari tabel sebelum memulai loop
        DB::table('latestsire')->truncate();

        foreach ($collection as $row) {

            $data['no'] = $row['no'];
            $data['sire_chapter'] = $row['sire_chapter'];
            $data['percentage'] = $row['percentage'];
            $data['jumlah_nc'] = $row['jumlah_nc'];
            $data['fleet_1'] = $row['fleet_1'];
            $data['fleet_2'] = $row['fleet_2'];
            $data['fleet_3'] = $row['fleet_3'];
            $data['fleet_4'] = $row['fleet_4'];
            $data['fleet_5'] = $row['fleet_5'];

            // Masukkan data baru ke dalam tabel
            DB::table('latestsire')->insert($data);
        }

    }
}
