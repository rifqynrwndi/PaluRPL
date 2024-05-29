<?php

namespace App\Http\Controllers;

use App\Models\SubKriteriaMahasiswa;
use Illuminate\Http\Request;

class KriteriaMahasiswaController extends Controller
{
    //
    public function index()
    {
        $sub1 = SubKriteriaMahasiswa::where('id_kriteriamahasiswa', 1)->get();
        $sub2 = SubKriteriaMahasiswa::where('id_kriteriamahasiswa', 2)->get();
        $sub3 = SubKriteriaMahasiswa::where('id_kriteriamahasiswa', 3)->get();
        $sub4 = SubKriteriaMahasiswa::where('id_kriteriamahasiswa', 4)->get();
        $sub5 = SubKriteriaMahasiswa::where('id_kriteriamahasiswa', 5)->get();

        return view('dashboard.kriteria.mahasiswa.index', compact('sub1', 'sub2', 'sub3', 'sub4', 'sub5'));
    }
}
