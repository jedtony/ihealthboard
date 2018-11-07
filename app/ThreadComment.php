<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThreadComment extends MyModel
{
    //

    public function thread(){
      return  $this->belongsTo('App\Thread');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
