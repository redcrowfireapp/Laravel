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
| To optimize route
|--------------------------------------------------------------------------
| Route::get("Blog","BlogController@index");
| Route::get("Blog/create","BlogController@create");
| Route::get("Blog/{id}","BlogController@show");
| Route::post("Blog","BlogController@store");
| Route::get("Blog/{id}/edit","BlogController@edit");
| Route::patch("Blog/{id}","BlogController@update");
| 
| instead of writing the bunch of lines you can include only 'Route::resource("Blog","BlogController");' line
| 
| to test both things work in same way type in cmd 'php artisan route:list'
| 
| it will shows the below table
+--------+----------+--------------------+--------------+------------------------------------------------+------------+
| Domain | Method   | URI                | Name         | Action                                         | Middleware |
+--------+----------+--------------------+--------------+------------------------------------------------+------------+
|        | GET|HEAD  | Blog              | Blog.index   | App\Http\Controllers\BlogController@index      |            |
|        | GET|HEAD  | Blog/create       | Blog.create  | App\Http\Controllers\BlogController@create     |            |
|        | GET|HEAD  | Blog/{Blog}       | Blog.show    | App\Http\Controllers\BlogController@show       |            |
|        | POST      | Blog              | Blog.store   | App\Http\Controllers\BlogController@store      |            |
|        | GET|HEAD  | Blog/{Blog}/edit  | Blog.edit    | App\Http\Controllers\BlogController@edit       |            |
|        | PATCH     | Blog/{Blog}       |              | App\Http\Controllers\BlogController@update     |            |
|        | PUT       | Blog/{Blog}       | Blog.update  | App\Http\Controllers\BlogController@update     |            |
|        | DELETE    | Blog/{Blog}       | Blog.destroy | App\Http\Controllers\BlogController@destroy    |            |
+--------+----------+------------------+--------------+------------------------------------------------+------------+
| which means you don't need to write the whole bunch of code
*/

Route::resource("Blog","BlogController");
