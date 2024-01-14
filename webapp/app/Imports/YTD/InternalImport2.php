<?php

namespace App\Imports\YTD;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class InternalImport2 implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {

        // Hapus semua data dari tabel sebelum memulai loop
        DB::table('ismfleet')->truncate();

        foreach ($collection as $row) {

            $data['no'] = $row['no'];
            $data['ism_element'] = $row['ism_element'];
            $data['jumlah_nc'] = $row['jumlah_nc'];

            // Masukkan data baru ke dalam tabel
            DB::table('ismfleet')->insert($data);
        }

    }
}
