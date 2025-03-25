<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->createDefaultPermissions();

        $admin = new Role();
        $admin->name = 'super admin';
        $admin->guard_name = 'admin';
        $admin->save();

        $reviewer = new Role();
        $reviewer->name = 'reviewer';
        $reviewer->guard_name = 'admin';
        $reviewer->save();
        $reviewer->givePermissionTo('review products');

    }

    function createDefaultPermissions() : void
    {
        Permission::insert([
            [
                'name' => 'review products',
                'guard_name' => 'admin',
                'group_name' => 'Review Products'
            ],
            [
                'name' => 'manage categories',
                'guard_name' => 'admin',
                'group_name' => 'Category Module'
            ],
        ]);
    }
}
