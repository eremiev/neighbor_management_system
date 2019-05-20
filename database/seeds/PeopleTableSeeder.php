<?php

use App\Ceiling;
use App\Flat;
use App\People;
use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $people = [
            [
                'flat_id' => Flat::where('number', 1)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 1)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 2)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 2)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 2)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 3)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 3)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 4)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 4)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 5)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 5)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 5)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 5)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 6)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 7)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 7)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 8)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 8)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 8)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 8)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 9)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 9)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 9)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 10)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 10)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 11)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 11)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 12)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 13)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 13)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 13)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 14)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 14)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 15)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 15)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 15)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 15)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 16)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 16)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 3)->firstOrFail()->id,
                'ceiling_id' => Ceiling::findOrFail(1)->id,
                'name' => 'Таван',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 4)->firstOrFail()->id,
                'ceiling_id' => Ceiling::findOrFail(2)->id,
                'name' => 'Таван',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 7)->firstOrFail()->id,
                'ceiling_id' => Ceiling::findOrFail(3)->id,
                'name' => 'Таван',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 8)->firstOrFail()->id,
                'ceiling_id' => Ceiling::findOrFail(4)->id,
                'name' => 'Таван',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 11)->firstOrFail()->id,
                'ceiling_id' => Ceiling::findOrFail(5)->id,
                'name' => 'Таван',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 12)->firstOrFail()->id,
                'ceiling_id' => Ceiling::findOrFail(6)->id,
                'name' => 'Таван',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 13)->firstOrFail()->id,
                'ceiling_id' => Ceiling::findOrFail(7)->id,
                'name' => 'Таван',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 14)->firstOrFail()->id,
                'ceiling_id' => Ceiling::findOrFail(8)->id,
                'name' => 'Таван',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 15)->firstOrFail()->id,
                'ceiling_id' => Ceiling::findOrFail(9)->id,
                'name' => 'Таван',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 16)->firstOrFail()->id,
                'ceiling_id' => Ceiling::findOrFail(10)->id,
                'name' => 'Таван',
                'phone' => ''
            ]
        ];

        People::truncate();
        foreach ($people as $person) {
            People::create($person);
        }
    }
}
