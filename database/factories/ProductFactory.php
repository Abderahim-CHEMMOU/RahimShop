<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $random = rand(1,3);
        
        return [
            //
            
            'name' => $this->faker->sentence(),
            // on met sentence à true pour ne pas avoir un tableau
            'description' => $this->faker->sentence($random, true),
            'image' => $this->faker->imageUrl(),
            'price' => $this->faker->numberBetween(1000, 15000),
            'active' => $this->faker->boolean(80)

        ];
    }
}
