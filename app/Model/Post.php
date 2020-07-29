<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'post';
    protected $fillable = [
        'title', 'postcontent',
    ];
    
    protected $hidden = [
        'timestamps',
    ];
    
    public function users()
    {
        return $this->belongsTo('App\Model\User', 'postId', 'id');
    }

    public function comments()
    {
        return $this->hasMany('App\Model\Comment', 'postId', 'id');
    }

    public function getAllPost()
    {
        return $this->where('user_id',1)->orderBy('created_at','desc');
    }
}
