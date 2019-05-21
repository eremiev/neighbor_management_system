<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $owners = [
            [
                'email' => 'admin@email.com',
                'name' => 'admin',
                'password' => bcrypt('admin'),
                'flat_id' => 1
            ]
        ];

        User::truncate();
        foreach ($owners as $owner) {
            $user = User::create($owner);
             $user->roles()->attach(Role::where('name', 'owner')->firstOrFail());
            $user->save();
        }
    }
}
