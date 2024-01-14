<?php

namespace App\Http\Controllers\Chart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class PSCChartController extends Controller
{
    public function index()
    {
        $PSCData = DB::table('pscinspection');
        $PSC1Chart = (new LarapexChart)->barChart()
            ->setTitle('PSC Inspection')
            ->setXAxis($PSCData->pluck('fleet')->toArray())
            ->setDataset([
                [
                    'name' => 'PSC Inspection',
                    'data' => $PSCData->pluck('psc_inspection')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#C9B1BD'])
            ->setDataLabels('1')
            ->setHeight('325');

        $PSCData = DB::table('totaldeficiency');
        $PSC2Chart = (new LarapexChart)->barChart()
            ->setTitle('Total Deficiency')
            ->setXAxis($PSCData->pluck('fleet')->toArray())
            ->setDataset([
                [
                    'name' => 'Total Deficiency',
                    'data' => $PSCData->pluck('total_deficiency')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#A49966'])
            ->setDataLabels('1')
            ->setHeight('400');

        $PSCData = DB::table('averagedeficiency');
        $PSC3Chart = (new LarapexChart)->lineChart()
            ->setTitle('Average Deficiency')
            ->setXAxis($PSCData->pluck('fleet')->toArray())
            ->setDataset([
                [
                    'name' => 'Average Deficiency',
                    'data' => $PSCData->pluck('average_deficiency')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#86A873'])
            ->setHeight('325');

        return view('YTD.psc', compact('PSC1Chart', 'PSC2Chart', 'PSC3Chart'));
    }
}
