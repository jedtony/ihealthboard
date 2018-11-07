<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return view('forum.threads');
        return redirect('/forum');
    }

    public function dashboard(){
        $user = User::find(auth()->id());
        $userThreads = count($user->threads());

        $user = User::find(auth()->id());
        $userComments = count($user->threadComments());
        return view('users.dashboard', compact('userThreads', 'userComments'));
    }
}
