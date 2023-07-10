<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name_product' => $this->faker->name(),
            'price' => $this->faker->numberBetween(10000,1000000),
            'color' => $this->faker->colorName(),
            'create_time' => $this->faker->date()
        ];
    }
}
