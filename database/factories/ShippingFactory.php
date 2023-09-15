<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shipping>
 */
class ShippingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'address' => $this->faker->streetAddress(),
            'city' => $this->faker->city(),
            'state' => $this->faker->stateAbbr(),
            'zip_code' => $this->faker->numberBetween(13720000, 14098022),
            'district' => $this->faker->word(),
            'number' => $this->faker->numberBetween(0, 300),
            'complement' => $this->faker->word(),
            'tracking_code' => $this->faker->word(),
            'status' => $this->faker->randomNumber(5)
        ];
    }
}
