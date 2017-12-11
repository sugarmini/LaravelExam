<?php

namespace App\Http\Controllers;

use App\Level;
use App\PaperInfo;
use App\PaperManage;
use App\SingleQ;
use App\Subject;
use App\Type;
use App\UserAnswer;
use App\UserPaper;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

Class ExamController extends Controller
{
    public function register(Request $request){
        $email = $request->input('email');

        if (Users::where('email','=',$email)->first()){
            echo "<script>alert('您已注册过，请去登录');</script>";
            setcookie('email',$email);
            return $this->login();
        }else{
            $input = [
                'email' => $email,
                'job'   => $request->input('career'),
                'password'  => $request->input('password')
            ];
            $user = Users::firstOrCreate($input);
            if ($user)
                $this->send($request->input('email'),$user->id);
            $url = $this->gotomail($request->input('email'));
            return view('exam/active')->with('url',$url);
        }

    }

    public function active(Request $request){
        $id = $request->route('id');
        $time = $request->route('time');
        if (time()<= ($time+24*60*60)){
            $user = Users::find($id);
            $user->statu = 1;
            $user->save();
            setcookie('email',$user->email);

        }else{
            echo "<script>alert('链接已失效，请重新注册');</script>";
        }
        return $this->login();
    }

    public function login(){
        return view('exam/index')->with(['email' =>isset($_COOKIE['email'])?$_COOKIE['email']:" ",'pwd' => isset($_COOKIE['pwd'])?$_COOKIE['pwd']:" ",'remain' => isset($_COOKIE['remain'])?$_COOKIE['remain']:" "]);
    }

    public function check(Request $request)
    {
        $data = $request->input('Users');
        setcookie('email', $data['email']);
        setcookie('remain', $request->input('remain'));
        $res = Users::where(['email' => $data['email'], 'password' => $data['password']])->first() ;
        if ($res){
            if ( isset($_COOKIE['remain'])){
                setcookie('pwd' , $data['password']);
            }
            if ($res->statu == 1){
                 setcookie('id' , $res->id);
                 return redirect('home');
            } else{
                 $url = $this->gotomail($data['email']);
                 echo "<script>alert('账号未激活，请前往邮箱激活');</script>";
                $url = $this->gotomail($data['email']);
                return view('exam/active')->with('url',$url);
            }
        } else{
            echo "<script>alert('密码错误')</script>";
            return $this->login();
        }
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
        $papers = PaperInfo::where(['paper_sub' => $subject_no])->get();
        $count = $papers->count();
        $i = rand(0,$count-1);
        $paper_no = $papers[$i]->paper_no;
        $questions = $this->getPaper($paper_no);

        return view('exam/test')->with(['req' => $req,
            'time'     => $time,
            'subjects'    => $subjects,
            'paper' => $papers[$i],
            'types'    => $types,
            'levels'   => $levels,
            'job'      => $job,
            'questions'    => $questions,
            'data'     => $data
        ]);
    }

    public function home(){
        $id = $_COOKIE['id'];
        $userInfo = Users::find($id);
        if (isset($_FILES['photo']['name'])){
            $path = "../../../../LaravelExam/public/images/userImg/";
            $server_name = $path."userId".$id.".png";
            if($_FILES['photo']['error']>0) {
                die("出错了！".$_FILES['photo']['error']);
            }
            if(move_uploaded_file($_FILES['photo']['tmp_name'],$server_name)){
                $img = "../../../../LaravelExam/public/images/userImg/"."userId".$id.".png";
                $userInfo->img = $img;
            }
        }
        $userInfo->save();
        return view('exam/home')->with(['info' => $userInfo]);
    }

    public function saveInfo(Request $request){
        $newInfo = $request->input('newInfo');
        $oldInfo = Users::find($_COOKIE['id']);
        $oldInfo->name = $newInfo['name'];
        $oldInfo->sex = $newInfo['sex'];
        $oldInfo->job = $newInfo['job']?$newInfo['job']:$oldInfo->job;
        $oldInfo->password = $newInfo['pwd']?$newInfo['pwd']:$oldInfo->password;
        if ($newInfo['email']){
            $res = $this->send($newInfo['email'],$_COOKIE['id']);
            if ($res == 0){
                $oldInfo->email = $newInfo['email'];
            }else{
                echo "<script>alert('邮箱错误')</script>";
            }
        }
        $oldInfo->save();
        return $this->home();
    }

    public function send($email,$id){
        $time = time();
        $content = 'http://localhost/LaravelExam/public/active/'.$id."/".$time;
        Mail::send('emails.mail',['content' => $content],function ($message) use($email){
            $message->to($email)->subject('主题');
        });
        return count(Mail::failures());
    }

    public function analyse($paper_no = null){
        $id = $_COOKIE['id'];
        $papers = UserPaper::where(['user_no' => $id])->get();
        if ($papers->count() != 0){
            $names = array();
            $i=0;
            foreach ($papers as $paper){
                $names[$i++] = PaperInfo::find($paper->paper_no)->paper_name;
            }
            $questions = $paper_no?$this->getPaper($paper_no):$this->getPaper($papers[0]->paper_no);
            $mark = $paper_no?$this->getMark($_COOKIE['id'],$paper_no):$this->getMark($_COOKIE['id'],$papers[0]->paper_no);
            $name =$paper_no? PaperInfo::find($paper_no)->paper_name:$names[0];
            $ans = $paper_no?$this->getAns($_COOKIE['id'],$paper_no):$this->getAns($_COOKIE['id'],$papers[0]->paper_no);
            $que_marks = $paper_no?$this->getQueMark($_COOKIE['id'],$paper_no):$this->getQueMark($_COOKIE['id'],$papers[0]->paper_no);
            return view('exam/analyse')->with([
                'names' => $names,
                'questions' => $questions,
                'mark' => $mark,
                'paper_name' => $name,
                'ans' => $ans,
                'que_marks' => $que_marks
            ]);
        } else{
            echo "<script>alert('您当前无已做试卷，请先进行考试') ;</script>";
            return view('exam/start');
        }
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

    public function finish(Request $request){
        $paper_no = $request->input('paper_no');
        $input = [
            'user_no'   => $_COOKIE['id'],
            'paper_no'  => $paper_no,
        ];
        $paper_info = UserPaper::firstOrCreate($input);
        $ques = $this->getPaper($paper_no);
        $mark = 0;
        $count = count($ques);
        for ($i=0;$i<$count;$i++) {
            $sel = $request->input('option' . $i);
            if ($sel == $ques[$i]->answer) {
                $que_mark = $ques[$i]->mark;
                $mark += $ques[$i]->mark;
            } else
                $que_mark = 0;
            $input = [
                'user_no'   => $_COOKIE['id'],
                'paper_no'  => $paper_no,
                'que_no'    => $i+1,
            ];
            $res = UserAnswer::firstOrCreate($input);
            $res->my_ans = $sel;
            $res->que_mark = $que_mark;
            $res->save();
        }
        $paper_info->mark = $mark;
        $paper_info->save();
        return $this->analyse($paper_no);
    }

    public function getAns($user_no,$paper_no){
        $answers = UserAnswer::where(['user_no'  => $user_no,'paper_no' => $paper_no])->get();
        $ans = array();
        $i=0;
        foreach ($answers as $answer){
            $ans[$i++] = $answer->my_ans;
        }
        return $ans;
    }

    public function getQueMark($user_no,$paper_no){
        $que_marks = UserAnswer::where(['user_no'  => $user_no,'paper_no' => $paper_no])->get();
        $marks = array();
        $i=0;
        foreach ($que_marks as $que_mark){
            $marks[$i++] = $que_mark->que_mark;
        }
        return $marks;
    }

    public function getMark($user_no,$paper_no){
        return UserPaper::where(['user_no' => $user_no,'paper_no' => $paper_no])->first()->mark;
    }

    //获取邮箱首页
    public function gotomail($mail){
        $t=explode('@',$mail);
        $t=strtolower($t[1]);
        if($t=='163.com'){
            return 'https://mail.163.com';
        }else if($t=='vip.163.com'){
            return 'https://vip.163.com';
        }else if($t=='126.com'){
            return 'https://mail.126.com';
        }else if($t=='qq.com'||$t=='vip.qq.com'||$t=='foxmail.com'){
            return 'https://mail.qq.com';
        }else if($t=='gmail.com'){
            return 'https://mail.google.com';
        }else if($t=='sohu.com'){
            return 'https://mail.sohu.com';
        }else if($t=='tom.com'){
            return 'https://mail.tom.com';
        }else if($t=='vip.sina.com'){
            return 'https://vip.sina.com';
        }else if($t=='sina.com.cn'||$t=='sina.com'){
            return 'https://mail.sina.com.cn';
        }else if($t=='tom.com'){
            return 'https://mail.tom.com';
        }else if($t=='yahoo.com.cn'||$t=='yahoo.cn'){
            return 'https://mail.cn.yahoo.com';
        }else if($t=='tom.com'){
            return 'https://mail.tom.com';
        }else if($t=='yeah.net'){
            return 'https://www.yeah.net';
        }else if($t=='21cn.com'){
            return 'https://mail.21cn.com';
        }else if($t=='hotmail.com'){
            return 'https://www.hotmail.com';
        }else if($t=='sogou.com'){
            return 'https://mail.sogou.com';
        }else if($t=='188.com'){
            return 'https://www.188.com';
        }else if($t=='139.com'){
            return 'https://mail.10086.cn';
        }else if($t=='189.cn'){
            return 'https://webmail15.189.cn/webmail';
        }else if($t=='wo.com.cn'){
            return 'https://mail.wo.com.cn/smsmail';
        }else if($t=='139.com'){
            return 'https://mail.10086.cn';
        }else {
            return '';
        }
    }






}