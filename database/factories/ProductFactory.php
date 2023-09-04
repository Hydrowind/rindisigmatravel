<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'cover_image' => fake()->image(null, 360, 360, 'tours', true),
            'description' => fake()->realText($maxNbChars = 400, $indexSize = 2),
            'price' => fake()->randomNumber(7, true),
            'rating' => fake()->numberBetween(3, 5),
            'max_guest' => fake()->randomDigitNotNull(),
            'min_age' => fake()->numberBetween(4, 12),
            'duration' => "?D?N",
            'start_date' => fake()->dateTimeBetween('now', '+1 year'),
            'end_date' => fake()->dateTimeBetween('now', '+1 year'),
            'type' => fake()->numberBetween(0, 3),
        ];
    }
}
