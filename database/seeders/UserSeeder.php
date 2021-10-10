<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->create([
            'name'=>'Ali',
            'lastname'=>'mohammadi',
            'number'=>'09991234567',
            'email'=>'Clob@gmail.com',
            'password'=>bcrypt('1111')
        ]);

    }
}
