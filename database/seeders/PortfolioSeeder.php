<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Portfolio;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array_portfolio = config("data");

        foreach ($array_portfolio as $portofolio) {
            $new_portfolio = new Portfolio;
            $new_portfolio->fill($portofolio);
            $new_portfolio->save();
        }
    }
}
