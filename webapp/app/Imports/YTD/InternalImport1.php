<?php

namespace App\Imports\YTD;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class InternalImport1 implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {

        // Hapus semua data dari tabel sebelum memulai loop
        DB::table('internalperfleet')->truncate();

        foreach ($collection as $row) {

            $data['kapal'] = $row['kapal'];
            $data['jumlah_audit'] = $row['jumlah_audit'];

            // Masukkan data baru ke dalam tabel
            DB::table('internalperfleet')->insert($data);
        }

    }
}