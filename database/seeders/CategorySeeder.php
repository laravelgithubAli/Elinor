<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        category::query()->create([
           'category_id' => null,
            'title' => 'دسته بندی اصلی',
            'image' => 'public/categories/placeholder.jpg'
        ]);
    }
}
