<?php

namespace App\Http\Controllers;

use App\Flat;
use App\HistoryInvoice;
use App\Invoice;
use App\CostType;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
//        $flats = Flat::with(['permissions' => function ($q) {
//            $q->with(['person', 'costs']);
//        }])->get();
//
//        foreach ($flats as &$flat) {
//            $amount = 0;
//            $members = [];
//            $invoice = Invoice::create([
//                'entrance_id' => 1,
//                'flat_id' => $flat->id,
//                'date' => Carbon::now(),
//                'people' => 0,
//                'paid' => false
//            ]);
//
//            foreach ($flat->permissions as $permission) {
//                //TODO ако никой не живее трябва ли да се плаща фонд ремонт
//                if ($permission->permission && ($permission->person['active'] || empty($permission->person))) {
//                    $amount += (float)$permission->costs->price;
//                    if (!in_array($permission->people_id, $members) && !empty($permission->person)) {
//                        array_push($members, $permission->people_id);
//                    }
//
//                    HistoryInvoice::create([
//                        'invoice_id' => $invoice->id,
//                        'entrance_id' => 1,
//                        'ceiling_id' => $permission->person['ceiling_id'],
//                        'flat_id' => $flat->id,
//                        'cost_type_id' => $permission->cost_type_id,
//                        'date'  => Carbon::now(),
//                        'amount' => (float)$permission->costs->price
//                    ]);
//                }
//            }
//
//            $invoice->update([
//                'people' => count($members),
//
//            ]);
//
//            $flat['amount'] = $amount;
//            //TODO check flat saldo
//        }
//        dd($flats->toArray());

        $reports = [];
        $dates = ['from' => '', 'to' => ''];

        $inputs = $request->only(['from', 'to']);

        if (array_key_exists('from', $inputs)) {
            $dateFrom = DateTime::createFromFormat('Y-m-d', substr($inputs['from'], 0, -2) . '01');
            $from = $dateFrom->format('Y-m-d');
            $dates['from'] = $from;
        }
        if (array_key_exists('to', $inputs)) {
//            $dateTo = DateTime::createFromFormat('Y-m-d', substr($inputs['to'], 0, -2) . '02');
            $dateTo = DateTime::createFromFormat('Y-m-d', $inputs['to']);
            $to = $dateTo->modify('last day of this month')->format('Y-m-d');
            $dates['to'] = $to;

        }
        if (array_key_exists('to', $inputs) && array_key_exists('from', $inputs)) {
            $costType = CostType::with([
                'history_invoices' => function ($q) use ($from, $to) {
                    $q->with('invoice')->whereBetween('date', [$from, $to]);
                }
            ])->get();

            foreach ($costType as $cost) {
                $reports[] = ['type' => $cost->type, 'flats' => $cost->history_invoices->groupBy('flat_id')->toArray()];
            }

            $rr = [];

            foreach ($reports as $type) {
                foreach ($type['flats'] as $flat) {
                    $rr[$type['type']][] = $flat;
                }
            }

            $reports = $this->flipDiagonally($rr);

//        dd($reports);

        }

        $reports = json_encode($reports);

        return view('reports', compact(['reports', 'dates']));
    }

    function flipDiagonally($arr)
    {
        $out = array();
        foreach ($arr as $key => $subarr) {
            foreach ($subarr as $subkey => $subvalue) {
                $out[$subkey][$key] = $subvalue;
            }
        }
        return $out;
    }


}
