<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', ['as' => 'home', 'uses' => 'PostController@index']);
    Route::get('/post/{id}', ['as' => 'post.show', 'uses' => 'PostController@show']);
    Route::get('/post/create', ['as' => 'post.create', 'uses' => 'PostController@create']);
    Route::post('/post', ['as' => 'post.store', 'uses' => 'PostController@store']);
    Route::post('/comment', ['as' => 'comment.store', 'uses' => 'CommentController@store']);
});
