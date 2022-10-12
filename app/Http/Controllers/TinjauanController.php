<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tinjauan;

class TinjauanController extends Controller
{
    public function senarai_tinjauan(Request $request) {
        $tinjauans = Tinjauan::all();
        return view('tinjauan.senarai', compact('tinjauans'));        
    }

    public function satu_tinjauan(Request $request) {
        $id = (int)$request->route('id');
        $tinjauan = Tinjauan::find($id);

        if ($req->user()) {
            activity()
            ->performedOn($tinjauan)
            ->causedBy($req->user())
            ->log('Read');     
        }
        
        return view('tinjauan.satu', compact('tinjauan'));        
    }

    public function borang_tinjauan(Request $request) {
        return view('tinjauan.borang');
    }

    public function cipta_tinjauan(Request $request) {
        $tinjauan = New Tinjauan;
        $tinjauan->save();
        return back();
    }  

    public function rawak_tinjauan(Request $request) {
        $tinjauans = Tinjauan::all();
        return view('tinjauan.senarai', compact('tinjauans'));        
    }   
    
    public function undi_ya(Request $request) {
        $id = (int)$request->route('id');
        
        $undi = New TinjauanUndi;
        $undi->ya = true;
        $undi->tinjauan_id = $id;
        $undi->user_id = $request->user()->id;
        $undi->save();

        return back();
    }

    public function undi_tidak(Request $request) {
        $id = (int)$request->route('id');
        
        $undi = New TinjauanUndi;
        $undi->ya = false;
        $undi->tinjauan_id = $id;
        $undi->user_id = $request->user()->id;
        $undi->save();

        return back();
    }

    public function tidak_undi(Request $request) {
        $id = (int)$request->route('id');
        
        $undi = New TinjauanUndi;
        $undi->ya = null;
        $undi->tinjauan_id = $id;
        $undi->user_id = $request->user()->id;
        $undi->save();

        return back();
    }    
}
