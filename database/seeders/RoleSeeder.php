<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::query()->create([
           'title' => 'admin'
        ]);


        Role::query()->insert([
           [
               'title' => 'user'
           ],
            [
                'title' => 'writer'
            ]
        ]);
    }
}
