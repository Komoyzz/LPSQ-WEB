<?php

namespace App\Http\Controllers\Chart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class NavChartController extends Controller
{
    public function index()
    {
        $NavData = DB::table('navbymast');
        $Nav1Chart = (new LarapexChart)->barChart()
            ->setTitle('Navigation Audit by Master Data Record')
            ->setXAxis($NavData->pluck('fleet')->toArray())
            ->setDataset([
                [
                    'name' => 'Total Vessels',
                    'data' => $NavData->pluck('total_vessels')->toArray(),
                ],
                [
                    'name' => 'Target',
                    'data' => $NavData->pluck('target')->toArray(),
                ],
                [
                    'name' => 'Done',
                    'data' => $NavData->pluck('done')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#00E396', '#feb019', '#80effe',])
            ->setDataLabels('1')
            ->setHeight('350');

        $NavData = DB::table('navbyms');
        $Nav2Chart = (new LarapexChart)->barChart()
            ->setTitle('Navigation Audit by MS Data Record')
            ->setXAxis($NavData->pluck('fleet')->toArray())
            ->setDataset([
                [
                    'name' => 'Total Vessels',
                    'data' => $NavData->pluck('total_vessels')->toArray(),
                ],
                [
                    'name' => 'Target',
                    'data' => $NavData->pluck('target')->toArray(),
                ],
                [
                    'name' => 'Done',
                    'data' => $NavData->pluck('done')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#00E396', '#feb019', '#80effe',])
            ->setDataLabels('1')
            ->setHeight('350');

        $NavData = DB::table('navrecbymast');
        $Nav3Chart = (new LarapexChart)->horizontalBarChart()
            ->setTitle('Recommendation by Master')
            ->setXAxis($NavData->pluck('fleet')->toArray())
            ->setDataset([
                [
                    'name' => 'Recommendation',
                    'data' => $NavData->pluck('recommendation')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#775dd0'])
            ->setDataLabels('1')
            ->setHeight('350');

        $NavData = DB::table('navrecbyms');
        $Nav4Chart = (new LarapexChart)->horizontalBarChart()
            ->setTitle('Recommendation by MS')
            ->setXAxis($NavData->pluck('fleet')->toArray())
            ->setDataset([
                [
                    'name' => 'Recommendation',
                    'data' => $NavData->pluck('recommendation')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#775dd0'])
            ->setDataLabels('1')
            ->setHeight('350');

        return view('Audit.navigationaudit', compact('Nav1Chart', 'Nav2Chart', 'Nav3Chart', 'Nav4Chart'));
    }
}
