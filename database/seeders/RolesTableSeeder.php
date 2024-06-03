<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['superadmin', 'admin', 'vendeur', 'user'];

        foreach ($roles as $role) {
            DB::table('users_role')->insert([
                'role_name' => $role,
            ]);
        }
    }
}
