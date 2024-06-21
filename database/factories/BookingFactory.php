<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Service;
use App\Models\User;
use App\Models\Worker;
use App\Models\Booking;

class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $startTime = $this->faker->time('H:i');
        $endTime = $this->faker->time('H:i', $startTime);

        return [
            'user_id' => User::factory(),
            'worker_id' => Worker::factory(),
            'service_id' => Service::factory(),
            'booking_date' => $this->faker->dateTimeBetween('-1 month', '+1 month'),
            'start_time' => $startTime,
            'end_time' => $endTime,
            'total_cost' => $this->faker->randomFloat(2, 10000, 10000000),
            'status' => $this->faker->randomElement(['pending', 'confirmed', 'cancelled']),
        ];
    }
}
