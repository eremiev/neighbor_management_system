<?php

use App\Ceiling;
use Illuminate\Database\Seeder;

class CeilingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ceilings = [
            [
                // 1
            ],
            [
                // 2
            ],
            [
                // 3
            ],
            [
                // 4
            ],
            [
                // 5
            ],
            [
                // 6
            ],
            [
                // 7
            ],
            [
                // 8
            ],
            [
                // 9
            ],
            [
                // 10
            ]
        ];

        Ceiling::truncate();
        foreach ($ceilings as $ceiling) {
            Ceiling::create($ceiling);
        }
    }
}
