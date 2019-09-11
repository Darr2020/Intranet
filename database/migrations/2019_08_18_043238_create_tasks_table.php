<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration{
    
    public function up(){
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->string('slug', 100);
            $table->string('description', 250);
            $table->boolean('realizada')->default(false);
            $table->timestamps();
        });
    }

   
    public function down(){
        Schema::dropIfExists('tasks');
    }
}
