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
                'icon' => 'bi-cast',
                'color' => 'green',
                'image_url' => 'front-end-assets/images/categories/artificial_grass_carpets.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ],
            [
                "name" => "Waterproofing Chemicals and Admixtures",
                'description' => 'Waterproofing Chemicals and Admixtures',
                'slug' => 'waterproofing',
                'icon' => 'bi-bricks',
                'color' => 'pink',
                'image_url' => 'front-end-assets/images/categories/wall_to_wall_carpets.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "name" => "Flooring",
                'description' => 'Flooring',
                'slug' => 'flooring',
                'icon' => 'bi-film',
                'color' => 'skyblue',
                'image_url' => 'front-end-assets/images/categories/curtain_rods_and_rails.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "name" => "Roofing",
                'description' => 'Roofing',
                'slug' => 'roofing',
                'icon' => 'bi-border-bottom',
                'color' => 'purple',
                'image_url' => 'front-end-assets/images/categories/wall_decor.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "name" => "Agricultural Equipment and Machinery",
                'description' => 'Agricultural Equipment and Machinery',
                'slug' => 'agricultural_equipment',
                'icon' => 'bi-flower1',
                'color' => 'yellow',
                'image_url' => 'front-end-assets/images/categories/artificial_flowers.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "name" => "Hand tools and Construction Machineries",
                'description' => 'Hand tools and Construction Machineries',
                'slug' => 'office_blinds',
                'icon' => 'bi-border-width',
                'color' => 'danger',
                'image_url' => 'front-end-assets/images/categories/office_blinds.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "name" => "Industrial  Safetywears",
                'description' => 'Industrial  Safetywears',
                'slug' => 'industrial_safetywears',
                'icon' => 'bi-hypnotize',
                'color' => 'dark',
                'image_url' => 'front-end-assets/images/categories/anti_slip_mats.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "name" => "Store Equipment",
                'description' => 'Store Equipment',
                'slug' => 'store_equipment',
                'icon' => 'bi-hypnotize',
                'color' => 'dark',
                'image_url' => 'front-end-assets/images/categories/anti_slip_mats.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        Category::insert($categories);
    }
}
