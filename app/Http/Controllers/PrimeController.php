<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimeController extends Controller
{
    public function index()
    {
        return view('prime.index');
    }

    public function calculate(Request $request)
    {
        $request->validate([
            'start_number' => 'required|integer',
            'end_number' => 'required|integer|gte:start_number',
        ]);

        $start_number = $request->input('start_number');
        $end_number = $request->input('end_number');
        $primes = $this->findPrimes($start_number, $end_number);

        return view('prime.index', compact('primes', 'start_number', 'end_number'));
    }

    private function findPrimes($start, $end)
    {
        $primes = [];
        for ($i = $start; $i <= $end; $i++) {
            if ($this->isPrime($i)) {
                $primes[] = $i;
            }
        }
        return $primes;
    }

    private function isPrime($number)
    {
        if ($number <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }
}
