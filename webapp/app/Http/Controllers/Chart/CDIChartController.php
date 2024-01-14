<?php

namespace App\Http\Controllers\Chart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class CDIChartController extends Controller
{
    public function index()
    {
        $CDIData = DB::table('cdiaverage');
        $CDI1Chart = (new LarapexChart)->barChart()
            ->setTitle('CDI Average')
            ->setXAxis([$CDIData->pluck('tahun')->toArray()])
            ->setDataset([
                [
                    'name' => 'Total CDI',
                    'data' => $CDIData->pluck('total_cdi')->toArray(),
                ],
                [
                    'name' => 'Total OBS',
                    'data' => $CDIData->pluck('total_obs')->toArray(),
                ],
                [
                    'name' => 'Average',
                    'data' => $CDIData->pluck('average')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#00798C', '#B7990D', '#6B4E71',])
            ->setDataLabels('1')
            ->setHeight('450');

        $CDIData = DB::table('cdisection');
        $CDI2Chart = (new LarapexChart)->barChart()
            ->setTitle('CDI Section')
            ->setXAxis($CDIData->pluck('section')->toArray())
            ->setDataset([
                [
                    'name' => 'Total OBS',
                    'data' => $CDIData->pluck('total_obs')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#C9B1BD'])
            ->setDataLabels('1')
            ->setHeight('450');

        return view('YTD.CDI', compact('CDI1Chart', 'CDI2Chart'));
    }
}
