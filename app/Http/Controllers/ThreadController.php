<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $threads = Thread::all();
        $allTags = Tag::all();
        return view('forum.threads', compact('threads', 'allTags'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $allTags = Tag::all();
        return view('forum.create', compact('allTags'));
    }

//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3', 'max:30'],
            'body' => ['required', 'min:10']
        ]);
        $tags = request('tags');
//        dd($tags);
        $threadId =  Thread::create([
            'user_id' => Auth::user()->id,
            'title' => request('title'),
            'body' => request('body')
        ]);

//        dd($threadId->id);

            foreach ($tags as $tag) {
                $threadId->tags()->attach($tag);
            }
        return redirect('/forum');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */

    public function show(Thread $thread)
    {
        //
//        dd($thread->id);
//        dd(Thread::find($thread->id));
        $threadDetails = Thread::find($thread->id);
        return view('forum.thread-details', compact('threadDetails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function edit(Thread $thread)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thread $thread)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thread $thread)
    {
        //
    }

    public function getTag($name){
        $tag = Tag::where('name', $name)->get();
        dd($tag->name);
        return view('forum.tags', compact('tag'));
    }
}
