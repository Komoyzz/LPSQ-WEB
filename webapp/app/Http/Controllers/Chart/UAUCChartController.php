<?php

namespace App\Http\Controllers\Chart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class UAUCChartController extends Controller
{
    public function index()
    {
        $UAUCData = DB::table('uaucpermonth');
        $excludedBulanValue = 'total';
        $bulanData = $UAUCData
            ->whereNotIn('bulan', [$excludedBulanValue])
            ->pluck('bulan');

        $UAUC1Chart = (new LarapexChart)->barChart()
            ->setTitle('UAUC per month')
            ->setXAxis($bulanData->toArray())
            ->setDataset([
                [
                    'name' => 'Aktual',
                    'data' => $UAUCData->pluck('aktual')->toArray(),
                ],
                [
                    'name' => 'Target',
                    'data' => $UAUCData->pluck('target')->toArray(),
                ],
                [
                    'name' => 'Percentage',
                    'data' => $UAUCData->pluck('persentage')->toArray(),
                ],
            ])
            ->setFontColor('white')
            ->setColors(['#86A873', '#6B4E71', '#4381C1'])
            ->setHeight('400')
            ->setDataLabels('1');


        /**
         *  INISIASI DATA UNTUK CHART 2
         */
        // Mengambil data dari database menggunakan Eloquent
        $fleetData = DB::table('uaucperfleet')
            ->select('fleet', 'target', 'january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december')
            ->get();

        // Inisialisasi array data
        $data = [];

        // Memproses hasil kueri
        foreach ($fleetData as $fleet) {
            $data[$fleet->fleet] = [
                'Target' => $fleet->target,
                'January' => $fleet->january,
                'February' => $fleet->february,
                'March' => $fleet->march,
                'April' => $fleet->april,
                'May' => $fleet->may,
                'June' => $fleet->june,
                'July' => $fleet->july,
                'August' => $fleet->august,
                'September' => $fleet->september,
                'October' => $fleet->october,
                'November' => $fleet->november,
                'December' => $fleet->december,
            ];
        }

        // Kolom yang ingin ditampilkan di sumbu x
        $categories = ['Target', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'Oktober', 'November', 'December'];

        // Mengonversi data untuk format Larapex Chart
        $dataset = [];
        foreach ($data as $fleet => $values) {
            $dataset[] = [
                'name' => $fleet,
                'data' => array_values($values),
            ];
        }

        // Membuat Larapex Bar Chart
        $UAUC2Chart = (new LarapexChart)->barChart()
            ->setFontColor('white')
            ->setTitle('UAUC per Fleet')
            ->setXAxis($categories)
            ->setDataset($dataset);


        /**
         *  INISIASI DATA UNTUK CHART 3
         */
        // Mendapatkan data dari database
        $data = DB::table('rootcause') // Gantilah 'nama_tabel' dengan nama tabel Anda
            ->select('Fleet', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December')
            ->get();

        // Menginisialisasi array kolom bulan
        $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

        // Menginisialisasi array dataset
        $dataset = [];

        // Mengisi array dataset
        foreach ($months as $month) {
            $dataset[] = [
                'name' => $month,
                'data' => $data->pluck($month)->toArray(),
            ];
        }

        // Menginisialisasi Larapex Chart
        $UAUC3Chart = (new LarapexChart)->barChart()
            ->setFontColor('white')
            ->setTitle('Data by Fleet and Month')
            ->setXAxis($data->pluck('Fleet')->toArray())
            ->setDataset($dataset);


        /**
         *  INISIASI DATA UNTUK CHART 4
         */
        // Mengambil data dari database menggunakan Eloquent
        $fleetData = DB::table('nearmiss')
            ->select('category', 'januari', 'februari', 'maret', 'april', 'mei', 'juni', 'juli', 'agustus', 'september', 'oktober', 'november', 'desember')
            ->get();

        // Inisialisasi array data
        $data = [];

        // Memproses hasil kueri
        foreach ($fleetData as $fleet) {
            $data[$fleet->category] = [
                'January' => $fleet->januari,
                'February' => $fleet->februari,
                'March' => $fleet->maret,
                'April' => $fleet->april,
                'May' => $fleet->mei,
                'June' => $fleet->juni,
                'July' => $fleet->juli,
                'August' => $fleet->agustus,
                'September' => $fleet->september,
                'October' => $fleet->oktober,
                'November' => $fleet->november,
                'December' => $fleet->desember,
            ];
        }

        // Kolom yang ingin ditampilkan di sumbu x
        $categories = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'Oktober', 'November', 'December'];

        // Mengonversi data untuk format Larapex Chart
        $dataset = [];
        foreach ($data as $fleet => $values) {
            $dataset[] = [
                'name' => $fleet,
                'data' => array_values($values),
            ];
        }

        // Membuat Larapex Bar Chart
        $UAUC4Chart = (new LarapexChart)->barChart()
            ->setFontColor('white')
            ->setTitle('UA, UA, Near Miss')
            ->setXAxis($categories)
            ->setDataset($dataset)
            ->setColors(['#86A873', '#6B4E71', '#4381C1'])
            ->setDataLabels('1');

        return view('YTD.UAUC', compact('UAUC1Chart', 'UAUC2Chart', 'UAUC3Chart', 'UAUC4Chart'));
    }
}
