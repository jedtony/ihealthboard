<?php

namespace App\Http\Controllers;

use App\ThreadComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThreadCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        request()->validate([
            'body' => ['required', 'min:10']
        ]);

        ThreadComment::create([
            'user_id' => Auth::user()->id,
            'thread_id' => request('thread_id'),
            'body' => request('body')
        ]);

        return redirect('/thread/'.request('thread_id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ThreadComment  $threadComment
     * @return \Illuminate\Http\Response
     */
    public function show(ThreadComment $threadComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ThreadComment  $threadComment
     * @return \Illuminate\Http\Response
     */
    public function edit(ThreadComment $threadComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ThreadComment  $threadComment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ThreadComment $threadComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ThreadComment  $threadComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(ThreadComment $threadComment)
    {
        //
    }
}
