<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // Table Name
//    protected $table = 'comments';
//    // Primary Key
//    public $primaryKey = 'id';
//    // Timestamps
//    public $timestamps = true;
    protected $fillable=['body', 'author','postId'];

//    public static function create(array $array)
//    {
//    }


    public function user(){
        return $this->belongsTo('App\User','author');
    }
    public function post(){
        return $this->belongsTo('App\Post','postId');
    }

}
