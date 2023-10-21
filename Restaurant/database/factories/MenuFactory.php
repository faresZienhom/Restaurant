<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->title(),
            'description'=>fake()->name(),
            'image' => 'front/assets/images/carousel-' . rand(1,3) . '.png',
            'price'=>fake()->numerify(),
            "categories_id" => Category::inRandomOrder()->first()?->id

        ];
    }
}
