<?php

namespace App\Imports\Audit;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class FeedbackImport4 implements ToCollection, WithHeadingRow
{
    public function collection(Collection $collection)
    {
        // Hapus semua data dari tabel sebelum memulai loop
        DB::table('feedbacksub')->truncate();

        foreach ($collection as $row) {
            $data['sub_category'] = $row['sub_category'];
            $data['jumlah'] = $row['jumlah'];

            // Masukkan data baru ke dalam tabel
            DB::table('feedbacksub')->insert($data);
        }
    }

}
