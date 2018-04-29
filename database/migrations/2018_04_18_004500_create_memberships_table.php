<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memberships', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->integer('user_id')->unsigned();
			$table->integer('project_id')->unsigned();
			$table->foreign('user_id')->reference('id')->on('users');
			$table->foreign('project_id')->reference('id')->on('projects');
			
			
			
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('memberships');
    }
}
