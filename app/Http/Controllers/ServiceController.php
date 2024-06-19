<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $services = Service::with('category')
            ->when($request->input('service_name'), function ($query, $service_name) {
                return $query->where('service', 'like', '%' . $service_name . '%');
            })
            ->orderBy('id', 'desc')
            ->paginate(5);

        return view('dashboard.service.index', compact('services'));
    }
}
