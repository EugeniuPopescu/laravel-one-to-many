<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array_tag = config("tag");

        foreach ($array_tag as $tag) {
            $new_tag = new Tag();
            $new_tag->fill($tag);
            $new_tag->save();
        }
    }
}
