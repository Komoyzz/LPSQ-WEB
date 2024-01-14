<?php

namespace App\Imports\YTD;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UAUCImport2 implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {

        // Hapus semua data dari tabel sebelum memulai loop
        DB::table('uaucperfleet')->truncate();

        foreach ($collection as $row) {

            $data['fleet'] = $row['fleet'];
            $data['jumlah_kapal'] = $row['jumlah_kapal'];
            $data['target'] = $row['target'];
            $data['january'] = $row['january'];
            $data['february'] = $row['february'];
            $data['march'] = $row['march'];
            $data['april'] = $row['april'];
            $data['may'] = $row['may'];
            $data['june'] = $row['june'];
            $data['july'] = $row['july'];
            $data['august'] = $row['august'];
            $data['september'] = $row['september'];
            $data['october'] = $row['october'];
            $data['november'] = $row['november'];
            $data['december'] = $row['december'];

            // Masukkan data baru ke dalam tabel
            DB::table('uaucperfleet')->insert($data);
        }

    }
}
