<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paper extends Model{
    protected $table = 'paper_manage';
    protected $primaryKey = 'paper_no';
    public $timestamps = false;
}