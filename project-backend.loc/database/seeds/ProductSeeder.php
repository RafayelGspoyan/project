<?php

use Illuminate\Database\Seeder;
use Faker\Factory AS Faker;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i=0;$i<19;$i++) {
            DB::table('products')->insert([
                'name' => $faker->name,
                'Description' => $faker->text,
                'price' => $faker->numberBetween(10, 90),
            ]);
        }
    }
}
