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
| Wild Card Example
|--------------------------------------------------------------------------
|
| Route::get("article/{id}", "ArticleController@show");
|
*/

Route::get("article", "ArticleController@index");
Route::get("article/{id}", "ArticleController@show");
