<?php

namespace App\Http\Controllers;

use App\Models\SeriesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        return view('series.index');
    }

    public function create()
    {
        $series = SeriesModel::all();

        return view('series.registry', [
            'series' => $series
        ]);
    }

    public function save(Request $request)
    {
        $clientName = $request->input('clientName');
        $dtReceive = $request->input('dtReceive');
        $startPoint = $request->input('startPoint');
        $endPoint = $request->input('endPoint');

        $delivery = new SeriesModel();
        $delivery->clientName = $clientName;
        $delivery->dtReceive = $dtReceive;
        $delivery->startPoint = $startPoint;
        $delivery->endPoint = $endPoint;

        $delivery->save();

        return redirect('/registry');
    }
}
