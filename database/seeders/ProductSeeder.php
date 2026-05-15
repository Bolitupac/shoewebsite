<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $path = storage_path('app/products.json');
        $products = json_decode(file_get_contents($path), true) ?? [];

        Product::truncate();

        foreach ($products as $product) {
            Product::create([
                'id'          => $product['id'],
                'name'        => $product['name'],
                'price'       => $product['price'],
                'category'    => (array) $product['category'],
                'section'     => $product['section'],
                'image'       => $product['image'],
                'description' => $product['description'],
                'colour'      => $product['colour'],
                'badge'       => $product['badge'] ?? null,
                'hidden'      => $product['hidden'] ?? false,
            ]);
        }
    }
}
