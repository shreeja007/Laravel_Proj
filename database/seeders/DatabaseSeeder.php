<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::truncate();
        \App\Models\Category::truncate(); 
        // \App\Models\User::factory(10)->create();
        $category = \App\Models\Category::create([
            'name' => 'Mobile',
            'description' =>'This category contains mobiles'
        ]);

        // \App\Models\Product::create([
        //     'product_name'=> 'AppleMobile',
        //     'product_desc'=>'This is apple ',
        //     'price'=>'100000',
        //     'category_id'=> $category->id
        // ]);
        \App\Models\Product::factory(10)->create();

    }
}
