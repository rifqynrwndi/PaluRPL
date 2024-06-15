<?php

namespace App\Http\Controllers;

use App\Models\Borda;
use App\Models\Kost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('landing-page.index');
    }
    public function contact()
    {
        return view('landing-page.contact');
    }
}
