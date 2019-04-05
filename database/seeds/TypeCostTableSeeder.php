<?php

use App\Entrance;
use App\TypeCost;
use Illuminate\Database\Seeder;

class TypeCostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typeCosts = [
            [
                'entrance_id' => Entrance::first()->id,
                'type' => 'Вода',
                'period' => 'месец',
                'price' => 3.15
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'type' => 'Ток',
                'period' => 'месец',
                'price' => 2
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'type' => 'Стълбище',
                'period' => 'месец',
                'price' => 2
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'type' => 'Фонд ремонт',
                'period' => 'месец',
                'price' => 5
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'type' => 'Други',
                'period' => 'месец',
                'price' => 1
            ]
        ];

        TypeCost::truncate();
        foreach ($typeCosts as $typeCost) {
            TypeCost::create($typeCost);
        }
    }
}
