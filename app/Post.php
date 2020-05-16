<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function caste()
    {
        return $this->belongsTo('App\Caste');
    }
}
