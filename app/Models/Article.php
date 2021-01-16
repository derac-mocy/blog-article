<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    
    public function comments(){
        $this->hasMany('App\Models\Comment');
    }

    public function category(){
        $this->belongsTo('App\Models\Category');
    }

    public function user(){
        $this->belongsTo('App\Models\User');
    }
}
