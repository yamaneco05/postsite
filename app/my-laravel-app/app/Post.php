<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function images()
    {
        return $this->hasMany('App\Image', 'post_id', 'id');
    }
}
