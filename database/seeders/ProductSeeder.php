<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'title' => 'Product 1',
            'description' => 'Description for Product 1',
            'price' => 10000,
            'stock' => 50,
            'image' => 'product1.jpg',
        ]);

        Product::create([
            'title' => 'Product 2',
            'description' => 'Description for Product 2',
            'price' => 20000,
            'stock' => 30,
            'image' => 'product2.jpg',
        ]);
        Product::create([
            'title' => 'Product 3',
            'description' => 'Description for Product 3',
            'price' => 30000,
            'stock' => 20,
            'image' => 'product3.jpg',
        ]);
        Product::create([
            'title' => 'Product 4',
            'description' => 'Description for Product 4',
            'price' => 40000,
            'stock' => 10,
            'image' => 'product4.jpg',
        ]);
        Product::create([
            'title' => 'Product 5',
            'description' => 'Description for Product 5',
            'price' => 50000,
            'stock' => 5,
            'image' => 'product5.jpg',
        ]);
    }
}
