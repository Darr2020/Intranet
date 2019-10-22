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
            $table->string('description', 200);
           // $table->boolean('completed')->nullable()->default(false);            
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


/**
 *  1) que cada servicio tenga su nombre
 *  2) filtrado por oficina
 *  3) al asignar permiso que aparaezca enb el nav al aopcion de panel administrador
 *  4) modificar los eventos.. colocar el almanaque a un lado y el evento tipo post
 * 
 * * */
