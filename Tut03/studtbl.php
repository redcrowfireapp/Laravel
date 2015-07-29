<?php 
namespace App;
use Illuminate\Database\Eloquent\Model;

/*
|--------------------------------------------------------------------------
| To create model 
|--------------------------------------------------------------------------
| php artisan make:model studtbl | (for help: php artisan help make:model)|(This will create this model file 'studtbl')
| ( Your model name should be the the same name of DB table except 's'
| i.e let say you have 'studtbls' table then model name will be 'studtbl'.)
|
*/
/*
|--------------------------------------------------------------------------
| To insert value through this model
|--------------------------------------------------------------------------
| php artisan tinker (In your cmd type) 
| (Once tinker load create model object like below)
| 
| $studtbl = new  App\studtbl;
| (Now start to Assign object's member variable by value, no need to declare member variable into 'studtbl' class)
|
| $studtbl->name='Md Moinul huq'
| $studtbl->nicknm='Moin'
| $studtbl->gender=true
| $studtbl->enrlmntdate=Carbon\Carbon::now();
| $studtbl->avrgmrk='60'
| $studtbl->totlmrk='600'
| $studtbl->roll='52'
| $studtbl->address='85/1 Shamibagh, Dhaka-1100'
| 
| $studtbl->save(); // Will insert into table
|
| (or)
|
| (Insert into table smartly using tinker)
|
| $studtbl = App\studtbl::create(['name'=>'Fahim Hassan', 'nicknm'=>'Tanim', 'gender'=>true,'enrlmntdate'=>Carbon\Carbon::now(),
| 								'avrgmrk'=>'70', 'totlmrk'=>'700', 'roll'=>'1', 'address'=>'77/1 Saidabad, Dhaka-1100']);
|
| (if any error occured for this above line please add this below code under the 'studtbl' model class)
| protected $fillable=['name', 'nicknm' ,'gender', 'enrlmntdate', 'avrgmrk', 'totlmrk', 'roll', 'address'];
*/
/*
|--------------------------------------------------------------------------
| Select, Update and where clause through this model
|--------------------------------------------------------------------------
|
| $studtbl->nicknm='Real'
| $studtbl->save(); // Will Update into table
|
| $studtbl = App\studtbl::all(); // Will fetch all data from db table
|
| $studtbl = App\studtbl::find(1); // Will fetch data where id=1
|
| $studtbl = App\studtbl::where('name','moin')->first(); // Will look for in the first occurance rows of tables
|
| $studtbl = App\studtbl::where('name','moin')->get(); // Will look for in all rows of tables and return collection 
*/
/*
|--------------------------------------------------------------------------
| Find fahim's record and update his 'nick' name 
|--------------------------------------------------------------------------
| $studtbl = App\studtbl::find(2);
| $studtbl->nicknm = 'Fahim' 
| $studtbl->save(); // Will Updated 'nicknm' into table
|
| (or)
|
| $studtbl->update(['nicknm'=>'Fahim']);
*/

class studtbl extends Model
{
    protected $fillable=['name', 'nicknm' ,'gender', 'enrlmntdate', 'avrgmrk', 'totlmrk', 'roll', 'address'];
}
