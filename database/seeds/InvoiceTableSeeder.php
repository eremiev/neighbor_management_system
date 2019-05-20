<?php

use App\Flat;
use App\Invoice;
use App\Entrance;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class InvoiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $invoices = [
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 1)->firstOrFail()->id,
                'date' => Carbon::create(2018, 1, 1),
                'people' => 2,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 1)->firstOrFail()->id,
                'date' => Carbon::create(2018, 2, 1),
                'people' => 2,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 1)->firstOrFail()->id,
                'date' => Carbon::create(2018, 3, 1),
                'people' => 2,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 1)->firstOrFail()->id,
                'date' => Carbon::create(2018, 4, 1),
                'people' => 2,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 1)->firstOrFail()->id,
                'date' => Carbon::create(2018, 5, 1),
                'people' => 2,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 1)->firstOrFail()->id,
                'date' => Carbon::create(2018, 6, 1),
                'people' => 2,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 1)->firstOrFail()->id,
                'date' => Carbon::create(2018, 7, 1),
                'people' => 2,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 1)->firstOrFail()->id,
                'date' => Carbon::create(2018, 8, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 1)->firstOrFail()->id,
                'date' => Carbon::create(2018, 9, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 1)->firstOrFail()->id,
                'date' => Carbon::create(2018, 10, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 1)->firstOrFail()->id,
                'date' => Carbon::create(2018, 11, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 1)->firstOrFail()->id,
                'date' => Carbon::create(2018, 12, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 2)->firstOrFail()->id,
                'date' => Carbon::create(2018, 1, 1),
                'people' => 4,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 2)->firstOrFail()->id,
                'date' => Carbon::create(2018, 2, 1),
                'people' => 4,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 2)->firstOrFail()->id,
                'date' => Carbon::create(2018, 3, 1),
                'people' => 4,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 2)->firstOrFail()->id,
                'date' => Carbon::create(2018, 4, 1),
                'people' => 4,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 2)->firstOrFail()->id,
                'date' => Carbon::create(2018, 5, 1),
                'people' => 4,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 2)->firstOrFail()->id,
                'date' => Carbon::create(2018, 6, 1),
                'people' => 4,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 2)->firstOrFail()->id,
                'date' => Carbon::create(2018, 7, 1),
                'people' => 4,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 2)->firstOrFail()->id,
                'date' => Carbon::create(2018, 8, 1),
                'people' => 4,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 2)->firstOrFail()->id,
                'date' => Carbon::create(2018, 9, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 2)->firstOrFail()->id,
                'date' => Carbon::create(2018, 10, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 2)->firstOrFail()->id,
                'date' => Carbon::create(2018, 11, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 2)->firstOrFail()->id,
                'date' => Carbon::create(2018, 12, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 3)->firstOrFail()->id,
                'date' => Carbon::create(2018, 1, 1),
                'people' => 2,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 3)->firstOrFail()->id,
                'date' => Carbon::create(2018, 2, 1),
                'people' => 2,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 3)->firstOrFail()->id,
                'date' => Carbon::create(2018, 3, 1),
                'people' => 2,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 3)->firstOrFail()->id,
                'date' => Carbon::create(2018, 4, 1),
                'people' => 2,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 3)->firstOrFail()->id,
                'date' => Carbon::create(2018, 5, 1),
                'people' => 2,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 3)->firstOrFail()->id,
                'date' => Carbon::create(2018, 6, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 3)->firstOrFail()->id,
                'date' => Carbon::create(2018, 7, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 3)->firstOrFail()->id,
                'date' => Carbon::create(2018, 8, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 3)->firstOrFail()->id,
                'date' => Carbon::create(2018, 9, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 3)->firstOrFail()->id,
                'date' => Carbon::create(2018, 10, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 3)->firstOrFail()->id,
                'date' => Carbon::create(2018, 11, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 3)->firstOrFail()->id,
                'date' => Carbon::create(2018, 12, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 4)->firstOrFail()->id,
                'date' => Carbon::create(2018, 1, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 4)->firstOrFail()->id,
                'date' => Carbon::create(2018, 2, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 4)->firstOrFail()->id,
                'date' => Carbon::create(2018, 3, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 4)->firstOrFail()->id,
                'date' => Carbon::create(2018, 4, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 4)->firstOrFail()->id,
                'date' => Carbon::create(2018, 5, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 4)->firstOrFail()->id,
                'date' => Carbon::create(2018, 6, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 4)->firstOrFail()->id,
                'date' => Carbon::create(2018, 7, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 4)->firstOrFail()->id,
                'date' => Carbon::create(2018, 8, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 4)->firstOrFail()->id,
                'date' => Carbon::create(2018, 9, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 4)->firstOrFail()->id,
                'date' => Carbon::create(2018, 10, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 4)->firstOrFail()->id,
                'date' => Carbon::create(2018, 11, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 4)->firstOrFail()->id,
                'date' => Carbon::create(2018, 12, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 5)->firstOrFail()->id,
                'date' => Carbon::create(2018, 1, 1),
                'people' => 4,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 5)->firstOrFail()->id,
                'date' => Carbon::create(2018, 2, 1),
                'people' => 4,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 5)->firstOrFail()->id,
                'date' => Carbon::create(2018, 3, 1),
                'people' => 4,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 5)->firstOrFail()->id,
                'date' => Carbon::create(2018, 4, 1),
                'people' => 4,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 5)->firstOrFail()->id,
                'date' => Carbon::create(2018, 5, 1),
                'people' => 4,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 5)->firstOrFail()->id,
                'date' => Carbon::create(2018, 6, 1),
                'people' => 4,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 5)->firstOrFail()->id,
                'date' => Carbon::create(2018, 7, 1),
                'people' => 4,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 5)->firstOrFail()->id,
                'date' => Carbon::create(2018, 8, 1),
                'people' => 4,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 5)->firstOrFail()->id,
                'date' => Carbon::create(2018, 9, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 5)->firstOrFail()->id,
                'date' => Carbon::create(2018, 10, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 5)->firstOrFail()->id,
                'date' => Carbon::create(2018, 11, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 5)->firstOrFail()->id,
                'date' => Carbon::create(2018, 12, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 6)->firstOrFail()->id,
                'date' => Carbon::create(2018, 1, 1),
                'people' => 1,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 6)->firstOrFail()->id,
                'date' => Carbon::create(2018, 2, 1),
                'people' => 1,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 6)->firstOrFail()->id,
                'date' => Carbon::create(2018, 3, 1),
                'people' => 1,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 6)->firstOrFail()->id,
                'date' => Carbon::create(2018, 4, 1),
                'people' => 1,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 6)->firstOrFail()->id,
                'date' => Carbon::create(2018, 5, 1),
                'people' => 1,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 6)->firstOrFail()->id,
                'date' => Carbon::create(2018, 6, 1),
                'people' => 1,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 6)->firstOrFail()->id,
                'date' => Carbon::create(2018, 7, 1),
                'people' => 1,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 6)->firstOrFail()->id,
                'date' => Carbon::create(2018, 8, 1),
                'people' => 1,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 6)->firstOrFail()->id,
                'date' => Carbon::create(2018, 9, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 6)->firstOrFail()->id,
                'date' => Carbon::create(2018, 10, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 6)->firstOrFail()->id,
                'date' => Carbon::create(2018, 11, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 6)->firstOrFail()->id,
                'date' => Carbon::create(2018, 12, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 7)->firstOrFail()->id,
                'date' => Carbon::create(2018, 1, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 7)->firstOrFail()->id,
                'date' => Carbon::create(2018, 2, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 7)->firstOrFail()->id,
                'date' => Carbon::create(2018, 3, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 7)->firstOrFail()->id,
                'date' => Carbon::create(2018, 4, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 7)->firstOrFail()->id,
                'date' => Carbon::create(2018, 5, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 7)->firstOrFail()->id,
                'date' => Carbon::create(2018, 6, 1),
                'people' => 2,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 7)->firstOrFail()->id,
                'date' => Carbon::create(2018, 7, 1),
                'people' => 2,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 7)->firstOrFail()->id,
                'date' => Carbon::create(2018, 8, 1),
                'people' => 2,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 7)->firstOrFail()->id,
                'date' => Carbon::create(2018, 9, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 7)->firstOrFail()->id,
                'date' => Carbon::create(2018, 10, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 7)->firstOrFail()->id,
                'date' => Carbon::create(2018, 11, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 7)->firstOrFail()->id,
                'date' => Carbon::create(2018, 12, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 8)->firstOrFail()->id,
                'date' => Carbon::create(2018, 1, 1),
                'people' => 5,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 8)->firstOrFail()->id,
                'date' => Carbon::create(2018, 2, 1),
                'people' => 5,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 8)->firstOrFail()->id,
                'date' => Carbon::create(2018, 3, 1),
                'people' => 5,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 8)->firstOrFail()->id,
                'date' => Carbon::create(2018, 4, 1),
                'people' => 5,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 8)->firstOrFail()->id,
                'date' => Carbon::create(2018, 5, 1),
                'people' => 5,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 8)->firstOrFail()->id,
                'date' => Carbon::create(2018, 6, 1),
                'people' => 4,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 8)->firstOrFail()->id,
                'date' => Carbon::create(2018, 7, 1),
                'people' => 4,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 8)->firstOrFail()->id,
                'date' => Carbon::create(2018, 8, 1),
                'people' => 4,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 8)->firstOrFail()->id,
                'date' => Carbon::create(2018, 9, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 8)->firstOrFail()->id,
                'date' => Carbon::create(2018, 10, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 8)->firstOrFail()->id,
                'date' => Carbon::create(2018, 11, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 8)->firstOrFail()->id,
                'date' => Carbon::create(2018, 12, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 9)->firstOrFail()->id,
                'date' => Carbon::create(2018, 1, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 9)->firstOrFail()->id,
                'date' => Carbon::create(2018, 2, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 9)->firstOrFail()->id,
                'date' => Carbon::create(2018, 3, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 9)->firstOrFail()->id,
                'date' => Carbon::create(2018, 4, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 9)->firstOrFail()->id,
                'date' => Carbon::create(2018, 5, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 9)->firstOrFail()->id,
                'date' => Carbon::create(2018, 6, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 9)->firstOrFail()->id,
                'date' => Carbon::create(2018, 7, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 9)->firstOrFail()->id,
                'date' => Carbon::create(2018, 8, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 9)->firstOrFail()->id,
                'date' => Carbon::create(2018, 9, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 9)->firstOrFail()->id,
                'date' => Carbon::create(2018, 10, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 9)->firstOrFail()->id,
                'date' => Carbon::create(2018, 11, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 9)->firstOrFail()->id,
                'date' => Carbon::create(2018, 12, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 10)->firstOrFail()->id,
                'date' => Carbon::create(2018, 1, 1),
                'people' => 2,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 10)->firstOrFail()->id,
                'date' => Carbon::create(2018, 2, 1),
                'people' => 2,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 10)->firstOrFail()->id,
                'date' => Carbon::create(2018, 3, 1),
                'people' => 2,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 10)->firstOrFail()->id,
                'date' => Carbon::create(2018, 4, 1),
                'people' => 2,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 10)->firstOrFail()->id,
                'date' => Carbon::create(2018, 5, 1),
                'people' => 2,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 10)->firstOrFail()->id,
                'date' => Carbon::create(2018, 6, 1),
                'people' => 2,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 10)->firstOrFail()->id,
                'date' => Carbon::create(2018, 7, 1),
                'people' => 2,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 10)->firstOrFail()->id,
                'date' => Carbon::create(2018, 8, 1),
                'people' => 2,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 10)->firstOrFail()->id,
                'date' => Carbon::create(2018, 9, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 10)->firstOrFail()->id,
                'date' => Carbon::create(2018, 10, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 10)->firstOrFail()->id,
                'date' => Carbon::create(2018, 11, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 10)->firstOrFail()->id,
                'date' => Carbon::create(2018, 12, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 11)->firstOrFail()->id,
                'date' => Carbon::create(2018, 1, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 11)->firstOrFail()->id,
                'date' => Carbon::create(2018, 2, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 11)->firstOrFail()->id,
                'date' => Carbon::create(2018, 3, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 11)->firstOrFail()->id,
                'date' => Carbon::create(2018, 4, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 11)->firstOrFail()->id,
                'date' => Carbon::create(2018, 5, 1),
                'people' => 2,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 11)->firstOrFail()->id,
                'date' => Carbon::create(2018, 6, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 11)->firstOrFail()->id,
                'date' => Carbon::create(2018, 7, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 11)->firstOrFail()->id,
                'date' => Carbon::create(2018, 8, 1),
                'people' => 4,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 11)->firstOrFail()->id,
                'date' => Carbon::create(2018, 9, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 11)->firstOrFail()->id,
                'date' => Carbon::create(2018, 10, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 11)->firstOrFail()->id,
                'date' => Carbon::create(2018, 11, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 11)->firstOrFail()->id,
                'date' => Carbon::create(2018, 12, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 12)->firstOrFail()->id,
                'date' => Carbon::create(2018, 1, 1),
                'people' => 1,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 12)->firstOrFail()->id,
                'date' => Carbon::create(2018, 2, 1),
                'people' => 1,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 12)->firstOrFail()->id,
                'date' => Carbon::create(2018, 3, 1),
                'people' => 1,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 12)->firstOrFail()->id,
                'date' => Carbon::create(2018, 4, 1),
                'people' => 1,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 12)->firstOrFail()->id,
                'date' => Carbon::create(2018, 5, 1),
                'people' => 1,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 12)->firstOrFail()->id,
                'date' => Carbon::create(2018, 6, 1),
                'people' => 1,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 12)->firstOrFail()->id,
                'date' => Carbon::create(2018, 7, 1),
                'people' => 1,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 12)->firstOrFail()->id,
                'date' => Carbon::create(2018, 8, 1),
                'people' => 1,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 12)->firstOrFail()->id,
                'date' => Carbon::create(2018, 9, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 12)->firstOrFail()->id,
                'date' => Carbon::create(2018, 10, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 12)->firstOrFail()->id,
                'date' => Carbon::create(2018, 11, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 12)->firstOrFail()->id,
                'date' => Carbon::create(2018, 12, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 13)->firstOrFail()->id,
                'date' => Carbon::create(2018, 1, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 13)->firstOrFail()->id,
                'date' => Carbon::create(2018, 2, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 13)->firstOrFail()->id,
                'date' => Carbon::create(2018, 3, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 13)->firstOrFail()->id,
                'date' => Carbon::create(2018, 4, 1),
                'people' => 4,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 13)->firstOrFail()->id,
                'date' => Carbon::create(2018, 5, 1),
                'people' => 4,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 13)->firstOrFail()->id,
                'date' => Carbon::create(2018, 6, 1),
                'people' => 4,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 13)->firstOrFail()->id,
                'date' => Carbon::create(2018, 7, 1),
                'people' => 4,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 13)->firstOrFail()->id,
                'date' => Carbon::create(2018, 8, 1),
                'people' => 4,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 13)->firstOrFail()->id,
                'date' => Carbon::create(2018, 9, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 13)->firstOrFail()->id,
                'date' => Carbon::create(2018, 10, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 13)->firstOrFail()->id,
                'date' => Carbon::create(2018, 11, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 13)->firstOrFail()->id,
                'date' => Carbon::create(2018, 12, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 14)->firstOrFail()->id,
                'date' => Carbon::create(2018, 1, 1),
                'people' => 2,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 14)->firstOrFail()->id,
                'date' => Carbon::create(2018, 2, 1),
                'people' => 2,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 14)->firstOrFail()->id,
                'date' => Carbon::create(2018, 3, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 14)->firstOrFail()->id,
                'date' => Carbon::create(2018, 4, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 14)->firstOrFail()->id,
                'date' => Carbon::create(2018, 5, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 14)->firstOrFail()->id,
                'date' => Carbon::create(2018, 6, 1),
                'people' => 2,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 14)->firstOrFail()->id,
                'date' => Carbon::create(2018, 7, 1),
                'people' => 2,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 14)->firstOrFail()->id,
                'date' => Carbon::create(2018, 8, 1),
                'people' => 2,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 14)->firstOrFail()->id,
                'date' => Carbon::create(2018, 9, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 14)->firstOrFail()->id,
                'date' => Carbon::create(2018, 10, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 14)->firstOrFail()->id,
                'date' => Carbon::create(2018, 11, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 14)->firstOrFail()->id,
                'date' => Carbon::create(2018, 12, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 15)->firstOrFail()->id,
                'date' => Carbon::create(2018, 1, 1),
                'people'=> 4,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 15)->firstOrFail()->id,
                'date' => Carbon::create(2018, 2, 1),
                'people'=> 4,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 15)->firstOrFail()->id,
                'date' => Carbon::create(2018, 3, 1),
                'people'=> 4,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 15)->firstOrFail()->id,
                'date' => Carbon::create(2018, 4, 1),
                'people'=> 4,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 15)->firstOrFail()->id,
                'date' => Carbon::create(2018, 5, 1),
                'people'=> 4,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 15)->firstOrFail()->id,
                'date' => Carbon::create(2018, 6, 1),
                'people'=> 4,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 15)->firstOrFail()->id,
                'date' => Carbon::create(2018, 7, 1),
                'people'=> 4,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 15)->firstOrFail()->id,
                'date' => Carbon::create(2018, 8, 1),
                'people'=> 4,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 15)->firstOrFail()->id,
                'date' => Carbon::create(2018, 9, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 15)->firstOrFail()->id,
                'date' => Carbon::create(2018, 10, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 15)->firstOrFail()->id,
                'date' => Carbon::create(2018, 11, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 15)->firstOrFail()->id,
                'date' => Carbon::create(2018, 12, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 16)->firstOrFail()->id,
                'date' => Carbon::create(2018, 1, 1),
                'people' => 2,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 16)->firstOrFail()->id,
                'date' => Carbon::create(2018, 2, 1),
                'people' => 2,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 16)->firstOrFail()->id,
                'date' => Carbon::create(2018, 3, 1),
                'people' => 2,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 16)->firstOrFail()->id,
                'date' => Carbon::create(2018, 4, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 16)->firstOrFail()->id,
                'date' => Carbon::create(2018, 5, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 16)->firstOrFail()->id,
                'date' => Carbon::create(2018, 6, 1),
                'people' => 3,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 16)->firstOrFail()->id,
                'date' => Carbon::create(2018, 7, 1),
                'people' => 2,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 16)->firstOrFail()->id,
                'date' => Carbon::create(2018, 8, 1),
                'people' => 2,
                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 16)->firstOrFail()->id,
                'date' => Carbon::create(2018, 9, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 16)->firstOrFail()->id,
                'date' => Carbon::create(2018, 10, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 16)->firstOrFail()->id,
                'date' => Carbon::create(2018, 11, 1),

                'paid' => true
            ],
            [
                'entrance_id' => Entrance::first()->id,
                'flat_id' => Flat::where('number', 16)->firstOrFail()->id,
                'date' => Carbon::create(2018, 12, 1),

                'paid' => true
            ]
        ];

        Invoice::truncate();
        foreach ($invoices as $invoice) {
            Invoice::create($invoice);
        }
    }
}
