<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            // Tents
            [
                'name' => '4-Person Dome Tent',
                'description' => 'Spacious dome tent perfect for family camping trips',
                'price' => 199.99,
                'stock' => 15,
                'category_id' => 1,
                'is_active' => true,
            ],
            [
                'name' => '2-Person Backpacking Tent',
                'description' => 'Lightweight tent ideal for backpacking adventures',
                'price' => 149.99,
                'stock' => 20,
                'category_id' => 1,
                'is_active' => true,
            ],
            // Sleeping Bags
            [
                'name' => 'Winter Sleeping Bag',
                'description' => 'Warm sleeping bag rated for temperatures down to -10°C',
                'price' => 129.99,
                'stock' => 25,
                'category_id' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Summer Sleeping Bag',
                'description' => 'Lightweight sleeping bag perfect for summer camping',
                'price' => 79.99,
                'stock' => 30,
                'category_id' => 2,
                'is_active' => true,
            ],
            // Camping Furniture
            [
                'name' => 'Camping Chair',
                'description' => 'Comfortable and portable camping chair',
                'price' => 39.99,
                'stock' => 40,
                'category_id' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Folding Camp Table',
                'description' => 'Compact and sturdy camping table',
                'price' => 59.99,
                'stock' => 20,
                'category_id' => 3,
                'is_active' => true,
            ],
            // Cooking Equipment
            [
                'name' => 'Portable Camping Stove',
                'description' => 'Two-burner propane camping stove',
                'price' => 89.99,
                'stock' => 15,
                'category_id' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Camping Cookware Set',
                'description' => 'Complete set of camping pots and pans',
                'price' => 69.99,
                'stock' => 25,
                'category_id' => 4,
                'is_active' => true,
            ],
            // Lighting
            [
                'name' => 'LED Camping Lantern',
                'description' => 'Bright and energy-efficient camping lantern',
                'price' => 29.99,
                'stock' => 35,
                'category_id' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Headlamp',
                'description' => 'Hands-free LED headlamp for night activities',
                'price' => 24.99,
                'stock' => 45,
                'category_id' => 5,
                'is_active' => true,
            ],
        ];

        foreach ($products as $product) {
            Product::create([
                'name' => $product['name'],
                'slug' => Str::slug($product['name']),
                'description' => $product['description'],
                'price' => $product['price'],
                'stock' => $product['stock'],
                'category_id' => $product['category_id'],
                'is_active' => $product['is_active'],
            ]);
        }
    }
} 