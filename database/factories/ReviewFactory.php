<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Review;
use App\Models\Booking;
use App\Models\User;
use App\Models\Worker;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'booking_id' => Booking::inRandomOrder()->first()->id,
            'user_id' => User::inRandomOrder()->first()->id,
            'worker_id' => Worker::inRandomOrder()->first()->id,
            'rating' => $this->faker->numberBetween(1, 5),
            'review_text' => $this->faker->paragraph,
            'review_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
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
            'name' => $booking->worker->name,
        ],
    ]);
    }

}
