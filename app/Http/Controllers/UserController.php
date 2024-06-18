<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        // get users with pagination
        $users = DB::table('users')
            ->when($request->input('name'), function ($query, $name) {
                return $query->where('name', 'like', '%' . $name . '%');
            })
            ->orderBy('id', 'desc')
            ->paginate(5);
        return view('dashboard.user.index', compact('users'));
    }

    public function create()
    {
        return view('dashboard.user.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($request->input('password'));
        // add picture
        if ($request->hasFile('avatar')) {
            // Ensure the file upload was successful
            if ($request->file('avatar')->isValid()) {
                // Move the file to the desired directory and store the filename in the data array
                $request->file('avatar')->move(public_path('admin/demo/app/images'), $request->file('avatar')->getClientOriginalName());
                $data['avatar'] = $request->file('avatar')->getClientOriginalName();
            }
        }
        User::create($data);

        if ($request->roles === 'worker') {
            return redirect()->route('worker.create')->with('success', 'User successfully created. You can now create a worker.');
        } else {
            return redirect()->route('user.index')->with('success', 'User successfully created.');
        }
    }

    public function edit($id)
    {
        $user = \App\Models\User::findOrFail($id);
        return view('dashboard.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $user = \App\Models\User::findOrFail($id);
        if ($request->hasFile('avatar')) {
            // Ensure the file upload was successful
            if ($request->file('avatar')->isValid()) {
                // Move the file to the desired directory and store the filename in the data array
                $request->file('avatar')->move(public_path('admin/demo/app/images'), $request->file('avatar')->getClientOriginalName());
                $data['avatar'] = $request->file('avatar')->getClientOriginalName();
            }
        }
        $user->update($data);
        return redirect()->route('user.index')->with('success', 'User successfully updated');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index')->with('success', 'User successfully deleted');
    }
}
