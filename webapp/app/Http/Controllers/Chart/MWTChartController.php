<?php

namespace App\Http\Controllers\Chart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class MWTChartController extends Controller
{
    public function index()
    {
        $MWTData = DB::table('mwt');
        $MWTChart = (new LarapexChart)->horizontalBarChart()
            ->setTitle('Management Walkthrough')
            ->setXAxis($MWTData->pluck('fungsi')->toArray())
            ->setDataset([
                [
                    'name' => 'Jumlah',
                    'data' => $MWTData->pluck('jumlah')->toArray(),
                ]
            ])
            ->setFontColor('white')
            ->setDataLabels('1')
            ->setColors(['#A3CEF1']);

        return view('Audit.mwt', compact('MWTChart'));
    }
}
