<?php

namespace App\Http\Controllers;

use App\Thread;
use Illuminate\Http\Request;
use App\User;

class UserProfileController extends Controller
{
    //

//    This function gets the persons personal threads
    public function getPersonalThreads(){
        $user = User::find(auth()->id());
        $userThreads = $user->threads();
//        dd(count($userThreads));
        return view('users.threads', compact('userThreads'));
    }

    //    This function gets the persons personal comments
    public function getPersonalComments(){

        $user = User::find(auth()->id());
        $userComments = $user->threadComments();
//        dd(count($userComments));
        return view('users.thread-comments', compact('userComments'));
    }


}
