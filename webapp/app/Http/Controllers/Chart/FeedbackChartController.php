<?php

namespace App\Http\Controllers\Chart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class FeedbackChartController extends Controller
{
    public function index()
    {
        $FeedbackData = DB::table('feedbackstatus');
        $Feedback1Chart = (new LarapexChart)->barChart()
            ->setTitle('Negative Feedback Status')
            ->setXAxis($FeedbackData->pluck('status')->toArray())
            ->setDataset([
                [
                    'name' => 'Jumlah',
                    'data' => $FeedbackData->pluck('sum')->toArray(),
                ]
            ])
            ->setFontColor('white')
            ->setDataLabels('1')
            ->setColors(['#A3CEF1']);

        $FeedbackData = DB::table('feedbackperfleet');
        $Feedback2Chart = (new LarapexChart)->barChart()
            ->setTitle('Negative Feedback per Fleet')
            ->setXAxis($FeedbackData->pluck('fleet_distribution')->toArray())
            ->setDataset([
                [
                    'name' => 'Open',
                    'data' => $FeedbackData->pluck('open')->toArray(),
                ],
                [
                    'name' => 'Closed',
                    'data' => $FeedbackData->pluck('closed')->toArray(),
                ]
            ])
            ->setStacked('1')
            ->setFontColor('white')
            ->setDataLabels('1')
            ->setColors(['#2D93AD', '#A49966']);


        $TotalCT = DB::table('feedbackcategory')->where('status', 'C&T')->value('sum');
        $TotalInspector = DB::table('feedbackcategory')->where('status', 'Inspector SP')->value('sum');
        $TotalMarine = DB::table('feedbackcategory')->where('status', 'Marine')->value('sum');
        $TotalRP = DB::table('feedbackcategory')->where('status', 'R&P')->value('sum');

        $total = $TotalCT + $TotalInspector + $TotalMarine + $TotalRP;

        $percentageCT = ($TotalCT / $total) * 100;
        $percentageInspector = ($TotalInspector / $total) * 100;
        $percentageMarine = ($TotalMarine / $total) * 100;
        $percentageRP = ($TotalRP / $total) * 100;

        $Feedback3Chart = (new LarapexChart)->pieChart()
            ->setTitle('Negative Feedback Category')
            ->setLabels(['C&T', 'Inspector SP', 'Marine', 'R&P'])
            ->setDataset([$percentageCT, $percentageInspector, $percentageMarine, $percentageRP])
            ->setFontColor('white')
            ->setColors(['#456990', '#8AA1B1', '#C0B7B1', '#BBC7A4',])
            ->setDataLabels('1');


        $FeedbackData = DB::table('feedbacksub');
        $Feedback4Chart = (new LarapexChart)->barChart()
            ->setTitle('Negative Feedback Category')
            ->setXAxis($FeedbackData->pluck('sub_category')->toArray())
            ->setDataset([
                [
                    'name' => 'Jumlah',
                    'data' => $FeedbackData->pluck('jumlah')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setDataLabels('1')
            ->setColors(['#456990']);

        return view('Audit.negativefeedback', compact('Feedback1Chart', 'Feedback2Chart', 'Feedback3Chart', 'Feedback4Chart', 'TotalCT', 'TotalInspector', 'TotalMarine', 'TotalRP'));
    }
}
