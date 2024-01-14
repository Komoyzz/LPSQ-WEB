<?php

namespace App\Http\Controllers\Chart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class InvestigationChartController extends Controller
{
    public function index()
    {
        // Chart 1
        $investigationData = DB::table('investigation')->where('Tahun', 2023)->first();
        $doneCount = $investigationData->{'done'};
        $notDoneCount = $investigationData->{'not_done'};
        $investigationNoCount = $investigationData->{'investigation_no'};

        $total = $doneCount + $notDoneCount + $investigationNoCount;

        $percentageDone = ($doneCount / $total) * 100;
        $percentageNotDone = ($notDoneCount / $total) * 100;
        $percentageInvestigationNo = ($investigationNoCount / $total) * 100;

        $Investigation1Chart = (new LarapexChart)->pieChart()
            ->setTitle('Investigation Audit by Master Data Record')
            ->setLabels(['Done', 'Not Done', 'Investigation No'])
            ->setDataset([$percentageDone, $percentageNotDone, $percentageInvestigationNo])
            ->setFontColor('white')
            ->setHeight('300')
            ->setColors(['#00798C', '#86A873', '#6B4E71'])
            ->setDataLabels('1');


        //Chart 2
        $investigationtypeData = DB::table('investigationtype')->where('Tahun', 2023)->first();
        $groundingCount = $investigationtypeData->{'grounding'};
        $collisionCount = $investigationtypeData->{'collision'};
        $allisionCount = $investigationtypeData->{'allision'};
        $injuryCount = $investigationtypeData->{'injury'};
        $assetlossCount = $investigationtypeData->{'asset_loss'};
        $enginebreakCount = $investigationtypeData->{'engine_breakdown'};
        $oilspillCount = $investigationtypeData->{'oil_spill'};

        $total = $groundingCount + $collisionCount + $allisionCount + $injuryCount + $assetlossCount + $enginebreakCount + $oilspillCount;

        $percentageGrounding = ($groundingCount / $total) * 100;
        $percentageCollision = ($collisionCount / $total) * 100;
        $percentageAllision = ($allisionCount / $total) * 100;
        $percentageInjury = ($injuryCount / $total) * 100;
        $percentageAssetLoss = ($assetlossCount / $total) * 100;
        $percentageEngineBreakdown = ($enginebreakCount / $total) * 100;
        $percentageOilSpill = ($oilspillCount / $total) * 100;

        $Investigation2Chart = (new LarapexChart)->pieChart()
            ->setTitle('Investigation Type')
            ->setLabels(['Grounding', 'Collision', 'Allision', 'Injury', 'Asset Loss', 'Engine Breakdown', 'Oil Spill'])
            ->setDataset([$percentageGrounding, $percentageCollision, $percentageAllision, $percentageInjury, $percentageAssetLoss, $percentageEngineBreakdown, $percentageOilSpill])
            ->setFontColor('white')
            ->setHeight('300')
            ->setColors(['#00798C', '#86A873', '#6B4E71', '#C9B1BD', '#FCFCFC', '#8DAA91', '#4381C1'])
            ->setDataLabels('1');


        return view('YTD.investigationrecord', compact('Investigation1Chart', 'Investigation2Chart', 'doneCount', 'notDoneCount', 'investigationNoCount', 'groundingCount', 'collisionCount', 'allisionCount', 'injuryCount', 'assetlossCount', 'enginebreakCount', 'oilspillCount'));
    }
}
