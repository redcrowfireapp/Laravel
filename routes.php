<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Skeleton of this route
|--------------------------------------------------------------------------
|
| Route::get('URL', "Controller Name @ Method Name Under Controller");
|
| Route::get('/', "WelcomeController@index");
| (This will call If you type "localhost/laravel/public/" because '/' means root)
|
| Route::get('contact', "WelcomeController@Contact");
| (This will call If you type "localhost/laravel/public/contact" because '/contact' means contact under root)
|
*/



Route::get('/', "WelcomeController@index");
Route::get('contact', "WelcomeController@Contact");


/*
|--------------------------------------------------------------------------
| Another way to Routes specially use for when you will create API
|--------------------------------------------------------------------------
|
| Route::get('/', function () {
| return view('welcome');
| });
|
| (or)
|
| Route::get('foo', function () {
|     return "bar";
| });
|
*/

 Route::get('foo', function () {
     return "bar";
 });


/*
|--------------------------------------------------------------------------
| Example 01
|--------------------------------------------------------------------------
|
| Route::get('Topic', "TopicController@index");
|
*/

Route::get('topic', "TopicController@index");

/*
|--------------------------------------------------------------------------
| Example 02
|--------------------------------------------------------------------------
|
| Route::get("Book", "BookController@index");
|
*/

Route::get("Book", "BookController@index");

