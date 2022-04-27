<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            array("name" => 'women'),
            array("name" => 'men'),
            array("name" => 'footwear'),
            array("name" => 'accessories'),
            array("name" => 'sales'),
            array("name" => 'blog'),

        ]);
    }
}
