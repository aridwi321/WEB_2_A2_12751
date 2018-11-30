<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create12751modelmembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('12751modelmembers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->Var('nama'); 
            $table->var('email'); 
            $table->var('password'); 
            $table->var('macaddres'); 
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
        Schema::dropIfExists('12751modelmembers');
    }
}
