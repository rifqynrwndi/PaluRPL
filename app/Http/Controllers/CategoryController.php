<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = DB::table('categories')
            ->when($request->input('category_name'), function ($query, $category_name) {
                return $query->where('category_name', 'like', '%' . $category_name . '%');
            })
            ->orderBy('id', 'desc')
            ->paginate(5);
        return view('dashboard.category.index', compact('categories'));
    }

    public function create()
    {
        return view('dashboard.category.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Category::create($data);
        return redirect()->route('category.index')->with('success', 'Category successfully created');
    }

    public function edit($id)
    {
        $category = \App\Models\Category::findOrFail($id);
        return view('dashboard.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $category = \App\Models\Category::findOrFail($id);
        $category->update($data);
        return redirect()->route('category.index')->with('success', 'Category successfully updated');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Category successfully deleted');
    }
}
