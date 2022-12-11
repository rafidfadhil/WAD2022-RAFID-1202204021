<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::create([
            'name' => 'Faruqi',
            'no_hp' => '081234567890',
            'email' => 'fariqui@mail.com',
            'password' => '12345678',
        ]);
    }
}
