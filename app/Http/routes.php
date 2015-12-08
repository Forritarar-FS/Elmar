<?php

Route::get('/','PostController@index');
Route::get('/home',['as' => 'home', 'uses' => 'PostController@index']);
//authentication
Route::controllers([
 'auth' => 'Auth\AuthController',
 'password' => 'Auth\PasswordController',
]);
// check for logged in user
Route::group(['middleware' => ['auth']], function()
{
 Route::get('new-post','PostController@create');
 Route::post('new-post','PostController@store');
 Route::get('edit/{slug}','PostController@edit');
 Route::post('update','PostController@update');
 Route::get('delete/{id}','PostController@destroy');
 Route::get('my-all-posts','UserController@user_posts_all');
 Route::get('my-drafts','UserController@user_posts_draft');
 Route::post('comment/add','CommentController@store');
 Route::post('comment/delete/{id}','CommentController@distroy');
 Route::get('csgo', 'HomeController@csgo');
 Route::get('dota2', 'HomeController@dota2');
 Route::get('lol', 'HomeController@lol');
 Route::get('hearthstone', 'HomeController@hearthstone');
});
//users profile
Route::get('user/{id}','UserController@profile')->where('id', '[0-9]+');
// display list of posts
Route::get('user/{id}/posts','UserController@user_posts')->where('id', '[0-9]+');
// display single post
Route::get('/{slug}',['as' => 'post', 'uses' => 'PostController@show'])->where('slug', '[A-Za-z0-9-_]+');
