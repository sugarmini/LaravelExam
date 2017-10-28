<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPaper extends Model{
    protected $table = 'user_paper';
    protected $primaryKey = 'no';
    protected $fillable = ['user_no','paper_no'];
    public $timestamps = false;
}