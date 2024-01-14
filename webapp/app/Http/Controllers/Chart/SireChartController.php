<?php

namespace App\Http\Controllers\Chart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class SireChartController extends Controller
{
    public function index()
    {
        $totalInspectionSIRE = DB::table('sireallinspection')->select('total_inspection_sire')->value('total_inspection_sire');
        $totalObs = DB::table('sireallinspection')->select('total_obs')->value('total_obs');
        $average = DB::table('sireallinspection')->select('average')->value('average');
        $totalVessel = DB::table('sireallinspection')->select('total_vessel')->value('total_vessel');

        $data = [
            'Total Inspection SIRE' => $totalInspectionSIRE,
            'Total Obs' => $totalObs,
            'Average' => $average,
            'Total Vessel' => $totalVessel,
        ];

        $Sire1Chart = (new LarapexChart)->barChart()
            ->setTitle('SIRE All Inspection')
            ->setXAxis(array_keys($data))
            ->addData('Jumlah', [$totalInspectionSIRE, $totalObs, $average, $totalVessel])
            ->setColors(['#C9B1BD'])
            ->setFontColor('white')
            ->setDataLabels('1')
            ->setHeight('400');


        $SireData = DB::table('sirefleet');
        $Sire2Chart = (new LarapexChart)->barChart()
            ->setTitle('SIRE Fleet')
            ->setXAxis($SireData->pluck('fleet')->toArray())
            ->setDataset([
                [
                    'name' => 'SIRE',
                    'data' => $SireData->pluck('sire')->toArray(),
                ],
                [
                    'name' => 'OBS',
                    'data' => $SireData->pluck('obs')->toArray(),
                ],
                [
                    'name' => 'Total average',
                    'data' => $SireData->pluck('average')->toArray(),
                ],
                [
                    'name' => 'Total Vessel',
                    'data' => $SireData->pluck('total_vessel')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#4381C1', '#86A873', '#6B4E71', '#B7990D'])
            ->setDataLabels('1')
            ->setHeight('400');


        $SireData = DB::table('latestsire');
        $Sire3Chart = (new LarapexChart)->barChart()
            ->setTitle('Latest SIRE Inspection NC Aggregate')
            ->setXAxis($SireData->pluck('sire_chapter')->toArray())
            ->setDataset([
                [
                    'name' => 'JUMLAH NC',
                    'data' => $SireData->pluck('jumlah_nc')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#A49966'])
            ->setDataLabels('1')
            ->setHeight('450');


        $SireData = DB::table('totalsire');
        $Sire4Chart = (new LarapexChart)->barChart()
            ->setTitle('Total SIRE NC per Vessel')
            ->setXAxis($SireData->pluck('vessel')->toArray())
            ->setDataset([
                [
                    'name' => 'NC',
                    'data' => $SireData->pluck('nc')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#A49966'])
            ->setHeight('450')
            ->setDataLabels('1');

        $SireData = DB::table('jumlahkapal');
        $Sire5Chart = (new LarapexChart)->barChart()
            ->setTitle('Kapal Milik PIS')
            ->setXAxis($SireData->pluck('kapal_milik_pis')->toArray())
            ->setDataset([
                [
                    'name' => 'Jumlah Kapal Milik',
                    'data' => $SireData->pluck('jumlah_kapal_milik')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#00798C'])
            ->setHeight('450')
            ->setDataLabels('1')
            ->setStacked('1');

        $SireData = DB::table('jumlahkapal');
        $Sire6Chart = (new LarapexChart)->barChart()
            ->setTitle('Kapal In House Mgmt PIS')
            ->setXAxis($SireData->pluck('kapal_in_house_mgmt_pis')->toArray())
            ->setDataset([
                [
                    'name' => 'Jumlah Kapal In House Mgmt PIS',
                    'data' => $SireData->pluck('jumlah_kapal_in_house')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#00798C'])
            ->setHeight('450')
            ->setDataLabels('1');

        $SireData = DB::table('jumlahkapal');
        $Sire7Chart = (new LarapexChart)->barChart()
            ->setTitle('Kapal SIRE')
            ->setXAxis($SireData->pluck('kapal_sire')->toArray())
            ->setDataset([
                [
                    'name' => 'Jumlah Kapal SIRE',
                    'data' => $SireData->pluck('jumlah_kapal_sire')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#00798C'])
            ->setHeight('450')
            ->setDataLabels('1');

        return view('YTD.sirre', compact('Sire1Chart', 'Sire2Chart', 'Sire3Chart', 'Sire4Chart', 'Sire5Chart', 'Sire6Chart', 'Sire7Chart', ));
    }
}
