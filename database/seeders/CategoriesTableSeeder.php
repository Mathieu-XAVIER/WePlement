<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Santé', 'Nutrition', 'Performances', 'Vitamines et Minéraux', 'Végan', 'Régime', 'Sport'];

        foreach ($categories as $category) {
            Category::factory()->create([
                'cat_name' => $category,
                'cat_slug' => strtolower(str_replace(' ', '-', $category)),
                'cat_description' => 'Catégorie ' . $category,
            ]);
        }
    }
}
