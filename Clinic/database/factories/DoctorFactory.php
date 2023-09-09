<?php

namespace Database\Factories;

use App\Models\Major;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
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
            "city" => fake()->city(),
            "email" => fake()->safeEmail(),
            "password" => Hash::make('password'),
            "image" => fake()->imageUrl(),
            "major_id" => Major::inRandomOrder()->first()?->id
        ];
    }
}
