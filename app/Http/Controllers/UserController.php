<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function senarai_user(Request $request) {
        $users = User::all();
        return view('user.senarai', compact('users'));        
    }

    public function satu_user(Request $request) {
        $id = (int)$request->route('id');
        $user = User::find($id);
        
        return view('user.satu', compact('user'));        
    }

    public function cipta_user(Request $request) {
        
    }
}
