<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'title' => 'Admin'
            ],
            [
                'title' => 'User'
            ],
        ];

        foreach ($roles as $role)
        {
            Role::create($role);
        }
    }
}
