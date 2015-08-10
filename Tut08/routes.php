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

Route::get("Blog","BlogController@index");
Route::get("Blog/create","BlogController@create");
Route::get("Blog/{id}","BlogController@show");
Route::post("Blog","BlogController@store");
Route::get("Blog/{id}/edit","BlogController@edit");
Route::patch("Blog/{id}","BlogController@update");

