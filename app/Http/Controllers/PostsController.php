<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use Auth;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        $username = $request->user();
        dd($username);
        // $users = \DB::table('users')->get();
        $list = \DB::table('posts')->get();
        return view('posts.index',['list'=>$list]);
    }

    public function post(Request $request){

        // return view('posts/index',[ 'username'=>$username ]);

        $post = $request->input('newPost');
        \DB::table('posts')->insert([
            'posts' => $post
        ]);
        return redirect('/top');
    }

    public function update($id){
        \DB::table('posts')
            ->where('id', $id)
            ->first();
        return redirect('/top');
    }

    public function delete($id){
        \DB::table('posts')
            ->where('id', $id)
            ->delete();
        return redirect('/top');
    }
}
