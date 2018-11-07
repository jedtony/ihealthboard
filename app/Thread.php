<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends MyModel
{
    //
    public function threadComments(){
       return $this->hasMany('App\ThreadComment');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function tags(){
       return $this->belongsToMany(Tag::class);
    }

}
