<?php

namespace App\Http\Controllers;

use App\Comments;
use App\Note;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\View\View;

Class ForumController extends Controller{

    public function forum(){
        $notes = Note::all();
        $names = array();
        for ($i=0;$i<count($notes);$i++){
            $names[$i] = Users::find($notes[$i]->user_id)->name;
        }
        return view('forum/forum')->with(['notes' => $notes,'names' => $names]);
    }

    public function add(){
        return view('forum/add');
    }
    public function addForum(Request $request){
        $data = $request->input('note');
        $id = $_COOKIE['id'];
        $note = new Note();
        $note->user_id = $id;
        $note->title = $data['title'];
        $note->content = $data['content'];
        $note->save();
        return redirect('forum');
    }

    public  function detail($id){
        $forum = Note::find($id);
        $user = Users::where('id',$forum->user_id)->first();
        $comments = Comments::where('forum_id',$id)->get();
        return view('/forum/detail')->with(['forum'=>$forum,'user'=>$user,'comments' => $comments]);
    }

    public function comment(Request $request){
        $input = [
            'forum_id' => $request['forumId'],
            'user_id' => $_COOKIE['id'],
            'content' => $request['content']
        ];
        $com = Comments::create($input);
        return redirect('detail/'.$request['forumId']);
    }

    public function search(Request $request){
        $con = $request['search'];
        $res = Note::where('title','like','%'.$con.'%')->orWhere('content','like','%'.$con.'%')->get();
        $names = array();
        for ($i=0;$i<count($res);$i++){
            $names[$i] = Users::find($res[$i]->user_id)->name;
        }
        return view('/forum/forum',['notes'=>$res,'names' => $names]);
    }
 }

