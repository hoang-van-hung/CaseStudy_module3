<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{

    public function run()
    {
        $category = new Category();
        $category->name = 'Giay tay';
        $category->description = 'Giay sang chanh cho nhung cuoc di choi xa';
        $category->save();

        $category = new Category();
        $category->name = 'Giay luoi';
        $category->description = 'Giay cho nhung thang don gian';
        $category->save();

        $category = new Category();
        $category->name = 'Giay tang chieu cao';
        $category->description = 'Giay cho may dua muon cao cung the gioi';
        $category->save();
    }
}
