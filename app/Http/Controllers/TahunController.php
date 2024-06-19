<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TahunController extends Controller
{
    public function index()
    {
        return view('dashboard.tahun.index');
    }

    public function calculate(Request $request)
    {
        $request->validate([
            'start_year' => 'required|integer',
            'end_year' => 'required|integer',
        ]);

        $startYear = $request->input('start_year');
        $endYear = $request->input('end_year');
        $leapYears = [];

        for ($year = $startYear; $year <= $endYear; $year++) {
            if ($this->isLeapYear($year)) {
                $leapYears[] = $year;
            }
        }

        return view('dashboard.tahun.index', ['leapYears' => $leapYears]);
}
    private function isLeapYear($year)
    {
        if ($year % 4 == 0) {
            if ($year % 100 == 0) {
                if ($year % 400 == 0) {
                    return true;
                }
                return false;
            }
            return true;
        }
        return false;
    }
}
