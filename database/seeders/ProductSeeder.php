<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 3000) as $index) { // Change 300 to however many products you want
            DB::table('products')->insert([
                'name' => $faker->productName,
                'description' => $faker->text,
                'price' => $faker->randomFloat(2, 1, 100), // Price between 1 and 100
                'category_id' => rand(1, 10), // Adjust according to your categories
                'store_id' => rand(1, 10), // Adjust according to your stores
            ]);
        }
    }
}
