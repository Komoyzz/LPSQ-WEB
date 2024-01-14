<?php

namespace App\Http\Controllers\YTD;

use App\Imports\YTD\MultipleOHSI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class OHSIController extends Controller
{
    public function ohsiimport()
    {
        return view('Import.ohsiimport');
    }

    public function ohsistore(Request $request)
    {
        try {
            DB::beginTransaction();

            Excel::import(new MultipleOHSI, $request->file('excel'));

            return redirect()->back()->with('success', 'Import data sukses. Silahkan cek menu Chart untuk melihat grafik.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Import data gagal. ' . $e->getMessage());
        }
    }
}