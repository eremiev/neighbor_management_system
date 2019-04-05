<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $roles = [
            [
                'name' => 'owner',
                'description' => ''
            ],
            [
                'name' => 'cashier',
                'description' => ''
            ],
            [
                'name' => 'house manager',
                'description' => ''
            ]
        ];

        Role::truncate();
        foreach ($roles as $role) {
             Role::create($role);
        }

  }
}
