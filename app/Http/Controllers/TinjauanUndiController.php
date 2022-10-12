<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TinjauanUndi;

class TinjauanUndiController extends Controller
{
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
