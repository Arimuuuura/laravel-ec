<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->jobTitle,
            'information' => $this->faker->realText,
            'price' => $this->faker->numberBetween(1, 10000),
            'is_selling' => $this->faker->numberBetween(0, 1),
            'sort_order' => $this->faker->randomNumber,
            'shop_id' => $this->faker->numberBetween(1, 3),
            'secondary_category_id' => $this->faker->numberBetween(1, 12),
            'image1' => $this->faker->numberBetween(1, 9),
            'image2' => $this->faker->numberBetween(1, 9),
            'image3' => $this->faker->numberBetween(1, 9),
            'image4' => $this->faker->numberBetween(1, 9),
        ];
    }
}
