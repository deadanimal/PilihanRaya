<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kawasan;

class KawasanController extends Controller
{
    public function senarai_kawasan(Request $request) {
        $kawasans = Kawasan::all();
        return view('kawasan.senarai', compact('kawasans'));        
    }

    public function satu_kawasan(Request $request) {
        $id = (int)$request->route('id');
        $kawasan = Kawasan::find($id);

        if ($req->user()) {
            activity()
            ->performedOn($kawasan)
            ->causedBy($req->user())
            ->log('Read');     
        }
        
        return view('kawasan.satu', compact('kawasan'));        
    }

    public function borang_kawasan(Request $request) {
        return view('kawasan.borang');
    }

    public function cipta_kawasan(Request $request) {
        $kawasan = New Kawasan;
        $kawasan->save();
        return back();
    }            
}
