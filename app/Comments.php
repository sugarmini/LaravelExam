<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comment';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['id','forum_id','user_id','content','time','recom_id'];
}