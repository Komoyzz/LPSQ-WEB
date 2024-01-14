<?php

namespace App\Imports\YTD;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class InternalImport6 implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {

        // Hapus semua data dari tabel sebelum memulai loop
        DB::table('ispsoverdue')->truncate();

        foreach ($collection as $row) {

            $data['isps'] = $row['isps'];
            $data['overdue'] = $row['overdue'];
            $data['mendekati_overdue'] = $row['mendekati_overdue'];
            $data['closed'] = $row['closed'];

            // Masukkan data baru ke dalam tabel
            DB::table('ispsoverdue')->insert($data);
        }

    }
}