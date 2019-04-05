<?php

use App\Entrance;
use App\Flat;
use Illuminate\Database\Seeder;

class FlatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $flats = [
            [
                'entrance_id' => Entrance::first()->id,
                'ceiling_id' => null,
                'number' => 1,
                'balance' => 0
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'ceiling_id' => null,
                'number' => 2,
                'balance' => 0
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'ceiling_id' => null,
                'number' => 3,
                'balance' => 0
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'ceiling_id' => null,
                'number' => 4,
                'balance' => 0
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'ceiling_id' => null,
                'number' => 5,
                'balance' => 0
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'ceiling_id' => null,
                'number' => 6,
                'balance' => 0
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'ceiling_id' => null,
                'number' => 7,
                'balance' => 0
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'ceiling_id' => null,
                'number' => 8,
                'balance' => 0
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'ceiling_id' => null,
                'number' => 9,
                'balance' => 0
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'ceiling_id' => null,
                'number' => 10,
                'balance' => 0
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'ceiling_id' => null,
                'number' => 11,
                'balance' => 0
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'ceiling_id' => null,
                'number' => 12,
                'balance' => 0
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'ceiling_id' => null,
                'number' => 13,
                'balance' => 0
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'ceiling_id' => null,
                'number' => 14,
                'balance' => 0
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'ceiling_id' => null,
                'number' => 15,
                'balance' => 0
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'ceiling_id' => null,
                'number' => 16,
                'balance' => 0
            ]
        ];

        Flat::truncate();
        foreach ($flats as $flat) {
            Flat::create($flat);
        }
    }
}
