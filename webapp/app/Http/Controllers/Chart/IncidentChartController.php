<?php

namespace App\Http\Controllers\Chart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class IncidentChartController extends Controller
{
    public function index()
    {
        $IncidentData = DB::table('incidentperfleet');
        $Incident1Chart = (new LarapexChart)->barChart()
            ->setTitle('Incident Record per Fleet')
            ->setXAxis($IncidentData->pluck('fleet')->toArray())
            ->setDataset([
                [
                    'name' => 'Case',
                    'data' => $IncidentData->pluck('case')->toArray(),
                ]
            ])
            ->setFontColor('white')
            ->setDataLabels('1')
            ->setColors(['#D6FFB7']);


        $IncidentData = DB::table('incidenttype');
        $Incident2Chart = (new LarapexChart)->barChart()
            ->setTitle('Personnel Injury Incident')
            ->setXAxis($IncidentData->pluck('personnel_injury_type')->toArray())
            ->setDataset([
                [
                    'name' => 'Injury',
                    'data' => $IncidentData->pluck('jumlah_injury')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setDataLabels('1')
            ->setColors(['#D6FFB7']);

        $IncidentData = DB::table('incidenttype');
        $Incident3Chart = (new LarapexChart)->barChart()
            ->setTitle('Asset Loss Incident')
            ->setXAxis($IncidentData->pluck('asset_loss')->toArray())
            ->setDataset([
                [
                    'name' => 'Asset',
                    'data' => $IncidentData->pluck('jumlah_asset')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setDataLabels('1')
            ->setColors(['#D6FFB7']);

        $IncidentData = DB::table('incidenttype');
        $Incident4Chart = (new LarapexChart)->barChart()
            ->setTitle('Environment Incident')
            ->setXAxis($IncidentData->pluck('environment')->toArray())
            ->setDataset([
                [
                    'name' => 'Environment',
                    'data' => $IncidentData->pluck('jumlah_env')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setDataLabels('1')
            ->setColors(['#D6FFB7']);

        $IncidentData = DB::table('incidenttype');
        $Incident5Chart = (new LarapexChart)->barChart()
            ->setTitle('Security Incident')
            ->setXAxis($IncidentData->pluck('security_breach')->toArray())
            ->setDataset([
                [
                    'name' => 'Security Breach',
                    'data' => $IncidentData->pluck('jumlah_security')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setDataLabels('1')
            ->setColors(['#D6FFB7']);


        $IncidentData = DB::table('incidentreport');
        $Incident6Chart = (new LarapexChart)->barChart()
            ->setTitle('Incident Report')
            ->setXAxis($IncidentData->pluck('fungsi')->toArray())
            ->setDataset([
                [
                    'name' => 'Jumlah',
                    'data' => $IncidentData->pluck('jumlah')->toArray(),
                ]
            ])
            ->setFontColor('white')
            ->setDataLabels('1')
            ->setColors(['#D6FFB7']);

        return view('YTD.incidentrecord', compact('Incident1Chart', 'Incident2Chart', 'Incident3Chart', 'Incident4Chart', 'Incident5Chart', 'Incident6Chart'));
    }
}
