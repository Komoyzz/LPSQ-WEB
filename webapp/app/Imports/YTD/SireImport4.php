<?php

namespace App\Imports\YTD;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SireImport4 implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {

        // Hapus semua data dari tabel sebelum memulai loop
        DB::table('totalsire')->truncate();

        foreach ($collection as $row) {

            $data['vessel'] = $row['vessel'];
            $data['nc'] = $row['nc'];

            // Masukkan data baru ke dalam tabel
            DB::table('totalsire')->insert($data);
        }

    }
}