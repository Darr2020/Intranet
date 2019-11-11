<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration{

    public function up(){
<<<<<<< HEAD
         Schema::create('services', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('slug')->unique();
            $table->string('description', 250)->nullable();
            $table->string('route')->unique();
            $table->enum('state', ['PUBLISHED', 'DRAFT'])->default('DRAFT');
            $table->timestamps();
            $table->softDeletes();
       });
    }

=======
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name');
            $table->string('description', 250)->nullable();
            $table->string('route');
            $table->enum('state', ['ACTIVE', 'DEACTIVATED'])->default('DEACTIVATED');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150

    public function down(){
        Schema::dropIfExists('servicios');
    }
}
