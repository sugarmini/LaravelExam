<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::group(['middleware' => ['web']],function (){
    Route::any('register',['uses' => 'ExamController@register']);
    Route::any('active/{id}/{time}',['uses' => 'ExamController@active']);
    Route::any('login',['uses' => 'ExamController@login']);
    Route::any('check',['uses' => 'ExamController@check']);
    Route::any('start',['uses' => 'ExamController@start']);
    Route::any('test',['uses' => 'ExamController@test']);
    Route::any('home',['uses' => 'ExamController@home']);
    Route::any('saveInfo',['uses' => 'ExamController@saveInfo']);
    Route::any('analyse',['uses' => 'ExamController@analyse']);
    Route::any('paperInfo/{name?}',['uses' => 'ExamController@paperInfo']);
    Route::any('finish',['uses' => 'ExamController@finish']);
    Route::any('forum',['uses' => 'ForumController@forum']);
    Route::any('add',['uses' => 'ForumController@add']);
    Route::any('addForum',['uses' => 'ForumController@addForum']);
    Route::any('detail/{id}',['uses' => 'ForumController@detail']);
    Route::any('comment',['uses' => 'ForumController@comment']);
    Route::any('search',['uses' => 'ForumController@search']);
});

Route::any('send',['uses' => 'ExamController@send']);