<?php

namespace App\Imports\Audit;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CircularImport1 implements ToCollection, WithHeadingRow
{
    public function collection(Collection $collection)
    {
        // Hapus semua data dari tabel sebelum memulai loop
        DB::table('totalcircular')->truncate();

        foreach ($collection as $row) {
            $data['bulan'] = $row['bulan'];
            $data['total_circular'] = $row['total_circular'];

            // Masukkan data baru ke dalam tabel
            DB::table('totalcircular')->insert($data);
        }
    }

}

