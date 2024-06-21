<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\User;
use App\Models\Worker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class WorkerController extends Controller
{
    public function index(Request $request)
    {
        $workers = Worker::with('user')
            ->when($request->input('name'), function ($query, $name) {
                return $query->where('name', 'like', '%' . $name . '%');
            })
            ->orderBy('id', 'desc')
            ->paginate(5);

        return view('dashboard.worker.index', compact('workers'));
    }

    public function create()
    {
        $services = Service::all();
        $users = User::role('worker')->get();
        return view('dashboard.worker.create', compact('services', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'rating' => 'required|numeric',
            'verified_status' => 'required|boolean',
            'service_id' => 'required|exists:services,id',
        ]);

        $data = $request->all();
        Worker::create($data);
        return redirect()->route('worker.index')->with('success', 'Worker successfully created');
    }

    public function edit($id)
    {
        $worker = \App\Models\Worker::findOrFail($id);
        $services = \App\Models\Service::all();
        $users = User::role('worker')->get();
        return view('dashboard.worker.edit', compact('worker', 'services', 'users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'rating' => 'required|numeric',
            'verified_status' => 'required|boolean',
            'service_id' => 'required|exists:services,id',
        ]);

        $worker = \App\Models\Worker::findOrFail($id);
        $worker->update($request->all());

        return redirect()->route('worker.index')->with('success', 'Worker successfully updated');
    }

    public function destroy($id)
    {
        $worker = Worker::findOrFail($id);
        $userId = $worker->user_id;
        $worker->delete();

        if ($userId) {
            $user = User::find($userId);
            if ($user) {
                $user->delete();
            }
        }

        return redirect()->route('worker.index')->with('success', 'Worker successfully deleted');
    }
}
