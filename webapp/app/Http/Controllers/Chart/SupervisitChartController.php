<?php

namespace App\Http\Controllers\Chart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use ArielMejiaDev\LarapexCharts\LarapexChart;


class SupervisitChartController extends Controller
{
    public function index()
    {
        $SupervisitData = DB::table('supervisitbyts');
        $Supervisit1Chart = (new LarapexChart)->barChart()
            ->setTitle('Supervisit Audit by TS')
            ->setXAxis($SupervisitData->pluck('fleet')->toArray())
            ->setDataset([
                [
                    'name' => 'Done',
                    'data' => $SupervisitData->pluck('done')->toArray(),
                ],
                [
                    'name' => 'Not Yet',
                    'data' => $SupervisitData->pluck('not_yet')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#2D93AD', '#A49966'])
            ->setDataLabels('1')
            ->setStacked('1');

        $SupervisitData = DB::table('supervisitbyms');
        $Supervisit2Chart = (new LarapexChart)->barChart()
            ->setTitle('Superintendent Visit by MS')
            ->setXAxis($SupervisitData->pluck('fleet')->toArray())
            ->setDataset([
                [
                    'name' => 'Done',
                    'data' => $SupervisitData->pluck('done')->toArray(),
                ],
                [
                    'name' => 'Not Yet',
                    'data' => $SupervisitData->pluck('not_yet')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#2D93AD', '#A49966'])
            ->setDataLabels('1')
            ->setStacked('1');

        $SupervisitData = DB::table('supervisitbyts');
        $Supervisit3Chart = (new LarapexChart)->barChart()
            ->setTitle('Superintendent Visit by TS Data Record')
            ->setXAxis($SupervisitData->pluck('fleet')->toArray())
            ->setDataset([
                [
                    'name' => 'Total Vessels',
                    'data' => $SupervisitData->pluck('total_vessels')->toArray(),
                ],
                [
                    'name' => 'Target',
                    'data' => $SupervisitData->pluck('target')->toArray(),
                ],
                [
                    'name' => 'Done',
                    'data' => $SupervisitData->pluck('done')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setDataLabels('1')
            ->setColors(['#2D93AD', '#702632', '#A49966']);

        $SupervisitData = DB::table('supervisitbyms');
        $Supervisit4Chart = (new LarapexChart)->barChart()
            ->setTitle('Superintendent Visit by MS Data Record')
            ->setXAxis($SupervisitData->pluck('fleet')->toArray())
            ->setDataset([
                [
                    'name' => 'Total Vessels',
                    'data' => $SupervisitData->pluck('total_vessels')->toArray(),
                ],
                [
                    'name' => 'Target',
                    'data' => $SupervisitData->pluck('target')->toArray(),
                ],
                [
                    'name' => 'Done',
                    'data' => $SupervisitData->pluck('done')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setDataLabels('1')
            ->setColors(['#2D93AD', '#702632', '#A49966']);

        return view('Audit.superintendentvisit', compact('Supervisit1Chart', 'Supervisit2Chart', 'Supervisit3Chart', 'Supervisit4Chart'));
    }
}
