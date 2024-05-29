<?php

namespace App\Http\Controllers;

use App\Models\SubKriteriaPemilikKost;
use Illuminate\Http\Request;

class KriteriaPemilikKostController extends Controller
{
    //
    public function index()
    {
        $sub1 = SubKriteriaPemilikKost::where('id_kriteriapemilikkost', 1)->get();
        $sub2 = SubKriteriaPemilikKost::where('id_kriteriapemilikkost', 2)->get();
        $sub3 = SubKriteriaPemilikKost::where('id_kriteriapemilikkost', 3)->get();

        return view('dashboard.kriteria.pemilikkost.index', compact('sub1', 'sub2', 'sub3'));
    }
}
