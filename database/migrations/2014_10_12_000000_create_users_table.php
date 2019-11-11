<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration{

   public function up(){

        //USUARIOS table
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('last_name');
<<<<<<< HEAD
            $table->string('slug');
=======
            $table->string('slug');               
            $table->enum('office', ['Tecnología', 'Gestión Humana', 'Gestión Comunicacional', 'Servicios Generales', 'Seguridad'])->nullable();
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
            $table->integer('cedula')->unique();
            $table->string('tlf_emergencia')->nullable();
            $table->integer('extension')->nullable();
            $table->string('email')->unique();
<<<<<<< HEAD
=======
            $table->string('departament')->nullable();
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
            $table->text('biography')->nullable();
            $table->rememberToken();
            $table->string('password');
            $table->date('last_login')->nullable(); //ultima conexión
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('users');
    }
}
