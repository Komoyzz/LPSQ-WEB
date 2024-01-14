<?php

namespace App\Imports\Audit;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CargoImport3 implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {

        // Hapus semua data dari tabel sebelum memulai loop
        DB::table('cargorecbymast')->truncate();

        foreach ($collection as $row) {

            $data['fleet'] = $row['fleet'];
            $data['done'] = $row['done'];
            $data['no_recommendation'] = $row['no_recommendation'];
            $data['recommendation'] = $row['recommendation'];

            // Masukkan data baru ke dalam tabel
            DB::table('cargorecbymast')->insert($data);
        }

    }
}

