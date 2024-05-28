<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            'bulk' => 'Bulk',
            'myprotein' => 'MyProtein',
            'nutripure' => 'Nutripure',
            'nutrimuscle' => 'Nutrimuscle',
            'onatera' => 'Onatera',
        ];

        foreach ($brands as $key => $brand) {
            DB::table('brands')->insert([
                'brand_name' => $brand,
                'brand_logo' => $key . '.png',
            ]);
        }
    }
}
