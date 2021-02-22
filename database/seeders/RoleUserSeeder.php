<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::where('name', '');

        User::all()->each( function ($user) use ($role) {
            $user->roles()->attach($role->pluck('id'));
        });
    }
}
