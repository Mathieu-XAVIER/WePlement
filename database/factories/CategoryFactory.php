<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cat_name' => $this->faker->word,
            'cat_description' => $this->faker->sentence,
            'cat_slug' => $this->faker->slug,
            'cat_image' => $this->faker->imageUrl(),
        ];
    }
}
