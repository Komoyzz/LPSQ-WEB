<?php

namespace App\Imports\YTD;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UAUCImport4 implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {

        // Hapus semua data dari tabel sebelum memulai loop
        DB::table('nearmiss')->truncate();

        foreach ($collection as $row) {

            $data['category'] = $row['category'];
            $data['januari'] = $row['januari'];
            $data['februari'] = $row['februari'];
            $data['maret'] = $row['maret'];
            $data['april'] = $row['april'];
            $data['mei'] = $row['mei'];
            $data['juni'] = $row['juni'];
            $data['juli'] = $row['juli'];
            $data['agustus'] = $row['agustus'];
            $data['september'] = $row['september'];
            $data['oktober'] = $row['oktober'];
            $data['november'] = $row['november'];
            $data['desember'] = $row['desember'];

            // Masukkan data baru ke dalam tabel
            DB::table('nearmiss')->insert($data);
        }

    }
}