<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BorangController extends Controller
{

    public function senarai(Request $request) {
        return view('borang');
    }
    
}
