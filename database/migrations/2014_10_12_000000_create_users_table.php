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
            $table->string('slug');               
            $table->enum('office', ['Tecnología', 'Gestión Humana', 'Gestión Comunicacional', 'Servicios Generales', 'Seguridad'])->nullable();
            $table->integer('cedula')->unique();
            $table->string('tlf_emergencia')->nullable();
            $table->integer('extension')->nullable();
            $table->string('email')->unique();
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
