<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class PaperInfo extends Model{
    protected $table = 'paper_info';
    protected $primaryKey = 'paper_no';
    public $timestamps = false;
}