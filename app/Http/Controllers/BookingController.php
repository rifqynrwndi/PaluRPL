<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;
use App\Models\Worker;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BookingController extends Controller
{
    public function index(Request $request)
    {
        $bookings = Booking::with('user')
            ->when($request->input('name'), function ($query, $name) {
                return $query->where('name', 'like', '%' . $name . '%');
            })
            ->orderBy('id', 'desc')
            ->paginate(5);

        return view('dashboard.booking.index', compact('bookings'));
    }

    public function create()
    {
        $bookings = Booking::all();
        $users = User::role('user')->get();
        $workers = User::role('worker')->get();
        $services = Service::all();
        return view('dashboard.booking.create', compact('bookings', 'users', 'workers', 'services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'worker_id' => 'required|exists:workers,id',
            'service_id' => 'required|exists:services,id',
            'booking_date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
            'total_cost' => 'required|numeric',
            'status' => 'required|string',
        ]);

        $data = $request->all();
        Booking::create($data);
        return redirect()->route('booking.index')->with('success', 'Booking successfully created');
    }

    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        $users = User::role('user')->get();
        $workers = Worker::with('user')->get();
        $services = Service::all();
        return view('dashboard.booking.edit', compact('booking', 'users', 'workers', 'services'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'worker_id' => 'required|exists:workers,id',
            'service_id' => 'required|exists:services,id',
            'booking_date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
            'total_cost' => 'required|numeric',
            'status' => 'required|string',
        ]);

        $booking = \App\Models\Booking::findOrFail($id);
        $booking->update($request->all());

        return redirect()->route('booking.index')->with('success', 'Booking successfully updated');
    }

    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return redirect()->route('booking.index')->with('success', 'Booking successfully deleted');
    }

}
