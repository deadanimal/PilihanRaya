<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Soalan;

class SoalanController extends Controller
{
    public function senarai_soalan(Request $request) {
        $soalans = Soalan::all();
        return view('soalan.senarai', compact('soalans'));        
    }

    public function satu_soalan(Request $request) {
        $id = (int)$request->route('id');
        $soalan = Soalan::find($id);

        if ($req->user()) {
            activity()
            ->performedOn($soalan)
            ->causedBy($req->user())
            ->log('Read');     
        }
        
        return view('soalan.satu', compact('soalan'));        
    }

    public function borang_soalan(Request $request) {
        return view('soalan.borang');
    }

    public function cipta_soalan(Request $request) {
        $soalan = New Soalan;
        $soalan->save();
        return back();
    }  
}
