<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dodo>
 */
class DodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brand' => fake()->sentence(),
            'size' => fake()->text(),
            'price' => fake()->numberBetween(200,2000),
            'reduction' => fake()->text(),
            'total'=>fake()->numberBetween(200,2000),
            'image' => fake()->image(),
        ];
    }
}
