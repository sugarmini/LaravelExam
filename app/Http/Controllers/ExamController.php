<?php

namespace App\Http\Controllers;

use App\Level;
use App\Paper;
use App\PaperInfo;
use App\PaperManage;
use App\Question;
use App\SingleQ;
use App\Subject;
use App\Type;
use App\UserPaper;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

Class ExamController extends Controller
{
    public function login(){
        return view('exam/index')->with(['email' => $_COOKIE['email'],'pwd' => isset($_COOKIE['pwd'])?$_COOKIE['pwd']:"",'remain' => isset($_COOKIE['remain'])?$_COOKIE['remain']:""]);
    }

    public function check(Request $request)
    {
        $data = $request->input('Users');
        setcookie('email', $data['email']);
        setcookie('remain', $request->input('remain'));
        if ( isset($_COOKIE['remain'])){
            setcookie('pwd' , $data['password']);
        }
        $res = Users::where(['email' => $_COOKIE["email"], 'password' => $_COOKIE['pwd']])->first() ;
        setcookie('id' , $res->id);
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

        $subjects = Subject::all();
        $types = Type::all();
        $levels = Level::all();
        $job = Users::find($_COOKIE['id'])->job;
        $data = $request->input('ddlTestType','');
        $subject = Subject::where(['subject' => $data])->first();
        $subject_no = $subject?$subject->sub_no:1;
        $paper_no = PaperInfo::where(['paper_sub' => $subject_no])->first()->paper_no;
        $questions = $this->getPaper($paper_no);

        return view('exam/test')->with(['req' => $req,
            'time'     => $time,
            'subjects'    => $subjects,
            'types'    => $types,
            'levels'   => $levels,
            'job'      => $job,
            'questions'    => $questions,
            'data'     => $data
        ]);
    }

    public function home(Request $request){
        $id = $_COOKIE['id'];
        $userInfo = Users::find($id);

        $img = "../../../../LaravelExam/public/images/user_default.jpg";
        if (isset($_FILES['photo']['name'])){
            $path = "D:/website/LaravelExam/public/images/userImg/";
            $server_name = $path."userId".$id.".png";
            if($_FILES['photo']['error']>0) {
                die("出错了！".$_FILES['photo']['error']);
            }
            if(move_uploaded_file($_FILES['photo']['tmp_name'],$server_name)){
                $img = "../../../../LaravelExam/public/images/userImg/"."userId".$id.".png";
                $userInfo->img = $img;
                $userInfo->save();
            }
        }
        return view('exam/home')->with(['info' => $userInfo]);
    }

    public function saveInfo(Request $request){
        $newInfo = $request->input('newInfo');
        $oldInfo = Users::find($_COOKIE['id']);
        $oldInfo->name = $newInfo['name'];
        $oldInfo->sex = $newInfo['sex'];
        $oldInfo->job = $newInfo['job']?$newInfo['job']:$oldInfo->job;
        $oldInfo->password = $newInfo['pwd'];
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

    public function analyse($paper_no = null){
        $id = $_COOKIE['id'];
        $papers = UserPaper::where(['user_no' => $id])->get();
        $names = array();
        $i=0;
        foreach ($papers as $paper){
            $names[$i++] = PaperInfo::find($paper->paper_no)->paper_name;
        }
        $questions = $paper_no?$this->getPaper($paper_no):$this->getPaper($papers[0]->paper_no);
        $mark = $paper_no?$this->getMark($_COOKIE['id'],$paper_no):$this->getMark($_COOKIE['id'],$papers[0]->paper_no);
        $name =$paper_no? PaperInfo::find($paper_no)->paper_name:$names[0];
        return view('exam/analyse')->with([
            'names' => $names,
            'questions' => $questions,
            'mark' => $mark,
            'paper_name' => $name]);
    }

    public function paperInfo(Request $request ){
        $name = $request->route('name');
        $paper_no = PaperInfo::where(['paper_name' => $name])->first()->paper_no;

        return $this->analyse($paper_no);
    }

    public  function getPaper($paper_no){
        $ques = PaperManage::where(['paper_no' => $paper_no])->get();
        $questions = array();
        $i=0;
        foreach ($ques as $que){
            if ($que->que_type == 1){
                $questions[$i++] = SingleQ::find($que->que_no);
            }
        }

        return $questions;
    }

    public function getMark($user_no,$paper_no){
        return UserPaper::where(['user_no' => $user_no,'paper_no' => $paper_no])->first()->mark;
    }


}