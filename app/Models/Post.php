<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = ['title', 'image','content','slug'];
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
