<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'title' => "Laptop",
            'price' => "60000",
            'quantity' => "20",
            'model' => "Thinkpad ",
            'company' => "Lenovo",
            'description' => "Best Laptop deals in town",
            'category_id' => 1,

        ]);
    }
}
