<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Flower;
use App\Http\Requests;
use App\Http\Requests\FlowerCreateRequest;
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

    public function store(FlowerCreateRequest $request){    	

    	$PostedData = $request->all();

    	$Flower = Flower::create($PostedData);

    	return Redirect('Flower');

    }

}
