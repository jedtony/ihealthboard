<?php
/**
 * Created by PhpStorm.
 * User: jed
 * Date: 29/10/2018
 * Time: 1:53 AM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class MyModel extends Model
{
    protected $fillable = array('body', 'title', 'file_upload', 'user_id', 'thread_id', 'description');
}