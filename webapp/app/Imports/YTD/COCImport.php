<?php

namespace App\Imports\YTD;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class COCImport implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {

        // Hapus semua data dari tabel sebelum memulai loop
        DB::table('coc')->truncate();

        foreach ($collection as $row) {

            $data['ship_with_recommendation'] = $row['ship_with_recommendation'];
            $data['total_number_of_recommendation'] = $row['total_number_of_recommendation'];
            $data['bki'] = $row['bki'];
            $data['dnv'] = $row['dnv'];
            $data['nk'] = $row['nk'];
            $data['abs'] = $row['abs'];
            $data['bv'] = $row['bv'];
            $data['kr'] = $row['kr'];

            // Masukkan data baru ke dalam tabel
            DB::table('coc')->insert($data);
        }

    }
}
