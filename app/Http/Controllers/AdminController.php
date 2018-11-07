<?php

namespace App\Http\Controllers;

use App\GuestQuestion;
use App\Thread;
use App\ThreadComment;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $allThreads = count(Thread::all());
        $allComments = count(ThreadComment::all());
        $allUsers = count(User::all());
        return view('admin.dashboard', compact('allThreads', 'allComments', 'allUsers'));
//        return view('admin.dashboard');
    }

    public function admin()
    {
        $allThreads = count(Thread::all());
        $allComments = count(ThreadComment::all());
        $allUsers = count(User::all());
        return view('admin.dashboard', compact('allThreads', 'allComments', 'allUsers'));
    }

    public function getAllUsers(){
        $allUsers = User::all();
        return view('admin.all-users', compact('allUsers'));
    }

    public function getGuestQuestions(){
        $guestQuestions = GuestQuestion::all();
        return view('admin.guest-questions', compact('guestQuestions'));
    }

    public function getAllThreads(){
        $allThreads = Thread::all();
        return view('admin.all-threads', compact('allThreads'));
    }
}
