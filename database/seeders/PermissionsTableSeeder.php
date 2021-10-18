<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_access',
            ],
            [
                'id'    => 2,
                'title' => 'task_access',
            ],
            [
                'id'    => 3,
                'title' => 'admin_access',
            ],
            [
                'id'    => 4,
                'title' => 'agent_access',
            ],
            [
                'id'    => 5,
                'title' => 'partner_access',
            ],
            [
                'id'    => 6,
                'title' => 'promoter_access',
            ],
            [
                'id'    => 7,
                'title' => 'client_access',
            ],
            [
                'id'    => 8,
                'title' => 'business_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
