<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parti;

class PartiController extends Controller
{
    public function senarai_parti(Request $request) {
        $partis = Parti::all();
        return view('parti.senarai', compact('partis'));        
    }

    public function satu_parti(Request $request) {
        $id = (int)$request->route('id');
        $parti = Parti::find($id);

        if ($req->user()) {
            activity()
            ->performedOn($parti)
            ->causedBy($req->user())
            ->log('Read');     
        }
        
        return view('parti.satu', compact('parti'));        
    }

    public function borang_parti(Request $request) {
        return view('parti.borang');
    }

    public function cipta_parti(Request $request) {
        $parti = New Parti;
        $parti->save();
        return back();
    }          
}
