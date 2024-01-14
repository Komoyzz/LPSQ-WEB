<?php

namespace App\Imports\YTD;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UAUCImport1 implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {

        // Hapus semua data dari tabel sebelum memulai loop
        DB::table('uaucpermonth')->truncate();

        foreach ($collection as $row) {

            $data['bulan'] = $row['bulan'];
            $data['aktual'] = $row['aktual'];
            $data['target'] = $row['target'];
            $data['average'] = $row['average'];
            $data['persentage'] = $row['persentage'];

            // Masukkan data baru ke dalam tabel
            DB::table('uaucpermonth')->insert($data);
        }

    }
}
