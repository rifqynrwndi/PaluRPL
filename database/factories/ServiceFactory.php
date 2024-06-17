<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'service_name' => $this->faker->name(),
            'category_id' => $this->faker->numberBetween(1, 4),
            'description' => $this->faker->text(),
            'price' => $this->faker->numberBetween(10000, 100000),
        ];
    }
}
