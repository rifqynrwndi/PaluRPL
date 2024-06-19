<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tanggal;
use Carbon\Carbon;

class TanggalController extends Controller
{
    public function index()
    {
        return view('dashboard.tanggal.index');
    }

    public function calculate(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $start_date = Carbon::parse($request->start_date);
        $end_date = Carbon::parse($request->end_date);
        $weekends = [];

        for ($date = $start_date; $date->lte($end_date); $date->addDay()) {
            if ($date->isSaturday() || $date->isSunday()) {
                $weekends[] = $date->format('Y-m-d');
            }
        }

        return view('dashboard.tanggal.index', compact('weekends', 'start_date', 'end_date'));
    }
}
