<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customers>
 */
class CustomersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name_customer' => $this->faker->name(),
            'date_of_birth' => $this->faker->date(),
            'address_customer' => $this->faker->address(),
            'status' => 1
        ];
    }
}
