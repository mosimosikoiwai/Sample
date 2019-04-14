<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index ()
    {
        $hello = 'Hello,World!';
        $hello_array = ['Hello', 'こんにちは', 'ニーハオ'];

//        return view('index', ['hello' => 'hello',
//                              'hello_array' => $hello_array]);
        $users = DB::select('select * from personal', [1]);
        //var_dump($users[0]['id'],$users[0]['name']);
        foreach($users as $val){
          var_dump($val->name);
        }
        //return view('aute/login',compact('hello','hello_array'));
        return view('login');
    }
}
