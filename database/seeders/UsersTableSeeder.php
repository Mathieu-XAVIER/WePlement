<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('users')->insert([
        [
            'name' => 'Admin',
            'email' => 'admin@weplement.com',
            'password' => Hash::make('superadmin'),
            'role_id' => 1,
        ],
        [
            'name' => 'Mathieu',
            'email' => 'mxavier@weplement.com',
            'password' => Hash::make('mathieuWP2024'),
            'role_id' => 2,
        ],
        [
            'name' => 'Hugo',
            'email' => 'hmonier@weplement.com',
            'password' => Hash::make('hugoWP2024'),
            'role_id' => 2,
        ],
    ]);
}
}
