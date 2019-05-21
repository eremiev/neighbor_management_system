<?php

namespace App\Http\Controllers;

use App\Flat;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flats = Flat::where('entrance_id',1)->with('people')->get();


        return view('contacts', compact('flats'));
    }
}
