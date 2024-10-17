<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador extends Controller
{
    public function index()
    {
        return view('repaso1');
    }

    public function convert(Request $request)
    {
        $value = $request->input('value');
        $conversionType = $request->input('conversion_type');
        $result = '';

        switch ($conversionType) {
            case 'MBtoGB':
                $result = $value / 1024 . ' GB';
                break;
            case 'GBtoMB':
                $result = $value * 1024 . ' MB';
                break;
            case 'GBtoTB':
                $result = $value / 1024 . ' TB';
                break;
            case 'TBtoGB':
                $result = $value * 1024 . ' GB';
                break;
        }

        return back()->with('result', "Resultado: $result");
    }
}


