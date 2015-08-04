<?php
/*
|--------------------------------------------------------------------------
| Form Validation by Form Request Object (Another Way)
|--------------------------------------------------------------------------
|
| Step01: Type in CMD "php artisan make:request FlowerCreateRequest" to Make Form Request Object
|
| Step02: Make "authorize()" retuen value 'true' as we are just going to do validation but no User permission
|
| Step03: Put some rules into "rules()" blocks like "return ['Fname'=>'required|min:3', 'FDescription'=>'required'];"
| 
| Step04: After that in your controller class "FlowerController.php" include this line "use App\Http\Requests\FlowerCreateRequest;"
|
| Step05: And pass this "FlowerCreateRequest" object as a parameter by store(){ function i.e
|           public function store(FlowerCreateRequest $request){...} 
|
| Step06: At last call this "FlowerCreateRequest" object within the scope of the store() function i.e
|
|       $PostedData = $request->all();
|       $Flower = Flower::create($PostedData);
|       return Redirect('Flower');
*/

namespace App\Http\Requests;
use App\Http\Requests\Request;

class FlowerCreateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return ['Fname'=>'required|min:3', 'FDescription'=>'required'];
    }
}
