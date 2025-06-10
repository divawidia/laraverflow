<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $title = rtrim($this->faker->realText(50), '.'),
            'slug' => str($title)->slug(),
            'body' => $this->faker->realText($this->faker->numberBetween(100, 200)),
            'views_count' => $this->faker->numberBetween(0, 100),
            'answers_count' => $this->faker->numberBetween(0, 100),
            'votes_count' => $this->faker->numberBetween(0, 100),
        ];
    }
}
