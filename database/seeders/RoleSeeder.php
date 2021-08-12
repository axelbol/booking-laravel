<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();

        $roles = [
            'Admin',
            'User'
        ];

        foreach ($roles as $role) {
            Role::create([
                'name' => $role
            ]);
        }
    }
}
