<?php
/**
 * Created by PhpStorm.
 * User: Anny
 * Date: 2017/10/30
 * Time: 14:27
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = 'forum';
    protected $primaryKey = 'forum_no';
    public $timestamps = false;
    protected $fillable = ['user_id','title','content','id','state'];
}