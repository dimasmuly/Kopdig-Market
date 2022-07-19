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
      /**  $products = [
            [
                'business_detail_id' => '3',
                'product_category_id' => '4',
                'name' => 'Samsung Galaxy',
                'price' => 100,
                'stock' => 100,
                'description' => 'Samsung Brand',
                'thumbnail' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
                'production_date' => '2022-07-05',
                'discount' => '50.00',
                'weight' => '71.38',
                'voucher_id' => '10'
                
            ]
        ];
  
        foreach ($products as $key => $value) {
            Product::create($value);
        } */
    }
}
