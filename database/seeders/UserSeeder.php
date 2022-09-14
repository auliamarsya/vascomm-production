<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Aulia Marsya',
                'email' => 'auliamarsya@gmail.com',
                'password' => Hash::make('auliamarsya'),
                'is_admin' => 0,
                'is_approved' => 0,
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
                'is_admin' => 1,
                'is_approved' => 1
            ]
        ];

        DB::table('users')->insert($users);
    }
}
