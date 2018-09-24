<?php

use Illuminate\Database\Seeder;

class AdvertisemententsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('advertisements')->insert([
            'name' => str_random(10),
            'description' => str_random(10),
            'price' => rand(2, 5),
            'category_id' => rand(2, 5),
            'user_id' => rand(2, 5),
        ]);
    }
}
