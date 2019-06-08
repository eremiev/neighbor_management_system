<?php

namespace App\Jobs;

use App\Flat;
use App\HistoryInvoice;
use App\Invoice;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ChargeFlats implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $flats = Flat::with(['permissions' => function ($q) {
            $q->with(['person', 'costs']);
        }])->get();

        foreach ($flats as &$flat) {
            $amount = 0;
            $members = [];
            $invoice = Invoice::create([
                'entrance_id' => 1,
                'flat_id' => $flat->id,
                'date' => Carbon::now(),
                'people' => 0,
                'paid' => false
            ]);

            foreach ($flat->permissions as $permission) {
                //TODO ако никой не живее трябва ли да се плаща фонд ремонт
                if ($permission->permission && ($permission->person['active'] || empty($permission->person))) {
                    $amount += (float)$permission->costs->price;
                    if (!in_array($permission->people_id, $members) && !empty($permission->person)) {
                        array_push($members, $permission->people_id);
                    }

                    HistoryInvoice::create([
                        'invoice_id' => $invoice->id,
                        'entrance_id' => 1,
                        'ceiling_id' => $permission->person['ceiling_id'],
                        'flat_id' => $flat->id,
                        'cost_type_id' => $permission->cost_type_id,
                        'date'  => Carbon::now(),
                        'amount' => (float)$permission->costs->price
                    ]);
                }
            }

            $invoice->update([
                'people' => count($members),

            ]);

            $flat['amount'] = $amount;
            //TODO check flat saldo
        }
    }
}
