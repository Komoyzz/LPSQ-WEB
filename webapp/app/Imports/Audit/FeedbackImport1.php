<?php

namespace App\Imports\Audit;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class FeedbackImport1 implements ToCollection, WithHeadingRow
{
    public function collection(Collection $collection)
    {
        // Hapus semua data dari tabel sebelum memulai loop
        DB::table('feedbackstatus')->truncate();

        foreach ($collection as $row) {
            $data['status'] = $row['status'];
            $data['sum'] = $row['sum'];

            // Masukkan data baru ke dalam tabel
            DB::table('feedbackstatus')->insert($data);
        }
    }

}
