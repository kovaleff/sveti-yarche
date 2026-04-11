<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
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
            'phone' => fake()->phoneNumber(),
            'id_service' => \App\Models\Service::factory(),
            'booking_date' => fake()->dateTimeBetween('+1 day', '+1 month'),
        ];
    }

    /**
     * Indicate a booking without a service.
     */
    public function withoutService(): static
    {
        return $this->state(fn (array $attributes) => [
            'id_service' => null,
        ]);
    }
}
