<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        DB::Table('users')->insert(
            [
                [
                    'name' => 'User',
                    'email' => 'user@gmail.com',
                    'password' => Hash::make('12345678'),
                    'role' => 'user',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'name' => 'Chaman Rastogi',
                    'email' => 'admin@gmail.com',
                    'password' => Hash::make('12345678'),
                    'role' => 'admin',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'name' => 'Anush Rastogi',
                    'email' => 'agent@gmail.com',
                    'password' => Hash::make('12345678'),
                    'role' => 'agent',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ]
            ]

        );
    }
}
