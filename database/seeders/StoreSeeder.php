<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StoreSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) { // Change 10 to however many stores you want
            DB::table('stores')->insert([
                'name' => $faker->company,
                'location' => $faker->address,
            ]);
        }
    }
}
