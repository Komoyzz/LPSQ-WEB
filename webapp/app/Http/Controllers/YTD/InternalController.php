<?php

namespace App\Http\Controllers\YTD;

use App\Imports\YTD\MultipleInternal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class InternalController extends Controller
{
    public function internalimport()
    {
        return view('Import.internalimport');
    }

    public function internalstore(Request $request)
    {
        try {
            DB::beginTransaction();

            Excel::import(new MultipleInternal, $request->file('excel'));

            return redirect()->back()->with('success', 'Import data sukses. Silahkan cek menu Chart untuk melihat grafik.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Import data gagal. ' . $e->getMessage());
        }
    }
}
