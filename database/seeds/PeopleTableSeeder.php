<?php

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
                'flat_id' => Flat::where('number', 6)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ],
            [
                'flat_id' => Flat::where('number', 6)->firstOrFail()->id,
                'ceiling_id' => null,
                'name' => '',
                'phone' => ''
            ]
        ];

        People::truncate();
        foreach ($people as $person) {
            People::create($person);
        }
    }
}
