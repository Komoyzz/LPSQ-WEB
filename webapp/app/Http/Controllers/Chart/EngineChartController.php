<?php

namespace App\Http\Controllers\Chart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class EngineChartController extends Controller
{
    public function index()
    {
        $EngineData = DB::table('engineeringaudit');
        $Engine1Chart = (new LarapexChart)->barChart()
            ->setTitle('Engineering Audit')
            ->setXAxis($EngineData->pluck('fleet')->toArray())
            ->setDataset([
                [
                    'name' => 'Done',
                    'data' => $EngineData->pluck('done')->toArray(),
                ],
                [
                    'name' => 'Not Yet',
                    'data' => $EngineData->pluck('not_yet')->toArray(),
                ],
            ])
            ->setDataLabels('1')
            ->setStacked('1')
            ->setFontColor('white')
            ->setColors(['#80effe', '#28965A'])
            ->setHeight('375');

        //Chart 2
        $TotalDone = DB::table('engineeringaudit')->where('fleet', 'Total')->value('done');
        $TotalNotYet = DB::table('engineeringaudit')->where('fleet', 'Total')->value('not_yet');
        $total = $TotalDone + $TotalNotYet;
        $percentageDone = ($TotalDone / $total) * 100;
        $percentageNotYet = ($TotalNotYet / $total) * 100;

        $Engine2Chart = (new LarapexChart)->pieChart()
            ->setTitle('Engineering Audit')
            ->setLabels(['Done', 'Not Yet'])
            ->setDataset([$percentageDone, $percentageNotYet])
            ->setDataLabels('1')
            ->setFontColor('white')
            ->setColors(['#80effe', '#775dd0'])
            ->setHeight('400');

        $EngineData = DB::table('engineeringaudit');
        $Engine3Chart = (new LarapexChart)->barChart()
            ->setTitle('Engineering Audit')
            ->setXAxis($EngineData->pluck('fleet')->toArray())
            ->setDataset([
                [
                    'name' => 'Total Vessels',
                    'data' => $EngineData->pluck('total_vessels')->toArray(),
                ],
                [
                    'name' => 'Target',
                    'data' => $EngineData->pluck('target')->toArray(),
                ],
                [
                    'name' => 'Done',
                    'data' => $EngineData->pluck('done')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#775dd0', '#28965A', '#80effe',])
            ->setDataLabels('1')
            ->setHeight('500');

        return view('Audit.engineeringaudit', compact('Engine1Chart', 'Engine2Chart', 'Engine3Chart', 'TotalDone', 'TotalNotYet'));
    }
}
