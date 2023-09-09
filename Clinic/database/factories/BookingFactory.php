<?php

namespace Database\Factories;

use App\Models\Doctor;
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

            "name" => fake()->name(),
            "email" => fake()->safeEmail(),
            "phone" => fake()->phoneNumber(),
            "doctor_id" => Doctor::inRandomOrder()->first()?->id
        ];
    }
}
