<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    public function run()
    {
        $admin_permissions = Permission::all();
        Role::findOrFail(1)->permissions()->sync($admin_permissions->pluck('id'));
        $user_permissions = $admin_permissions->filter(function ($permission) {
            return substr($permission->title, 0, 5) != 'user_';
        });
        Role::findOrFail(2)->permissions()->sync($user_permissions);

        Role::findOrFail(1)->permissions()->sync([1, 3]);
        Role::findOrFail(2)->permissions()->sync([2, 4]);
        Role::findOrFail(3)->permissions()->sync(5);
        Role::findOrFail(4)->permissions()->sync(6);
        Role::findOrFail(5)->permissions()->sync(7);
        Role::findOrFail(6)->permissions()->sync(8);
    }
}
