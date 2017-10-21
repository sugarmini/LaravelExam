<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Sort extends Model{
        protected $table = 'sorts';
        protected $primaryKey = 'id';
        public $timestamps = false;
    }