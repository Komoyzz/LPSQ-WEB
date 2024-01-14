<?php

namespace App\Http\Controllers\Chart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class InternalChartController extends Controller
{
    public function index()
    {
        $InternalData = DB::table('internalperfleet');
        $Internal1Chart = (new LarapexChart)->barChart()
            ->setTitle('Internal Audit per Fleet')
            ->setXAxis($InternalData->pluck('kapal')->toArray())
            ->setDataset([
                [
                    'name' => 'Jumlah Audit',
                    'data' => $InternalData->pluck('jumlah_audit')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#A49966'])
            ->setDataLabels('1')
            ->setHeight('600');

        $InternalData = DB::table('ismfleet');
        $Internal2Chart = (new LarapexChart)->barChart()
            ->setTitle('ISM Audit NC per Chapter')
            ->setXAxis([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16])
            ->setDataset([
                [
                    'name' => 'Jumlah NC',
                    'data' => $InternalData->pluck('jumlah_nc')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#A49966'])
            ->setHeight('300')
            ->setDataLabels('1');

        $InternalData = DB::table('ispsfleet');
        $Internal3Chart = (new LarapexChart)->barChart()
            ->setTitle('ISPS Audit NC per Chapter')
            ->setXAxis([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19])
            ->setDataset([
                [
                    'name' => 'Jumlah NC',
                    'data' => $InternalData->pluck('jumlah_nc')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#A49966'])
            ->setHeight('300')
            ->setDataLabels('1');

        $InternalData = DB::table('noncomformity');
        $Internal4Chart = (new LarapexChart)->barChart()
            ->setTitle('Fleet Non-Comformity ISM, ISPS, & ENV')
            ->setXAxis($InternalData->pluck('fleet')->toArray())
            ->setDataset([
                [
                    'name' => 'Audit',
                    'data' => $InternalData->pluck('audit')->toArray(),
                ],
                [
                    'name' => 'ISM',
                    'data' => $InternalData->pluck('ism')->toArray(),
                ],
                [
                    'name' => 'ISPS',
                    'data' => $InternalData->pluck('isps')->toArray(),
                ],
                [
                    'name' => 'ENV',
                    'data' => $InternalData->pluck('env')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#4381C1', '#86A873', '#6B4E71', '#B7990D'])
            ->setDataLabels('1')
            ->setHeight('525');

        $InternalData = DB::table('ismoverdue');
        $Internal5Chart = (new LarapexChart)->horizontalBarChart()
            ->setTitle('ISM Overdue')
            ->setXAxis($InternalData->pluck('ism')->toArray())
            ->setDataset([
                [
                    'name' => 'Overdue',
                    'data' => $InternalData->pluck('overdue')->toArray(),
                ],
                [
                    'name' => 'Mendekati Overdue',
                    'data' => $InternalData->pluck('mendekati_overdue')->toArray(),
                ],
                [
                    'name' => 'Closed',
                    'data' => $InternalData->pluck('Closed')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#4381C1', '#6B4E71', '#86A873'])
            ->setHeight('525')
            ->setDataLabels('1')
            ->setStacked('1');

        $InternalData = DB::table('ispsoverdue');
        $Internal6Chart = (new LarapexChart)->horizontalBarChart()
            ->setTitle('ISPS Overdue')
            ->setXAxis($InternalData->pluck('isps')->toArray())
            ->setDataset([
                [
                    'name' => 'Overdue',
                    'data' => $InternalData->pluck('overdue')->toArray(),
                ],
                [
                    'name' => 'Mendekati Overdue',
                    'data' => $InternalData->pluck('mendekati_overdue')->toArray(),
                ],
                [
                    'name' => 'Closed',
                    'data' => $InternalData->pluck('Closed')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#4381C1', '#6B4E71', '#86A873'])
            ->setHeight('525')
            ->setDataLabels('1')
            ->setStacked('1');

        $InternalData = DB::table('envoverdue');
        $Internal7Chart = (new LarapexChart)->horizontalBarChart()
            ->setTitle('ENV Overdue')
            ->setXAxis($InternalData->pluck('env')->toArray())
            ->setDataset([
                [
                    'name' => 'Overdue',
                    'data' => $InternalData->pluck('overdue')->toArray(),
                ],
                [
                    'name' => 'Mendekati Overdue',
                    'data' => $InternalData->pluck('mendekati_overdue')->toArray(),
                ],
                [
                    'name' => 'Closed',
                    'data' => $InternalData->pluck('Closed')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#4381C1', '#6B4E71', '#86A873'])
            ->setHeight('525')
            ->setDataLabels('1')
            ->setStacked('1');

        return view('YTD.internalaudit', compact('Internal1Chart', 'Internal2Chart', 'Internal3Chart', 'Internal4Chart', 'Internal5Chart', 'Internal6Chart', 'Internal7Chart'));
    }
}
