<?php

use App\Ceiling;
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
                'name' => 'Борисови',
                'number' => 1,
                'balance' => 0
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'name' => 'Узунови',
                'ceiling_id' => null,
                'number' => 2,
                'balance' => 0
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'name' => 'Георгиеви',
                'ceiling_id' => Ceiling::findOrFail(1)->id,
                'number' => 3,
                'balance' => 0
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'name' => 'Цаневи',
                'ceiling_id' => Ceiling::findOrFail(2)->id,
                'number' => 4,
                'balance' => 0
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'ceiling_id' => null,
                'name' => 'Попщереви',
                'number' => 5,
                'balance' => 0
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'name' => 'Иванова',
                'ceiling_id' => null,
                'number' => 6,
                'balance' => 0
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'name' => 'Маркови',
                'ceiling_id' => Ceiling::findOrFail(3)->id,
                'number' => 7,
                'balance' => 0
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'name' => 'Жажан',
                'ceiling_id' => Ceiling::findOrFail(4)->id,
                'number' => 8,
                'balance' => 0
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'name' => 'Николови',
                'ceiling_id' => null,
                'number' => 9,
                'balance' => 0
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'name' => 'Яневи',
                'ceiling_id' => null,
                'number' => 10,
                'balance' => 0
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'name' => 'Иванови',
                'ceiling_id' => Ceiling::findOrFail(5)->id,
                'number' => 11,
                'balance' => 0
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'name' => 'Дойнова',
                'ceiling_id' => Ceiling::findOrFail(6)->id,
                'number' => 12,
                'balance' => 0
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'name' => 'Калчеви',
                'ceiling_id' => Ceiling::findOrFail(7)->id,
                'number' => 13,
                'balance' => 0
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'name' => 'Петкови',
                'ceiling_id' => Ceiling::findOrFail(8)->id,
                'number' => 14,
                'balance' => 0
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'name' => 'Кръстеви',
                'ceiling_id' => Ceiling::findOrFail(9)->id,
                'number' => 15,
                'balance' => 0
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'name' => 'Райчеви',
                'ceiling_id' => Ceiling::findOrFail(10)->id,
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
