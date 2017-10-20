<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model{

    protected $table = 'user';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['email','password','name','sex','job'];

    public function getDateFormat()
    {
        return time();
    }

    public function asDateTime($value)
    {
        return $value;
    }
}