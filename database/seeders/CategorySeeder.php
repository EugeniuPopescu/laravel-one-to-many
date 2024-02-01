<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array_categories = config("category");

        foreach ($array_categories as $category) {
            $new_category = new Category();
            $new_category->fill($category);
            $new_category->save();
        }
    }
}
