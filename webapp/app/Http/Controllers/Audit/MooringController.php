<?php

namespace App\Http\Controllers\Audit;

use App\Imports\Audit\MultipleMooring;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class MooringController extends Controller
{
    public function mooringimport()
    {
        return view('Import.mooringopimport');
    }

    public function mooringstore(Request $request)
    {
        try {
            DB::beginTransaction();

            Excel::import(new MultipleMooring, $request->file('excel'));

            return redirect()->back()->with('success', 'Import data sukses. Silahkan cek menu Chart untuk melihat grafik.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Import data gagal. ' . $e->getMessage());
        }
    }
}
