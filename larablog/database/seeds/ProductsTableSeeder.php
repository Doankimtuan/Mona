<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            Product::insert([
                'name' => $faker->lastName(),
               'id_type' => random_int(1, 4),
                //   'id_suppiler' => random_int(1,10),
                'description' => $faker->realText(50),
                'price' => random_int(100, 1000),
                'promotion_price' => random_int(1, 10),
                'image' => 'chuoi.jpg'
            ]);
        }


    }
}
