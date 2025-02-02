<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded=[];

    public function category()
{
    return $this->belongsTo('App\Category','category_id');
}
}

