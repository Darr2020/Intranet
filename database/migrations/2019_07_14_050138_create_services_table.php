<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration{

    public function up(){
         Schema::create('services', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('archive_id')->unsigned();

            $table->string('name');
            $table->string('slug')->unique();
            $table->string('description', 250)->nullable();
            $table->string('route')->unique();
            $table->enum('state', ['PUBLISHED', 'DRAFT'])->default('DRAFT');
            $table->timestamps();
            $table->softDeletes();

           $table->foreign('archive_id')->references('id')->on('archives')
                ->onDelete('cascade')
                ->onUpdate('cascade');
       });
    }


    public function down(){
        Schema::dropIfExists('servicios');
    }
}
