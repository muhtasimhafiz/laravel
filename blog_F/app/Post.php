<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $guarded = ['created_at', 'updated_at'];

    protected $dates = [
        'published_at',
    ];


    public function catagory(){
        return $this->belongsTo('App\Catagory');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function tags()
    {
        # code...
        return $this->belongsToMany('App\Tag');
    }

}
