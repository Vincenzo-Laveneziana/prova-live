<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Product;

class ProductTableSeeder extends Seeder
{
    
    public function run(Faker $faker)
    {
        $total_products = 10;

        for ($i = 0; $i < $total_products; $i++){
            // Create an instance
            $newProduct = new Product();

            //Pop it
            $newProduct->name = $faker->text(10);
            $newProduct->price = $faker->randomFloat(2, 1, 9999);
            $newProduct->description = $faker->paragraphs(5, true);

            //Save
            $newProduct->save();
        }
    }
}
