<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->Insert([
            'name' => 'Admin'
        ]);

        DB::table('roles')->Insert([
            'name' => 'Coordinator,'
        ]);

        DB::table('roles')->Insert([
            'name' => 'Supervisor,'
        ]);

        DB::table('roles')->Insert([
            'name' => 'Student'
        ]);
    }
}
