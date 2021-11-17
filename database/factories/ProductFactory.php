<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $productsSuffixes = ['Sweater', 'Pants', 'Laptop', 'Lamp', 'Socks'];
        $name = $this->faker->company(). ' '. Arr::random($productsSuffixes);       
        
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->realText(30),
            'price' => $this->faker->numberBetween(10000,100000)          
        ];
    }
}
