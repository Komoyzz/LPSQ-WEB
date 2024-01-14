<?php

namespace App\Http\Controllers\Chart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class COCChartController extends Controller
{
    public function index()
    {
        $COCData = DB::table('coc');
        $excludedShipValue = 'total';
        $shipData = $COCData
            ->whereNotIn('ship_with_recommendation', [$excludedShipValue])
            ->pluck('ship_with_recommendation');

        $COCChart = (new LarapexChart)->barChart()
            ->setTitle('COC Dashboard')
            ->setXAxis($shipData->toArray())
            ->setDataset([
                [
                    'name' => 'BKI',
                    'data' => $COCData->pluck('bki')->toArray(),
                ],
                [
                    'name' => 'DNV',
                    'data' => $COCData->pluck('dnv')->toArray(),
                ],
                [
                    'name' => 'NK',
                    'data' => $COCData->pluck('nk')->toArray(),
                ],
                [
                    'name' => 'ABS',
                    'data' => $COCData->pluck('abs')->toArray(),
                ],
                [
                    'name' => 'BV',
                    'data' => $COCData->pluck('bv')->toArray(),
                ],
                [
                    'name' => 'KR',
                    'data' => $COCData->pluck('kr')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setHeight('550');

        return view('YTD.coc', compact('COCChart'));

    }
}
