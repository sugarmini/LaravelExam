<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model{
    protected $table = 'user_answer';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['user_no','paper_no','que_no'];
}