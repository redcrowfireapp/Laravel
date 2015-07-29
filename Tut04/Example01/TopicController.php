<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\topic; // (important adding topic model class to this controller)

use App\Http\Requests;
use App\Http\Controllers;

class TopicController extends Controller
{
    public function index()
    {
        $topics = topic::all(); // (Returing Data from DB "topics" table)
        return view('pages.topic', compact('topics'));  // (Passing Data to "topic" view)
    }  
}
