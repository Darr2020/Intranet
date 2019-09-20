<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration{

    public function up(){
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


    public function down(){
        Schema::dropIfExists('servicios');
    }
}
