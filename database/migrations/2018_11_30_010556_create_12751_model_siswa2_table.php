<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class 12751ModelSiswa2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('12751_model_siswa2', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->Var('nama'); 
            $table->var('username'); 
            $table->var('password'); 
            $table->var('ipv4'); 
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
        Schema::dropIfExists('12751_model_siswa2');
    }
}
