<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'title' => 'Book',
                'image' => 'https://cdn1.tgdd.vn/Products/Images/42/114111/iphone-x-256gb-20-400x400.jpg',
            ],
            [
                'title' => 'Laptop-PC',
                'image' => 'https://vcdn.tikicdn.com/media/upload/2018/03/08/bc1f58f2b63d3b5a63deecc6f19bd72f.jpg',
            ],
        ]);
    }
}
