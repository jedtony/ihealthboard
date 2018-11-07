<?php

namespace App\Http\Controllers;

use App\GuestQuestion;
use Illuminate\Http\Request;

class GuestQuestionController extends Controller
{
    //
    public function store(){
        request()->validate([
            'description' => ['required', 'min:10']
        ]);

        GuestQuestion::create([
            'description' => request('description')
        ]);

        return redirect('/forum');
    }
}
