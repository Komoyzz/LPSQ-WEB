<?php

namespace App\Http\Controllers\Chart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class MooringChartController extends Controller
{
    public function index()
    {
        $MooringData = DB::table('mooringbymast');
        $Mooring1Chart = (new LarapexChart)->barChart()
            ->setTitle('Mooring Audit by Master Data Record')
            ->setXAxis($MooringData->pluck('fleet')->toArray())
            ->setDataset([
                [
                    'name' => 'Total Vessels',
                    'data' => $MooringData->pluck('total_vessels')->toArray(),
                ],
                [
                    'name' => 'Target',
                    'data' => $MooringData->pluck('target')->toArray(),
                ],
                [
                    'name' => 'Done',
                    'data' => $MooringData->pluck('done')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#00E396', '#feb019', '#80effe',])
            ->setDataLabels('1')
            ->setHeight('350');

        $MooringData = DB::table('mooringbyms');
        $Mooring2Chart = (new LarapexChart)->barChart()
            ->setTitle('Mooring Audit by MS Data Record')
            ->setXAxis($MooringData->pluck('fleet')->toArray())
            ->setDataset([
                [
                    'name' => 'Total Vessels',
                    'data' => $MooringData->pluck('total_vessels')->toArray(),
                ],
                [
                    'name' => 'Target',
                    'data' => $MooringData->pluck('target')->toArray(),
                ],
                [
                    'name' => 'Done',
                    'data' => $MooringData->pluck('done')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#00E396', '#feb019', '#80effe',])
            ->setDataLabels('1')
            ->setHeight('350');

        $MooringData = DB::table('mooringrecbymast');
        $Mooring3Chart = (new LarapexChart)->horizontalBarChart()
            ->setTitle('Recommendation by Master')
            ->setXAxis($MooringData->pluck('fleet')->toArray())
            ->setDataset([
                [
                    'name' => 'Recommendation',
                    'data' => $MooringData->pluck('recommendation')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#28965A',])
            ->setDataLabels('1')
            ->setHeight('350');

        $MooringData = DB::table('mooringrecbyms');
        $Mooring4Chart = (new LarapexChart)->horizontalBarChart()
            ->setTitle('Recommendation by MS')
            ->setXAxis($MooringData->pluck('fleet')->toArray())
            ->setDataset([
                [
                    'name' => 'Recommendation',
                    'data' => $MooringData->pluck('recommendation')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#28965A',])
            ->setDataLabels('1')
            ->setHeight('350');

        return view('Audit.mooringoperation', compact('Mooring1Chart', 'Mooring2Chart', 'Mooring3Chart', 'Mooring4Chart'));
    }
}
