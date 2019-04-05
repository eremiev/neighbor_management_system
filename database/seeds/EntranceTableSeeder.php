<?php

use App\Entrance;
use Illuminate\Database\Seeder;

class EntranceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $entrances = [
            [
                'address' => 'ул. Студентска №3 вх.Е',
                'balance' => 0
            ]
        ];

        Entrance::truncate();
        foreach ($entrances as $entrance) {
            Entrance::create($entrance);
        }
    }
}
