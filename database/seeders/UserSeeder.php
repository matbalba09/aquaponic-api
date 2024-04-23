<?php

namespace Database\Seeders;

use App\Helper\Helper;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        User::insert([
            [
                'username' => 'sample01',
                'email' => 'sample01@gmail.com',
                'password' => Hash::make('password01'),
                'created_at' => Helper::getDateNow(),
                'updated_at' => Helper::getDateNow(),
            ],
            [
                'username' => 'sample02',
                'email' => 'sample02@gmail.com',
                'password' => Hash::make('password02'),
                'created_at' => Helper::getDateNow(),
                'updated_at' => Helper::getDateNow(),
            ],
            [
                'username' => 'sample03',
                'email' => 'sample03@gmail.com',
                'password' => Hash::make('password03'),
                'created_at' => Helper::getDateNow(),
                'updated_at' => Helper::getDateNow(),
            ],
        ]);
    }
}