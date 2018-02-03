<?php

use App\Guide;
use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()['cache']->forget('spatie.permission.cache');

        // create permissions
        Permission::create(['name' => Guide::PERMISSION_VIEW]);
        Permission::create(['name' => Guide::PERMISSION_CREATE]);
        Permission::create(['name' => Guide::PERMISSION_EDIT]);
        Permission::create(['name' => Guide::PERMISSION_DELETE]);

        // create roles and assign existing permissions
        $roleAdmin = Role::create(['name' => User::ROLE_ADMIN]);
        $roleUser = Role::create(['name' => User::ROLE_USER]);

        $roleUser->givePermissionTo(Guide::PERMISSION_VIEW);
        $roleUser->givePermissionTo(Guide::PERMISSION_CREATE);
        $roleUser->givePermissionTo(Guide::PERMISSION_EDIT);
        $roleUser->givePermissionTo(Guide::PERMISSION_DELETE);

        //assigning Role to users
        $admin = User::where('name', 'zangles')->first();
        $admin->assignRole(User::ROLE_ADMIN);

    }
}
