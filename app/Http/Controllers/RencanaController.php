<?php

namespace App\Http\Controllers;

use App\Models\T_Rencana;
use Exception;
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

    public function edit($id)
    {
        $rencana = T_Rencana::find($id);
<<<<<<< HEAD
        return view('rencana.edit', compact(['rencana']));
=======
       return view('rencana.edit',compact(['rencana']));
    }

    public function update($id, Request $request)
    {
        $rencana = T_Rencana::find($id);
        $rencana->update($request->except(['_token','submit']));
        return redirect('rencana');
    }
    
    
    public function hapus($id)
    {
        $rencana = T_Rencana::find($id);
        $rencana->delete();
        return redirect('rencana');
    }
    
    public function restore($id)
    {
        $rencana = T_Rencana::onlyTrashed()->get();
        return view('rencana.recycle', Except(['_status']));
>>>>>>> 6a5d1a4 (menambahkan soft-delete)
    }
}
