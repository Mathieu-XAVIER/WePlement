<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'prod_name' => $this->faker->word,
            'prod_price' => $this->faker->randomFloat(2, 1, 100),
            'prod_desc' => $this->faker->sentence,
            'prod_images' => $this->faker->imageUrl(),
            'brand_id' => \App\Models\Brand::all()->random()->id,
            'category_id' => \App\Models\Category::all()->random()->id,
        ];
    }
}
