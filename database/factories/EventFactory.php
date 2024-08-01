<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->words(rand(3, 6), true),
            'date' => fake()->dateTimeBetween('now', '+1 year'),
            'description' => fake()->text(rand(100, 300)),
            'category_id' => Category::inRandomOrder()->first()->id,
        ];
    }
}
