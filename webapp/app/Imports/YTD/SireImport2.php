<?php

namespace App\Imports\YTD;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SireImport2 implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {

        // Hapus semua data dari tabel sebelum memulai loop
        DB::table('sirefleet')->truncate();

        foreach ($collection as $row) {

            $data['fleet'] = $row['fleet'];
            $data['sire'] = $row['sire'];
            $data['obs'] = $row['obs'];
            $data['average'] = $row['average'];
            $data['total_vessel'] = $row['total_vessel'];

            // Masukkan data baru ke dalam tabel
            DB::table('sirefleet')->insert($data);
        }

    }
}
