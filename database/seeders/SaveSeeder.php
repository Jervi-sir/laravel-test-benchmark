<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SaveSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 1000) as $index) { // Change 100 to however many saves you want
            DB::table('saves')->insert([
                'user_id' => rand(1, 50), // Adjust according to your users
                'product_id' => rand(1, 300), // Adjust according to your products
            ]);
        }
    }
}
