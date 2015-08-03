<?php

/*
|--------------------------------------------------------------------------
| Form Validation by Controller (One Way)
|--------------------------------------------------------------------------
|
| Step01: Make Sure "use Illuminate\Http\Request;"  line included in your very top of the controller page
|
| Step02: Pass "Request $request" in the store function parameter
|
| Step03: use "$this->validate($request, ['Fname'=>'required|min:5','FDescription'=>'required']);" as validation rule
|         in the store function
|
*/


namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Flower;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FlowerController extends Controller
{
    public function index( ){

    	$data = Flower::all();
    	
    	return view('flower.index', compact('data'));

    }

    public function create( ){

    	return view('flower.create');

    }

    public function store(Request $request){

    	$this->validate($request, ['Fname'=>'required','FDescription'=>'required']); // For Form Validation

    	$PostedData = Request::all();

    	$Flower = Flower::create($PostedData);

    	return Redirect('Flower');

    }

}
