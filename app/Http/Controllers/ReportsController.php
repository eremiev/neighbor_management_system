<?php

namespace App\Http\Controllers;

use App\HistoryInvoice;
use App\Invoice;
use App\CostType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $from = date('2018-01-01');
        $to = date('2018-01-01');

        $invoices = HistoryInvoice::select(['flat_id', 'cost_type_id', 'amount'])
            ->whereBetween('date', [$from, $to])
            ->groupBy(['flat_id','cost_type_id', 'amount'])
            ->get();

        $costType = CostType::with([
            'history_invoices' => function ($q) use ($from, $to) {
                $q->whereBetween('date', [$from, $to]);
            }
        ])->get();

        $report = [];
        foreach ($costType as &$cost) {
            $report[] = [ 'type' => $cost->type, 'flats' => $cost->history_invoices->groupBy('flat_id')->toArray()];
        }

        dd($invoices->toArray());
        $invoices = $report;
        $report = json_encode($report);

        return view('reports', compact(['report', 'invoices']));
    }

}
