<?php

namespace App\Http\Controllers;

use App\Level;
use App\Sort;
use App\Type;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

Class ExamController extends Controller
{
    public function login(){
        return view('exam/index')->with(['email' => session('email'),'pwd' => session('pwd'),'remain' => session('remain')]);
    }

    public function check(Request $request)
    {
        $data = $request->input('Users');
        $ema = $data['email'];
        $pwd = $data['password'];
        session(['email' => $ema,'remain' => $request->input('remain')]);
        if ( session('remain')== 'on'){
            session(['pwd' => $pwd]);
        }
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
        $req = $request->input('time');
        if ($req == 1)
            $time = '一个小时';
        else if ($req == 1.5)
            $time = '一个半小时';
        else if ($req == 2)
            $time = '二个小时';
        else
            $time = '';

        $sorts = Sort::all();
        $types = Type::all();
        $levels = Level::all();
        return view('exam/test')->with(['req' => $req,'time' => $time,'sorts' => $sorts,'types' => $types,'levels' => $levels]);
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
        if ($newInfo['email']){
            $res = $this->send($newInfo['email']);
            /*if ($res){
                $oldInfo->email = $newInfo['email']?$newInfo['email']:$oldInfo->email;
            }*/
        }
        $oldInfo->save();
        return redirect('home');
    }

    public function send($email){
        $content = '验证';
        $flag = Mail::send('emails.mail',['content' => $content],function ($message) use($email){
            $message->to($email)->subject('主题');
        });
            return $flag;
    }
}