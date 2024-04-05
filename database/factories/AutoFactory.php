<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Auto>
 */
class AutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "stamp" => fake()->company(),
            "region_id" => fake()->numberBetween(1, 16),
            "user_id" => fake()->numberBetween(1, 100),
            "in_deposit" => fake()->numberBetween(0, 1),
            "created_at" => now(),
            "updated_at" => now(),
        ];
    }
}
