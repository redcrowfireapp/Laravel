<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterStudentTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('studtbls', function (Blueprint $table) {
            $table->string('phone', 12)->after('address');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('studtbls', function (Blueprint $table) {
            $table->dropColumn('phone');
        });
    }
}
