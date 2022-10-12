<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TinjauanPilihan;

class TinjauanPilihanController extends Controller
{
    public function senarai_tinjauan_pilihan(Request $request) {
        $pilihans = TinjauanPilihan::all();
        return view('tinjauan.senarai_pilihan', compact('pilihans'));        
    }

    public function satu_tinjauan_pilihan(Request $request) {
        $id = (int)$request->route('id');
        $pilihan = TinjauanPilihan::find($id);

        if ($req->user()) {
            activity()
            ->performedOn($pilihan)
            ->causedBy($req->user())
            ->log('Read');     
        }
        
        return view('tinjauan.satu_pilihan', compact('pilihan'));        
    }

    public function borang_tinjauan_pilihan(Request $request) {
        return view('tinjauan.borang_pilihan');
    }

    public function cipta_tinjauan_pilihan(Request $request) {
        $pilihan = New TinjauanPilihan;
        $pilihan->save();
        return back();
    }  

}
