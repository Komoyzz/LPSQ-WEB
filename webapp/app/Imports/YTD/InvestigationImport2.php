<?php

namespace App\Imports\YTD;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class InvestigationImport2 implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {

        // Hapus semua data dari tabel sebelum memulai loop
        DB::table('investigationtype')->truncate();

        foreach ($collection as $row) {

            $data['tahun'] = $row['tahun'];
            $data['jumlah_insiden_accident'] = $row['jumlah_insiden_accident'];
            $data['grounding'] = $row['grounding'];
            $data['collision'] = $row['collision'];
            $data['allision'] = $row['allision'];
            $data['injury'] = $row['injury'];
            $data['asset_loss'] = $row['asset_loss'];
            $data['engine_breakdown'] = $row['engine_breakdown'];
            $data['oil_spill'] = $row['oil_spill'];


            // Masukkan data baru ke dalam tabel
            DB::table('investigationtype')->insert($data);
        }

    }
}
