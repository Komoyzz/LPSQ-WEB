<?php

namespace App\Imports\Audit;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MWTImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $collection)
    {
        // Hapus semua data dari tabel sebelum memulai loop
        DB::table('mwt')->truncate();

        foreach ($collection as $row) {
            $data['fungsi'] = $row['fungsi'];
            $data['jumlah'] = $row['jumlah'];

            // Masukkan data baru ke dalam tabel
            DB::table('mwt')->insert($data);
        }
    }

}

