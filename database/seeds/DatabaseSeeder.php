<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Disable mass assignment and foreign key protection.
        Model::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(EntranceTableSeeder::class);
        $this->call(CeilingTableSeeder::class);
        $this->call(FlatTableSeeder::class);
        $this->call(PeopleTableSeeder::class);
        $this->call(TypeCostTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(InvoiceTableSeeder::class);
        $this->call(InvoiceHistoryTableSeeder::class);

        // Enable mass assignment and foreign key protection.
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        Model::reguard();
    }
}
