<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportController extends Controller
{
    public function Import1()
    {
        return view('Import.navauditimport');
    }

    public function Import2()
    {
        return view('Import.cargoopimport');
    }

    public function Import3()
    {
        return view('Import.mooringopimport');
    }

    public function Import4()
    {
        return view('Import.engineauditimport');
    }

    public function Import5()
    {
        return view('Import.supervisitimport');
    }

    public function Import6()
    {
        return view('Import.circularimport');
    }

    public function Import7()
    {
        return view('Import.mwtimport');
    }

    public function Import8()
    {
        return view('Import.feedbackimport');
    }

    public function Import9()
    {
        return view('Import.incidentimport');
    }

    public function Import10()
    {
        return view('Import.investigationimport');
    }

    public function Import11()
    {
        return view('Import.bjstimport');
    }

    public function Import12()
    {
        return view('Import.pscimport');
    }

    public function Import13()
    {
        return view('Import.cdiimport');
    }

    public function Import14()
    {
        return view('Import.sireimport');
    }

    public function Import15()
    {
        return view('Import.internalimport');
    }

    public function Import16()
    {
        return view('Import.uaucimport');
    }

    public function Import17()
    {
        return view('Import.ohsiimport');
    }

    public function Import18()
    {
        return view('Import.cocimport');
    }
}
