<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('password'),
                'remember_token' => null,
            ],
            [
                'id'             => 2,
                'name'           => 'Agent',
                'email'          => 'agent@agent.com',
                'password'       => bcrypt('password'),
                'remember_token' => null,
            ],
            [
                'id'             => 3,
                'name'           => 'Partner',
                'email'          => 'partner@partner.com',
                'password'       => bcrypt('password'),
                'remember_token' => null,
            ],
            [
                'id'             => 4,
                'name'           => 'Promoter',
                'email'          => 'promoter@promoter.com',
                'password'       => bcrypt('password'),
                'remember_token' => null,
            ],
            [
                'id'             => 5,
                'name'           => 'Client',
                'email'          => 'client@client.com',
                'password'       => bcrypt('password'),
                'remember_token' => null,
            ],
            [
                'id'             => 6,
                'name'           => 'Business',
                'email'          => 'business@business.com',
                'password'       => bcrypt('password'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
