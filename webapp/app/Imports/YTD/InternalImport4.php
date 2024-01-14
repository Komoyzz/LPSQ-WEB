<?php

namespace App\Imports\YTD;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class InternalImport4 implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {

        // Hapus semua data dari tabel sebelum memulai loop
        DB::table('noncomformity')->truncate();

        foreach ($collection as $row) {

            $data['fleet'] = $row['fleet'];
            $data['audit'] = $row['audit'];
            $data['ism'] = $row['ism'];
            $data['isps'] = $row['isps'];
            $data['env'] = $row['env'];

            // Masukkan data baru ke dalam tabel
            DB::table('noncomformity')->insert($data);
        }

    }
}