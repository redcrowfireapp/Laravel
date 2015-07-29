<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/*
|--------------------------------------------------------------------------
| To create Migration schema
|--------------------------------------------------------------------------
|
| php artisan make:migration create_student_tbl --create=studtbl | (For Help: php artisan help make:migration)
| (This command will generate this file "2015_07_23_184410_create_student_tbl")
*/
/*
|--------------------------------------------------------------------------
| To create Migration Database Table
|--------------------------------------------------------------------------
|
| php artisan migrate | (This will create Database Table like 'studtbl')
*/
/*
|--------------------------------------------------------------------------
| To Remove table from Database
|--------------------------------------------------------------------------
|
| php artisan migrate:rollback
*/
/*
|--------------------------------------------------------------------------
| To Alter column name of table
|--------------------------------------------------------------------------
|
| php artisan migrate:rollback
| (Change table column name from migration schema file "2015_07_23_184410_create_student_tbl", 
| change 'name' to 'studname' then again type)
| php artisan migrate
*/
/*
|--------------------------------------------------------------------------
| To add new column of table
|--------------------------------------------------------------------------
|
| php artisan make:migration alter_student_tbl --table=studtbl
| (This command will generate this file "2015_07_23_193231_alter_student_tbl")
| (Goto this file add column of the existing table then)
| php artisan migrate
*/

class CreateStudentTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studtbls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->char('nicknm',4)->nullable();
            $table->boolean('gender');
            $table->datetime('enrlmntdate');
            $table->float('avrgmrk')->default(0);
            $table->double('totlmrk', 15, 8);
            $table->integer('roll')->unique();
            $table->text('address');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('studtbls');
    }
}
