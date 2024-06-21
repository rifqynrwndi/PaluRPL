<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $services = Service::with('category')
            ->when($request->input('service_name'), function ($query, $service_name) {
                return $query->where('service_name', 'like', '%' . $service_name . '%');
            })
            ->orderBy('id', 'desc')
            ->paginate(5);

        return view('dashboard.service.index', compact('services'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('dashboard.service.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
        ]);

        $data = $request->all();
        Service::create($data);
        return redirect()->route('service.index')->with('success', 'Service successfully created');
    }

    public function edit($id)
    {
        $service = \App\Models\Service::findOrFail($id);
        $categories = \App\Models\Category::all();
        return view('dashboard.service.edit', compact('service', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'service_name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
        ]);

        $service = \App\Models\Service::findOrFail($id);
        $service->update($request->all());

        return redirect()->route('service.index')->with('success', 'Service successfully updated');
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        return redirect()->route('service.index')->with('success', 'Service successfully deleted');
    }
}
