<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class StockFactory extends Factory
{
    public function definition()
    {
        return [
            'product_id' => Product::factory(),
            'type' => $this->faker->numberBetween(1, 2),
            'quantity' => $this->faker->randomNumber,
        ];
    }
}
