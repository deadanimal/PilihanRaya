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
}
