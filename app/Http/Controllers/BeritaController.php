<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{

    public function home(Request $request) {
        return view('home');
    }

    public function senarai_berita(Request $request) {
        $beritas = Berita::all();
        return view('berita.senarai', compact('beritas'));
    }

    public function satu_berita(Request $request) {
        $id = (int)$request->route('id');
        $berita = Berita::find($id);

        if ($req->user()) {
            activity()
            ->performedOn($berita)
            ->causedBy($req->user())
            ->log('Read');     
        }
        
        return view('berita.satu', compact('berita'));
    }

    public function borang_berita(Request $request) {
        return view('berita.borang');
    }

    public function cipta_berita(Request $request) {
        $berita = New Berita;
        $berita->save();
        return back();
    }    
    
}
