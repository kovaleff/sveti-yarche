<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'content' => fake()->paragraphs(5, true),
            'slug' => fake()->unique()->slug(),
            'main_image' => null,
        ];
    }

    /**
     * Article with main slug.
     */
    public function main(): static
    {
        return $this->state(fn (array $attributes) => [
            'slug' => 'main',
        ]);
    }

    /**
     * Article with booking slug.
     */
    public function booking(): static
    {
        return $this->state(fn (array $attributes) => [
            'slug' => 'booking',
        ]);
    }

    /**
     * Article with practice-about slug.
     */
    public function practiceAbout(): static
    {
        return $this->state(fn (array $attributes) => [
            'slug' => 'practice-about',
        ]);
    }
}
