<?php

namespace App\Imports\Audit;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class FeedbackImport3 implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {

        // Hapus semua data dari tabel sebelum memulai loop
        DB::table('feedbackperfleet')->truncate();

        foreach ($collection as $row) {

            $data['fleet_distribution'] = $row['fleet_distribution'];
            $data['open'] = $row['open'];
            $data['closed'] = $row['closed'];
            $data['total'] = $row['total'];

            // Masukkan data baru ke dalam tabel
            DB::table('feedbackperfleet')->insert($data);
        }

    }
}
