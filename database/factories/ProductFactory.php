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
        return [
            'name'=>$this->faker->word(),
            'description'=>$this->faker->words(15,true),
            'quantity'=>$this->faker->numberBetween(1,200),
            'price'=>$this->faker->randomFloat(2,1,1000),
            'sub_category_id'=>$this->faker->numberBetween(1,40),
        ];
    }
}
