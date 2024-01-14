<?php

namespace App\Imports\YTD;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SireImport5 implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {

        // Hapus semua data dari tabel sebelum memulai loop
        DB::table('jumlahkapal')->truncate();

        foreach ($collection as $row) {

            $data['kapal_milik_pis'] = $row['kapal_milik_pis'];
            $data['jumlah_kapal_milik'] = $row['jumlah_kapal_milik'];
            $data['kapal_in_house_mgmt_pis'] = $row['kapal_in_house_mgmt_pis'];
            $data['jumlah_kapal_in_house'] = $row['jumlah_kapal_in_house'];
            $data['kapal_sire'] = $row['kapal_sire'];
            $data['jumlah_kapal_sire'] = $row['jumlah_kapal_sire'];

            // Masukkan data baru ke dalam tabel
            DB::table('jumlahkapal')->insert($data);
        }

    }
}