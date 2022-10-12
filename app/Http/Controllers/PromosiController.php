<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promosi;

class PromosiController extends Controller
{
    public function senarai_promosi(Request $request) {
        $promosis = Promosi::all();
        return view('promosi.senarai', compact('promosis'));        
    }

    public function satu_promosi(Request $request) {
        $id = (int)$request->route('id');
        $promosi = Promosi::find($id);

        if ($req->user()) {
            activity()
            ->performedOn($promosi)
            ->causedBy($req->user())
            ->log('Read');     
        }
        
        return view('promosi.satu', compact('promosi'));        
    }

    public function borang_promosi(Request $request) {
        return view('promosi.borang');
    }

    public function cipta_promosi(Request $request) {
        $promosi = New Promosi;
        $promosi->save();
        return back();
    }       
}
