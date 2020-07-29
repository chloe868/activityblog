<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comment';
    protected $fillable = [
        'commentcontent',
    ];
    
    protected $hidden = [
        'timestamps',
    ];
    
    public function posts()
    {
        return $this->belongsTo('App\Model\Post');
    }

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
