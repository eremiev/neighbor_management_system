<?php

namespace App\Http\Controllers;

use App\HistoryInvoice;
use App\Invoice;
use App\CostType;
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
        $reports = [];
        $dates = ['from' => '', 'to' => ''];

        $inputs = $request->only(['from','to']);

        if (array_key_exists('from', $inputs)) {
            $dateFrom = DateTime::createFromFormat('Y-m-d', substr($inputs['from'], 0, -2) . '01');
            $from = $dateFrom->format('Y-m-d');
            $dates['from'] = $from;
        }
        if (array_key_exists('to', $inputs)) {
            $dateTo = DateTime::createFromFormat('Y-m-d', substr($inputs['to'], 0, -2) . '01');
            $to = $dateTo->format('Y-m-d');
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
