<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => Customer::inRandomOrder()->first()->id,
            'date_order' => $this->faker->date(),
            'status' => $this->faker->randomElement(['pending', 'in delivery', 'delivered']),
            'total' => $this->faker->randomFloat(2, 200, 1000),
        ];
    }
}
