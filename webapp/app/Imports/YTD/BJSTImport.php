<?php

namespace App\Imports\YTD;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BJSTImport implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {

        // Hapus semua data dari tabel sebelum memulai loop
        DB::table('bjst')->truncate();

        foreach ($collection as $row) {

            $data['tanggal'] = $row['tanggal'];
            $data['total_peserta_hadir'] = $row['total_peserta_hadir'];
            $data['deck'] = $row['deck'];
            $data['engine'] = $row['engine'];
            $data['rating'] = $row['rating'];

            // Masukkan data baru ke dalam tabel
            DB::table('bjst')->insert($data);
        }

    }
}
