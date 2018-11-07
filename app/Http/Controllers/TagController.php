<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    //

    public function index(Tag $tag){
        $threads = $tag->threads;
//        dd($thread);
        $allTags = Tag::all();
        return view('forum.tags', compact('threads', 'allTags'));
    }
}
