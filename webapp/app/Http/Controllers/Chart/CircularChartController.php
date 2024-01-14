<?php

namespace App\Http\Controllers\Chart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class CircularChartController extends Controller
{
    public function index()
    {
        $CircularData = DB::table('totalcircular');
        $Circular1Chart = (new LarapexChart)->lineChart()
            ->setTitle('Total Circular')
            ->setXAxis($CircularData->pluck('bulan')->toArray())
            ->setDataset([
                [
                    'name' => 'Total Circular',
                    'data' => $CircularData->pluck('total_circular')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#9932CC'])
            ->setGrid('1');

        $CircularData = DB::table('categorycircular');
        $Circular2Chart = (new LarapexChart)->barChart()
            ->setTitle('Category Circular')
            ->setXAxis($CircularData->pluck('circular_type')->toArray())
            ->setDataset([
                [
                    'name' => 'Category',
                    'data' => $CircularData->pluck('category_circular')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setDataLabels('1')
            ->setColors(['#A49966']);

        return view('Audit.circular', compact('Circular1Chart', 'Circular2Chart'));
    }
}
