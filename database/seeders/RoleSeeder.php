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
        Role::insert(
            [
                ['id' => 1, 'name' => 'super_admin', 'guard_name' => 'web'],
                ['id' => 2, 'name' => 'system_admin', 'guard_name' => 'web'],
                ['id' => 3, 'name' => 'manager', 'guard_name' => 'web'],
                ['id' => 4, 'name' => 'operations_manager', 'guard_name' => 'web'],
    
            ]
        );
    }
}
