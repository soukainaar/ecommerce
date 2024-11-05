<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Jewelry;
use App\Models\Customer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'jewelry_id'=> Jewelry::inRandomOrder()->first()->id,
            'customer_id'=> Customer::inRandomOrder()->first()->id,
            'note'=> $this->faker->numberBetween(1, 5),
            'comment'=> $this->faker->sentence,
            'date'=> $this->faker->date,
        ];
    }
}
