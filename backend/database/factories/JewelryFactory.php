<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categorie;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jewelry>
 */
class JewelryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'categorie_id' => $this->faker->faker->randomElement(Categorie::pluck('id')->toArray()),
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'materiel' => $this->faker->word,
            'brand' => $this->faker->company,
        ];
    }
}
