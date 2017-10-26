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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => ['web']],function (){
    Route::any('login',['uses' => 'ExamController@login']);
    Route::any('check',['uses' => 'ExamController@check']);
    Route::any('start',['uses' => 'ExamController@start']);
    Route::any('test',['uses' => 'ExamController@test']);
    Route::any('home',['uses' => 'ExamController@home']);
    Route::any('saveInfo',['uses' => 'ExamController@saveInfo']);
    Route::any('analyse',['uses' => 'ExamController@analyse']);
    Route::any('paperInfo/{name?}',['uses' => 'ExamController@paperInfo']);
});

Route::any('send',['uses' => 'ExamController@send']);