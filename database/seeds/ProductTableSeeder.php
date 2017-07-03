<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $product = new \App\Product([
        'imagePath' => '',
        'title' => 'Labels',
        'description'=> "some sort of text goes here",
        'price' => 10
      ]);
      $product -> save();
      
        //
    }
}