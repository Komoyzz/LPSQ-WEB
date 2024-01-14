<?php

namespace App\Http\Controllers\Chart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class OHSIChartController extends Controller
{
    public function index()
    {
        $OHSIData = DB::table('safetymeet');
        $OHSI1Chart = (new LarapexChart)->barChart()
            ->setTitle('Safety Meeting')
            ->setXAxis($OHSIData->pluck('fleet')->toArray())
            ->setDataset([
                [
                    'name' => 'Jumlah Laporan',
                    'data' => $OHSIData->pluck('jumlah_laporan')->toArray(),
                ],
                [
                    'name' => 'Aktual',
                    'data' => $OHSIData->pluck('aktual')->toArray(),
                ],
                [
                    'name' => 'Average',
                    'data' => $OHSIData->pluck('average')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#86A873', '#6B4E71', '#4381C1'])
            ->setDataLabels('1')
            ->setHeight('350');

        $OHSIData = DB::table('safetymeetpermonth');
        $OHSI2Chart = (new LarapexChart)->barChart()
            ->setTitle('Safety Meeting per Month')
            ->setXAxis($OHSIData->pluck('month')->toArray())
            ->setDataset([
                [
                    'name' => 'Fleet 1',
                    'data' => $OHSIData->pluck('fleet_1')->toArray(),
                ],
                [
                    'name' => 'Fleet 2',
                    'data' => $OHSIData->pluck('fleet_2')->toArray(),
                ],
                [
                    'name' => 'Fleet 3',
                    'data' => $OHSIData->pluck('fleet_3')->toArray(),
                ],
                [
                    'name' => 'Fleet 4',
                    'data' => $OHSIData->pluck('fleet_4')->toArray(),
                ],
                [
                    'name' => 'Fleet 5',
                    'data' => $OHSIData->pluck('fleet_5')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setHeight('350');

        $OHSIData = DB::table('ohsi');
        $OHSI3Chart = (new LarapexChart)->barChart()
            ->setTitle('OHSI')
            ->setXAxis($OHSIData->pluck('fleet')->toArray())
            ->setDataset([
                [
                    'name' => 'Jumlah Laporan',
                    'data' => $OHSIData->pluck('jumlah_laporan')->toArray(),
                ],
                [
                    'name' => 'Aktual',
                    'data' => $OHSIData->pluck('aktual')->toArray(),
                ],
                [
                    'name' => 'Average',
                    'data' => $OHSIData->pluck('average')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#86A873', '#6B4E71', '#4381C1'])
            ->setDataLabels('1')
            ->setHeight('350');

        $OHSIData = DB::table('ohsipermonth');
        $OHSI4Chart = (new LarapexChart)->barChart()
            ->setTitle('OHSI per Month')
            ->setXAxis($OHSIData->pluck('month')->toArray())
            ->setDataset([
                [
                    'name' => 'Fleet 1',
                    'data' => $OHSIData->pluck('fleet_1')->toArray(),
                ],
                [
                    'name' => 'Fleet 2',
                    'data' => $OHSIData->pluck('fleet_2')->toArray(),
                ],
                [
                    'name' => 'Fleet 3',
                    'data' => $OHSIData->pluck('fleet_3')->toArray(),
                ],
                [
                    'name' => 'Fleet 4',
                    'data' => $OHSIData->pluck('fleet_4')->toArray(),
                ],
                [
                    'name' => 'Fleet 5',
                    'data' => $OHSIData->pluck('fleet_5')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setHeight('350');

        return view('YTD.ohsisftmt', compact('OHSI1Chart', 'OHSI2Chart', 'OHSI3Chart', 'OHSI4Chart'));
    }
}
