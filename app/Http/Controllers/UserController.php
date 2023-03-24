<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Validator;  //この1行だけ追加！
use Auth; //これが新規追加

class UserController extends Controller
{
    public function index()
    {
         //自分のuser_idが付与されている投稿だけ取得する
        // $users = User::where('user_id',Auth::id())->orderBy('created_at', 'asc')->paginate(3);
        // return view('users', [
        //     'users' => $users
        // ]);
        
        //Userの全件データ取得
        $users = User::orderBy('created_at')->paginate(10);
        // $users = User::orderBy('created_at', 'asc')->get();
    
        return view('users', [
            'users' => $users
            ]);
    }
}
