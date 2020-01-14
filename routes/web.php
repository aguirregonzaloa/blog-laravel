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



Route::get('/tasks','TasksController@index');

Route::get('/tasks/{task}','TasksController@show');

//Posts

//Show all posts
Route::get('/','PostsController@index')->name('home');
//Create a post
Route::get('/posts/create','PostsController@create');
//Show a post by its id
Route::get('/posts/{post}','PostsController@show');
//Send the request to create a new post
Route::post('/posts', 'PostsController@store');

//add comments to a post
Route::post('/posts/{post}/comments', 'CommentsController@store');



Route::get('/register','RegistrationController@create');

Route::post('/register','RegistrationController@store');



Route::get('/login','SessionsController@create');

Route::post('/login','SessionsController@store');

Route::get('/logout','SessionsController@destroy');

