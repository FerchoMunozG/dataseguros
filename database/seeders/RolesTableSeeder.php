<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'id'    => 1,
                'title' => 'Admin',
            ],
            [
                'id'    => 2,
                'title' => 'Agent',
            ],
            [
                'id'    => 3,
                'title' => 'Partner',
            ],
            [
                'id'    => 4,
                'title' => 'Promoter',
            ],
            [
                'id'    => 5,
                'title' => 'client',
            ],
            [
                'id'    => 6,
                'title' => 'Business',
            ],
        ];

        Role::insert($roles);
    }
}
