<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

Class ExamController extends Controller
{
    public function login(){
        return view('exam/index');
    }

    public function check(Request $request)
    {
        $data = $request->input('Users');
        $ema = $data['email'];
        $pwd = $data['password'];
        $res = Users::where(['email' => $ema, 'password' => $pwd])->first() ;
        if ($res)
            return redirect('start');
        else
            return redirect('login');
    }

    public function start(){
        return view('exam/start');
    }

    public function test(){
        return view('exam/test');
    }

}