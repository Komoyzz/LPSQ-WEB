<?php

namespace App\Http\Controllers\Audit;

use App\Imports\Audit\MultipleNav;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class NavAuditController extends Controller
{
    public function navauditimport()
    {
        return view('Import.navauditimport');
    }

    public function navauditstore(Request $request)
    {
        try {
            DB::beginTransaction();

            Excel::import(new MultipleNav, $request->file('excel'));

            return redirect()->back()->with('success', 'Import data sukses. Silahkan cek menu Chart untuk melihat grafik.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Import data gagal. ' . $e->getMessage());
        }
    }
}