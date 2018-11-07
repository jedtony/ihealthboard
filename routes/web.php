<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/viewui', function (){
    return view('forum.threads');
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('/thread/{thread}', 'ThreadController@show');

Route::get('/forum', 'ThreadController@index');

Route::post('/thread', 'ThreadController@store');

Route::get('/forum/create', "ThreadController@create")->middleware('auth');
Route::post('/comment','ThreadCommentController@store');

Route::get('/tags/{tag}', 'TagController@index');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'HomeController@dashboard')
        ->middleware('auth');
Route::get('/my-threads', 'UserProfileController@getPersonalThreads')
        ->middleware('auth');

Route::get('/my-comments', 'UserProfileController@getPersonalComments')
    ->middleware('auth');


// FOR THE ADMIN
Route::get('/admin', 'AdminController@index')
    ->middleware('is_admin')
    ->name('admin');

Route::get('admin/all-users', 'AdminController@getAllUsers')
    ->middleware('is_admin');

Route::get('admin/guest-questions', 'AdminController@getGuestQuestions');

Route::post('/guest-question', 'GuestQuestionController@store');

Route::get('/admin/all-threads', 'AdminController@getAllThreads');