<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                "name" => "Repair and Construction Materials",
                'description' => 'Repair and Construction Materials',
                'slug' => 'repair',
                'icon' => 'fa-mountain-city',
                'color' => 'green',
                'image_url' => 'categories/repair.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ],
            [
                "name" => "Waterproofing Chemicals and Admixtures",
                'description' => 'Waterproofing Chemicals and Admixtures',
                'slug' => 'waterproofing',
                'icon' => 'fa-arrow-up-from-ground-water',
                'color' => 'pink',
                'image_url' => 'categories/waterproof.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "name" => "Flooring",
                'description' => 'Flooring',
                'slug' => 'flooring',
                'icon' => 'fa-trowel-bricks',
                'color' => 'skyblue',
                'image_url' => 'categories/flooring.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "name" => "Roofing",
                'description' => 'Roofing',
                'slug' => 'roofing',
                'icon' => 'fa-helmet-safety',
                'color' => 'purple',
                'image_url' => 'categories/roofing.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "name" => "Agricultural Equipment and Machinery",
                'description' => 'Agricultural Equipment and Machinery',
                'slug' => 'agricultural_equipment',
                'icon' => 'fa-magic',
                'color' => 'yellow',
                'image_url' => 'categories/agriculture.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "name" => "Hand tools and Construction Machineries",
                'description' => 'Hand tools and Construction Machineries',
                'slug' => 'office_blinds',
                'icon' => 'fa-compass-drafting',
                'color' => 'danger',
                'image_url' => 'categories/hand-tools.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "name" => "Industrial  Safetywears",
                'description' => 'Industrial  Safetywears',
                'slug' => 'industrial_safetywears',
                'icon' => 'fa-building',
                'color' => 'dark',
                'image_url' => 'categories/safety-wear.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "name" => "Store Equipment",
                'description' => 'Store Equipment',
                'slug' => 'store_equipment',
                'icon' => 'fa-archive',
                'color' => 'dark',
                'image_url' => 'categories/store.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        Category::insert($categories);
    }
}
