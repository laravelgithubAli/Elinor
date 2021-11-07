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

        category::query()->insert([

            [
                'category_id' => '1',
                'title' => 'زنانه',
                'image' => 'public/categories/placeholder.jpg'
            ],
            [
                'category_id' => '1',
                'title' => 'مردانه',
                'image' => 'public/categories/placeholder.jpg'
            ],
            [
                'category_id' => '1',
                'title' => 'بچگانه',
                'image' => 'public/categories/placeholder.jpg'
            ],
            [
                'category_id' => '1',
                'title' => 'زیبایی و سلامت',
                'image' => 'public/categories/placeholder.jpg'
            ],
            [
                'category_id' => '3',
                'title' => 'لباس مردانه',
                'image' => 'public/categories/section-one-man.jpg'
            ],
            [
                'category_id' => '3',
                'title' => 'کفش مردانه',
                'image' => 'public/categories/section-one-man-shose.jpg'
            ],
            [
                'category_id' => '3',
                'title' => 'اکسسوری مردانه ',
                'image' => 'public/categories/section-one-man-accesory.jpg'
            ],
            [
                'category_id' => '3',
                'title' => 'ورزشی مردانه',
                'image' => 'public/categories/section-one-man-sport.jpg'
            ],
            [
                'category_id' => '2',
                'title' => 'لباس زنانه',
                'image' => 'public/categories/placeholder.jpg'
            ],
            [
                'category_id' => '2',
                'title' => 'کفش زنانه',
                'image' => 'public/categories/placeholder.jpg'
            ],
            [
                'category_id' => '2',
                'title' => 'اکسسوری زنانه ',
                'image' => 'public/categories/placeholder.jpg'
            ],
            [
                'category_id' => '2',
                'title' => 'ورزشی زنانه',
                'image' => 'public/categories/placeholder.jpg'
            ],
            [
                'category_id' => '4',
                'title' => 'نوزاد',
                'image' => 'public/categories/placeholder.jpg'
            ],
            [
                'category_id' => '4',
                'title' => 'دخترانه',
                'image' => 'public/categories/placeholder.jpg'
            ],
            [
                'category_id' => '4',
                'title' => 'پسرانه',
                'image' => 'public/categories/placeholder.jpg'
            ],
            [
                'category_id' => '5',
                'title' => 'لوازم آرایشی',
                'image' => 'public/categories/placeholder.jpg'
            ],
            [
                'category_id' => '5',
                'title' => 'لوازم بهداشتی',
                'image' => 'public/categories/placeholder.jpg'
            ],
            [
                'category_id' => '5',
                'title' => 'لوازم شخصی برقی',
                'image' => 'public/categories/placeholder.jpg'
            ],
            [
                'category_id' => '5',
                'title' => 'عطر',
                'image' => 'public/categories/placeholder.jpg'
            ],
            [
                'category_id' => '5',
                'title' => 'ابزار سلامت',
                'image' => 'public/categories/placeholder.jpg'
            ],

        ]);
    }
}
