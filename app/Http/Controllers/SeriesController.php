<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function listarSeries(Request $request)
    {
        $series = [
            'The Flash',
            'Breaking Bad',
            'Stranger Things',
            'Grey\'s Anatomy',
            'The Walking Dead'
        ];

        /*return view('listar-series', [
            'series' => $series
        ]);*/

        return view('listar-series', compact('series'));
    }
}
