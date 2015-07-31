<?php

namespace App\Http\Controllers;

use Request;
use App\article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
	  public function index(){

    	// $articles = article::all(); // For Displaying data in Ascending order
    	
    	$articles = article::latest('id')->get(); // For Displaying data in descending order

    	return view('pages.article', compact('articles'));	
    }

    public function create(){
    	
    	return view('pages.createarticle');	
    }

    public function store(){
    	
    	//$input = Request::get('ArtName'); // To get all form controll value
    	
    	$input = Request::all(); // To get all form controll value
    	
    	$article = article::create($input); // Saving value through Model
    	
    	return Redirect('article'); // Redirecting to article pages
    }

}
