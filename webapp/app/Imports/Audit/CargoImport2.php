<?php

namespace App\Imports\Audit;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CargoImport2 implements ToCollection, WithHeadingRow
{
    public function collection(Collection $collection)
    {
        // Hapus semua data dari tabel sebelum memulai loop
        DB::table('cargobyms')->truncate();

        foreach ($collection as $row) {
            $data['fleet'] = $row['fleet'];
            $data['total_vessels'] = $row['total_vessels'];
            $data['target'] = $row['target'];
            $data['done'] = $row['done'];
            $data['not_yet'] = $row['not_yet'];
            $data['average'] = $row['average'];
            $data['persentage'] = $row['persentage'];

            // Masukkan data baru ke dalam tabel
            DB::table('cargobyms')->insert($data);
        }
    }

}

