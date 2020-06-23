<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Review;
use App\Product;

class ReviewTableSeeder extends Seeder
{
    
    public function run(Faker $faker)
    {
        $total_reviews = 50;
        $products = Product::all();

        for ($i = 0; $i < $total_reviews; $i++){
            $newReview = new Review();
            $newReview->product_id = $products->random()->id;
            $newReview->title = $faker->text(20);
            $newReview->body = $faker->paragraphs(2, true);
            $newReview->save();
        }
    }
}
