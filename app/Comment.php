<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{   
    
    protected $guarded=['post_id','user_id','text','status'];
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
