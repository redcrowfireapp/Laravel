<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index(){

    	$articles = article::all();
    	return view('pages.article', compact('articles'));	
    }

    public function show($id){

	/*
	|--------------------------------------------------------------------------
	| $articles = article::find($id);  If you use this then either you can use 
	|--------------------------------------------------------------------------
	|
	| dd($articles); //die_dump function 
	| 
	| // (or)
	| 
	| if(is_null($articles)){
	|			abort(404);
	| }
	| 
	| // (or)
	| 
	*/

   	$articles = article::findOrFail($id);  // You can Use this

	  return view('pages.showarticle', compact('articles'));	
    }
}
