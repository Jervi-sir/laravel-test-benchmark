<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) { // Change 10 to however many categories you want
            DB::table('categories')->insert([
                'name' => $faker->word,
            ]);
        }
    }
}
