<?php

namespace App\Imports\YTD;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class IncidentImport2 implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {

        // Hapus semua data dari tabel sebelum memulai loop
        DB::table('incidenttype')->truncate();

        foreach ($collection as $row) {

            $data['personnel_injury_type'] = $row['personnel_injury_type'];
            $data['jumlah_injury'] = $row['jumlah_injury'];
            $data['asset_loss'] = $row['asset_loss'];
            $data['jumlah_asset'] = $row['jumlah_asset'];
            $data['environment'] = $row['environment'];
            $data['jumlah_env'] = $row['jumlah_env'];
            $data['security_breach'] = $row['security_breach'];
            $data['jumlah_security'] = $row['jumlah_security'];

            // Masukkan data baru ke dalam tabel
            DB::table('incidenttype')->insert($data);
        }

    }
}
