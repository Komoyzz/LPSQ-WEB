<?php

namespace App\Imports\Audit;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CircularImport2 implements ToCollection, WithHeadingRow
{
    public function collection(Collection $collection)
    {
        // Hapus semua data dari tabel sebelum memulai loop
        DB::table('categorycircular')->truncate();

        foreach ($collection as $row) {
            $data['circular_type'] = $row['circular_type'];
            $data['category_circular'] = $row['category_circular'];

            // Masukkan data baru ke dalam tabel
            DB::table('categorycircular')->insert($data);
        }
    }

}
