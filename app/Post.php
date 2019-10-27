<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name
//    protected $table = 'posts';
//    // Primary Key
//    public $primaryKey = 'id';
//
//    // Timestamps
//    public $timestamps = true;
    protected $fillable=['title','body', 'author'];

//    public static function id()
//    {
//    }
//    public static function id()
//    {
//
//    }

    public function user(){
        return $this->belongsTo('App\User','author');
    }
    public function comment(){
        return $this->hasMany('App\Comment');
    }
}
