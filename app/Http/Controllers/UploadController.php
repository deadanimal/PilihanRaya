<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upload;


class UploadController extends Controller
{

    public function muatnaik(Request $request) {
        $path = $request->file('upload')->store('myundian/uploads');
    }

}
