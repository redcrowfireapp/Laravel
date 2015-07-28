<?php 
namespace App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| To create Controller class With default Methods
|--------------------------------------------------------------------------
| php artisan make:controller MoinController | (for help: php artisan help make:controller)
*/
/*
|--------------------------------------------------------------------------
| To create simple Controller class
|--------------------------------------------------------------------------
| php artisan make:controller MoinController --plain | (for help: php artisan help make:controller)
*/

class WelcomeController extends Controller
{
    public function index()
    {

		/*
		|--------------------------------------------------------------------------
		| Returning string output
		|--------------------------------------------------------------------------
		| return "Hello World";
		|
		*/
		/*
		|--------------------------------------------------------------------------
		| Calling view
		|--------------------------------------------------------------------------
		| return view('Hello');
		|
		*/
		/*
		|--------------------------------------------------------------------------
		| Passing single value to view
		|--------------------------------------------------------------------------
		| $name = "Moinul Huq";    	
		| return view('Hello')->with('name', $name);
		|
		*/
		/*
		|--------------------------------------------------------------------------
		| Passing multiple value to view
		|--------------------------------------------------------------------------
		| return view('Hello')->with(['first'=>'Moinul', 'last'=>'Huq']);
		|
		| (or)
		| return view('Hello', ['first'=>'Moinul', 'last'=>'Huq']);
		|
		| (or)
		| $first="Moinul";
		| $last="Huq";    	
		| return view('Hello', compact('first','last'));
		|
		| (or)
		| $data=[];
		| $data['first']="Moinul";
		| $data['last']="Huq";
		| return view('Hello', $data);
		|
		| (or)
		| $first="Moinul";
		| return view('Hello', compact('first'))->with('last','huq');		
		|
		| (or)
		| $name=['Md','Moinul','Huq'];
		| return view('Hello', compact('names'));
		*/
    }

    public function contact()
    {
    	//return "contact me";
    	return view('pages.contact'); // ("pages.contact" means views/pages/contact.blade.php)    	
    }    

    public function show($id)
    {
    	return $id;    	
    }    
}
