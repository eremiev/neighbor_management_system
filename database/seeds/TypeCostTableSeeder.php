<?php

use App\Entrance;
use App\CostType;
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
                'type' => 'Стълбище-чистач',
                'period' => 'месец',
                'price' => 2
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'type' => 'Асансьор',
                'period' => 'месец',
                'price' => 2
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'type' => 'Фонд ремонт',
                'period' => 'апартамент',
                'price' => 5
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'type' => 'Други',
                'period' => 'месец',
                'price' => 1
            ]
        ];

        CostType::truncate();
        foreach ($typeCosts as $typeCost) {
            CostType::create($typeCost);
        }
    }
}
