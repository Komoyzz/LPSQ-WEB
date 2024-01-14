<?php

namespace App\Http\Controllers\Chart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use ArielMejiaDev\LarapexCharts\LarapexChart;


class CargoChartController extends Controller
{
    public function index()
    {
        $CargoData = DB::table('cargobymast');
        $Cargo1Chart = (new LarapexChart)->barChart()
            ->setTitle('Cargo Audit by Master Data Record')
            ->setXAxis($CargoData->pluck('fleet')->toArray())
            ->setDataset([
                [
                    'name' => 'Total Vessels',
                    'data' => $CargoData->pluck('total_vessels')->toArray(),
                ],
                [
                    'name' => 'Target',
                    'data' => $CargoData->pluck('target')->toArray(),
                ],
                [
                    'name' => 'Done',
                    'data' => $CargoData->pluck('done')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#00E396', '#feb019', '#80effe',])
            ->setDataLabels('1')
            ->setHeight('350');

        $CargoData = DB::table('cargobyms');
        $Cargo2Chart = (new LarapexChart)->barChart()
            ->setTitle('Cargo Audit by MS Data Record')
            ->setXAxis($CargoData->pluck('fleet')->toArray())
            ->setDataset([
                [
                    'name' => 'Total Vessels',
                    'data' => $CargoData->pluck('total_vessels')->toArray(),
                ],
                [
                    'name' => 'Target',
                    'data' => $CargoData->pluck('target')->toArray(),
                ],
                [
                    'name' => 'Done',
                    'data' => $CargoData->pluck('done')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#00E396', '#feb019', '#80effe',])
            ->setDataLabels('1')
            ->setHeight('350');

        $CargoData = DB::table('cargorecbymast');
        $Cargo3Chart = (new LarapexChart)->horizontalBarChart()
            ->setTitle('Recommendation by Master')
            ->setXAxis($CargoData->pluck('fleet')->toArray())
            ->setDataset([
                [
                    'name' => 'Recommendation',
                    'data' => $CargoData->pluck('recommendation')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setDataLabels('1')
            ->setHeight('350');

        $CargoData = DB::table('cargorecbyms');
        $Cargo4Chart = (new LarapexChart)->horizontalBarChart()
            ->setTitle('Recommendation by MS')
            ->setXAxis($CargoData->pluck('fleet')->toArray())
            ->setDataset([
                [
                    'name' => 'Recommendation',
                    'data' => $CargoData->pluck('recommendation')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setDataLabels('1')
            ->setHeight('350');

        return view('Audit.cargooperation', compact('Cargo1Chart', 'Cargo2Chart', 'Cargo3Chart', 'Cargo4Chart'));
    }
}
