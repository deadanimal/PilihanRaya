<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function senarai_post(Request $request) {
        $posts = post::all();
        return view('post.senarai', compact('posts'));
    }

    public function satu_post(Request $request) {
        $id = (int)$request->route('id');
        $post = post::find($id);

        if ($req->user()) {
            activity()
            ->performedOn($post)
            ->causedBy($req->user())
            ->log('Read');     
        }
        
        return view('post.satu', compact('post'));
    }

    public function borang_post(Request $request) {
        return view('post.borang');
    }

    public function cipta_post(Request $request) {
        $post = New post;
        $post->save();
        return back();
    }  
}
