<?php

namespace App\Http\Controllers;

use App\Models\T_Rencana;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

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
        $rencana = T_Rencana::find($id)->delete();
        return redirect('rencana');
    }

    // menampilkan data yang hanya dihapus
    public function recycle()
    {
        $rencana = T_Rencana::onlyTrashed()->get();
        return view('rencana.recycle', compact(['rencana']));
    }
    
    // restore data
    public function restore($id)
    {
        T_Rencana::withTrashed()->find($id)->restore();
        return redirect('rencana');
    }

    public function validasi($id)
    {
        $rencana = DB::table('t_rencana')
        ->select('status')
        ->where('id','=',$id)
        ->first();

        if($rencana->status == '1')
        {
            $status = '2';
        }
        elseif($rencana->status == '0')
        {
            $status = '2';
        }
        else
        {
            $status = '0';
        }

        $value = array('status'=> $status);
        DB::table('t_rencana')->where('id',$id)->update($value);
        return redirect('rencana');
    }

}
