<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AssignPermissionToRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::findByName('admin');
        $customerRole = Role::findByName('customer');

        $adminRole->givePermissionTo(['create', 'edit', 'delete', 'view']);
        $customerRole->givePermissionTo(['create','view']);
    }
}
