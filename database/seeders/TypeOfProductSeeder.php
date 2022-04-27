<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypeOfProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_of_products')->insert([
            array("name" => 'HotCollection'),
            array("name" => 'FeaturedItems'),
            array("name" => 'TrendingItems'),
        ]);
    }
}
