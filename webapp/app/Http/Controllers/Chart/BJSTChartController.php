<?php

namespace App\Http\Controllers\Chart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class BJSTChartController extends Controller
{

    public function index()
    {
        $BJSTData = DB::table('bjst');
        $BJSTChart = (new LarapexChart)->barChart()
            ->setTitle('BJST Record')
            ->setXAxis($BJSTData->pluck('tanggal')->toArray())
            ->setDataset([
                [
                    'name' => 'Total Peserta Hadir',
                    'data' => $BJSTData->pluck('total_peserta_hadir')->toArray(),
                ],
                [
                    'name' => 'Deck',
                    'data' => $BJSTData->pluck('deck')->toArray(),
                ],
                [
                    'name' => 'Engine',
                    'data' => $BJSTData->pluck('engine')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#4381C1', '#86A873', '#6B4E71',])
            ->setDataLabels('1')
            ->setHeight('450');

        return view('YTD.bjst', compact('BJSTChart'));
    }
}
