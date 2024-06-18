<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\User;
use App\Models\Worker;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ReviewController extends Controller
{
    public function index(Request $request)
    {
        $reviews = Review::with('user')
            ->when($request->input('name'), function ($query, $name) {
                return $query->where('name', 'like', '%' . $name . '%');
            })
            ->orderBy('id', 'desc')
            ->paginate(5);

        return view('dashboard.review.index', compact('reviews'));
    }

    public function create()
    {
        $reviews = Review::all();
        $bookings = Booking::all();
        $users = User::role('user')->get();
        $workers = User::role('worker')->get();
        return view('dashboard.review.create', compact('reviews', 'bookings', 'users', 'workers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'booking_id' => 'required|exists:bookings,id',
            'user_id' => 'required|exists:users,id',
            'worker_id' => 'required|exists:workers,id',
            'rating' => 'required|numeric',
            'review_text' => 'required|string',
            'review_date' => 'required|date',
        ]);

        $data = $request->all();
        Review::create($data);
        return redirect()->route('review.index')->with('success', 'Review successfully created');
    }

    public function edit($id)
    {
        $review = \App\Models\Review::findOrFail($id);
        $bookings = Booking::all();
        $users = User::role('user')->get();
        $workers = User::role('worker')->get();
        return view('dashboard.review.edit', compact('review', 'bookings', 'users', 'workers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'booking_id' => 'required|exists:bookings,id',
            'user_id' => 'required|exists:users,id',
            'worker_id' => 'required|exists:workers,id',
            'rating' => 'required|numeric',
            'review_text' => 'required|string',
            'review_date' => 'required|date',
        ]);

        $review = \App\Models\Review::findOrFail($id);
        $review->update($request->all());

        return redirect()->route('review.index')->with('success', 'Review successfully updated');
    }

    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->route('review.index')->with('success', 'Review successfully deleted');
    }

    public function getBookingDetails($id)
    {
        $booking = Booking::with(['user', 'worker'])->find($id);

        if (!$booking) {
            return response()->json(['error' => 'Booking not found'], 404);
        }

        return response()->json([
            'user' => [
                'id' => $booking->user->id,
                'name' => $booking->user->name,
            ],
            'worker' => [
                'id' => $booking->worker->id,
                'name' => $booking->worker->user->name,
            ],
        ]);
    }

}
