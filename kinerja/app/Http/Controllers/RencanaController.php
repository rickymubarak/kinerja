<?php

namespace App\Http\Controllers;

use App\Models\T_Rencana;
use Illuminate\Http\Request;

class RencanaController extends Controller
{
    public function index() 
    {
        $rencana = T_Rencana::all();
        return view('rencana.index', compact(['rencana']));
    }

    public function create()
    {
        return view('rencana.create');
    }

    public function store(Request $request)
    {
        // dd($request->except(['_token','submit']));
        T_Rencana::create($request->except(['_token','submit']));
        return redirect('/rencana');
    }
}
