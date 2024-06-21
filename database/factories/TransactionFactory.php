<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'transaction_type' => $this->faker->randomElement(['debit', 'qris', 'cash']),
            'amount' => $this->faker->randomFloat(2, 10000, 10000000),
            'transaction_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'status' => $this->faker->randomElement(['pending', 'completed', 'failed']),
        ];
    }
}
