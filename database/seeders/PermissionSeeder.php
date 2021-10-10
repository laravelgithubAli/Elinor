<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::query()->insert([
            [
                'title' => 'read-discounts',
                'label' => 'مشاهده تخفیف'
            ],
            [
                'title' => 'create-discounts',
                'label' => 'ایجاد تخفیف'
            ],
            [
                'title' => 'update-discounts',
                'label' => 'ویرایش تخفیف'
            ],
            [
                'title' => 'delete-discounts',
                'label' => 'حذف تخفیف'
            ],
            [
                'title' => 'read-picture',
                'label' => 'مشاهده تصویر'
            ],
            [
                'title' => 'create-picture',
                'label' => 'ایجاد تصویر'
            ],
            [
                'title' => 'update-picture',
                'label' => 'ویرایش تصویر'
            ],
            [
                'title' => 'delete-picture',
                'label' => 'حذف تصویر'
            ],
            [
                'title' => 'read-offer',
                'label' => 'مشاهده کد تخفیف'
            ],
            [
                'title' => 'create-offer',
                'label' => 'ایجاد کد تخفیف'
            ],
            [
                'title' => 'update-offer',
                'label' => 'ویرایش کد تخفیف'
            ],
            [
                'title' => 'delete-offer',
                'label' => 'حذف کد تخفیف'
            ],
            [
                'title' => 'read-role',
                'label' => 'مشاهده دسته بندی'
            ],
            [
                'title' => 'create-role',
                'label' => 'ایجاد نقش'
            ],
            [
                'title' => 'update-role',
                'label' => 'ویرایش نقش'
            ],
            [
                'title' => 'delete-role',
                'label' => 'حذف نقش'
            ],
            [
                'title' => 'view-dashboard',
                'label' => 'مشاهده داشبورد'
            ]

        ]);
    }
}
