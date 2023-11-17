<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Excel as LaravelExcel;
use App\Imports\NavAuditImport;
use Illuminate\Http\Request;

class NavAuditController extends Controller
{
    public function index()
    {
        // Ambil data dari Excel
        $data = Excel::toCollection(new NavAuditImport, 'Book1.xlsx', LaravelExcel::XLSX);

        // Format data dalam array
        $labels = $data->pluck('Fleet')->toArray();
        $values = $data->pluck('Total Vessel')->toArray();
        $labels = $data->pluck('Target')->toArray();
        $values = $data->pluck('Done')->toArray();
        $labels = $data->pluck('Not Yet')->toArray();
        $values = $data->pluck('Average')->toArray();
        $labels = $data->pluck('Persentage')->toArray();


        return view('Audit.navigationaudit', compact('data'));

    }
}
