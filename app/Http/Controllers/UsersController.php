<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    //
    public function profile(Request $request){
        $authdata = Auth::user();
        dd($authdata);
        // $username = $request->input('username');
        // $email = $request->input('email');
        // $password = $request->input('password');
        // $newpassword = $request->input('newpassword');
        // $bio = $request->input('bio');
        // $image = $request->input('image');
        // return view('users.profile',[
        //     'username'=>$username,
        //     'email'=>$email,
        //     'password'=>$password,
        //     'newpassword'=>$newpassword,
        //     'bio'=>$bio,
        //     'image'=>$image
        // ]);
    }

    // public function search(){
    //     return view('users.search');
    // }

    public function index(){
        $users = \DB::table('users');
        $list = $users->get();
        return view('users.search',['list'=>$list]);
    }

    public function serch(Request $request) {
        $searchname = $request->input('username');
        $users = \DB::table('users');
        $list = $users->where('username', 'like', '%'.$searchname.'%')->get();
        return view('users.search',['list'=>$list,'searchname'=>$searchname]);
   }
}
