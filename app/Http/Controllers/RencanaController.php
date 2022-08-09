<?php

namespace App\Http\Controllers;

use App\Models\T_Rencana;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class RencanaController extends Controller
{
    // menampilkan data
    public function index() 
    {
        $rencana = T_Rencana::all();
        return view('rencana.index', compact(['rencana']));
    }

    // menampilkan input
    public function create()
    {
        return view('rencana.create');
    }

    // menginput data
    public function store(Request $request)
    {
        // dd($request->except(['_token','submit']));
        T_Rencana::create($request->except(['_token','submit']));
        return redirect('/rencana');
    }

    // menampilkan data edit
    public function edit($id)
    {
        $rencana = T_Rencana::find($id);
        return view('rencana.edit',compact(['rencana']));
    }

    // proses update
    public function update($id, Request $request)
    {
        $rencana = T_Rencana::find($id);
        $rencana->update($request->except(['_token','submit']));
        return redirect('rencana');
    }
    
    // menghapus soft menggunakan colom delete_at di database dan model
    public function hapus($id)
    {
        $rencana = T_Rencana::find($id);
        $rencana->delete();
        return redirect('rencana');
    }

    // restore data
    public function restore($id)
    {
        T_Rencana::withTrashed()->find($id)->restore();
        return redirect('rencana');
    }

    // mengmbalikan data softdelete
    // public function recycle()
    // {
    //     $rencana = T_Rencana::onlyTrashed()->get();
    //     return view('rencana.recycle',['rencana' => $rencana]);
    // }

    // public function kembalikan($id)
    // {
    //     $rencana = T_Rencana::onlyTrashed()->where('id',$id);
    //     $rencana->restore();
    //     return redirect('rencana.recycle');
    // }

    public function recycle()
    {
        $rencana = T_Rencana::onlyTrashed()->get();
        return view('rencana.recycle', compact(['rencana']));
    }
}
