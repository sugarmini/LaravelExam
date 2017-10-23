<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SingleQ extends Model{
    protected $table = 'single_question';
    protected $primaryKey = 'questionno';
    public $timestamps = false;
}