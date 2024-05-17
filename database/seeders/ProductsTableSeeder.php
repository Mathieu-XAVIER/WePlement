<?php

    namespace Database\Seeders;

    use App\Models\Product;
    use Illuminate\Database\Seeder;

    class ProductsTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         */
        public function run(): void
        {
            Product::factory()->count(50)->create();
        }
    }
