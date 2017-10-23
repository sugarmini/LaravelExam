<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaperManage extends model
{
    protected $table = 'paper_manage';
    protected $primaryKey = 'id';
    public $timestamps = false;
}