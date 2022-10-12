<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calon;

class CalonController extends Controller
{
    public function senarai_calon(Request $request) {
        $calons = Calon::all();
        return view('calon.senarai', compact('calons'));        
    }

    public function satu_calon(Request $request) {
        $id = (int)$request->route('id');
        $calon = Calon::find($id);

        if ($req->user()) {
            activity()
            ->performedOn($calon)
            ->causedBy($req->user())
            ->log('Read');     
        }
        
        return view('calon.satu', compact('calon'));        
    }

    public function borang_calon(Request $request) {
        return view('calon.borang');
    }

    public function cipta_calon(Request $request) {
        $calon = New Calon;
        $calon->save();
        return back();
    }        
}
