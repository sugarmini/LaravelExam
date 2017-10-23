<?php

namespace App\Http\Controllers;

use App\Level;
use App\Question;
use App\Subject;
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
        session(['email' => $data['email']]);
        session(['password' => $data['password']]);
        session(['remain' => $request->input('remain')]);
        if ( session('remain')== 'on'){
            session(['pwd' => session('password')]);
        }
        $res = Users::where(['email' => session('email'), 'password' => session('password')])->first() ;
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

        $sorts = Subject::all();
        $types = Type::all();
        $levels = Level::all();
        $job = Users::find(session('id'))->job;
        $data = $request->input('ddlTestType',' ');
        if ($request->input('ddlTestType')){
            $sort_id = Subject::where(['subject' => $data])->first()->id;
        }
        else{
            $sort_id = 1;
        }
        $papers = Question::where(['sort_id' => $sort_id])->get();
        return view('exam/test')->with(['req' => $req,
            'time'     => $time,
            'sorts'    => $sorts,
            'types'    => $types,
            'levels'   => $levels,
            'job'      => $job,
            'papers'    => $papers,
            'data'     => $data
        ]);
    }

    public function home(Request $request){
        $id = session('id');
        $userInfo = Users::find($id);

        $path = "D:/website/root/";
        $server_name = $path."userId".$id.".png";
        if($_FILES['photo']['error']>0) {
            die("出错了！".$_FILES['photo']['error']);
        }
        if(!move_uploaded_file($_FILES['photo']['tmp_name'],$server_name)){
            $server_name = "../../../../LaravelExam/public/images/user_default.jpg";
        }
        return view('exam/home')->with(['info' => $userInfo,'img' => $server_name]);
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

    public function analyse(){
        return view('exam/analyse');
    }


}