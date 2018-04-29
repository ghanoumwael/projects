<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
           $table->increments('id');
            $table->timestamps();
			$table->string('title');
			$table->string('email');
			$table->string('password');
			$table->string('section');
			$table->integer('year_academic');
			$table->char('Gender');
           	$table->integer('phone');
			$table->string('street');
			$table->string('city');
			$table->string('country');
			$table->string('website');
			//$table->string('nationality');
			$table->char('ss');
			
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       // Schema::dropIfExists('users');
    }
}
