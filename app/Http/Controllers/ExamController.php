<?php

namespace App\Http\Controllers;

use App\UserInfo;
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
        session(['id' => $res->id]);
        if ($res)
            return redirect('start');
        else
            return redirect('login');
    }

    public function start(){
        return view('exam/start');
    }

    public function test(Request $request){
        $time = $request->input('time');
        return view('exam/test')->with('time',$time);
    }

    public function home(){
        $id = session('id');
        $userInfo = Users::find($id);
        return view('exam/home')->with('info',$userInfo);
    }

    public function saveInfo(Request $request){
        $newInfo = $request->input('newInfo');
        $oldInfo = Users::find(session('id'));
        $oldInfo->name = $newInfo['name'];
        $oldInfo->sex = $newInfo['sex'];
        $oldInfo->job = $newInfo['job']?$newInfo['job']:$oldInfo->job;
        $oldInfo->save();
        return redirect('home');
    }
}