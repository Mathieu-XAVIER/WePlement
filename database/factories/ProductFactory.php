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
            'prod_nom' => $this->faker->word,
            'prod_prix' => $this->faker->randomFloat(2, 1, 100),
            'prod_desc' => $this->faker->sentence,
            'prod_marque' => $this->faker->company,
            'prod_images' => json_encode([$this->faker->imageUrl()]),
        ];
    }
}
