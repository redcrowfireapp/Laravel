
<?php

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
| Route with wild card
|--------------------------------------------------------------------------
|
| Route::get('contact/{id}', "WelcomeController@show");
|
*/

Route::get('contact/{id}', "WelcomeController@show"); 
