<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\RawProduct;

class RawProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'raw_id' => $this->faker->numberBetween(1,30),
            'product_id' => $this->faker->numberBetween(1,10),
        ];
    }
}
