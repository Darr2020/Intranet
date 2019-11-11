<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration{
    
    public function up(){
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('name', 50);
<<<<<<< HEAD
            $table->string('slug', 50);
            $table->string('description', 200);
            $table->boolean('completed')->default(false);            
=======
            $table->string('description', 200);
           // $table->boolean('completed')->nullable()->default(false);            
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    public function down(){
        Schema::dropIfExists('tasks');
    }
}
<<<<<<< HEAD
=======


/**
 *  4) modificar los eventos.. colocar el almanaque a un lado y el evento tipo post
 * 
 * * */
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
