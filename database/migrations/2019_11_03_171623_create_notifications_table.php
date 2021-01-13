<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration{
   
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('who_id')->unsigned();
            $table->foreign('who_id')->references('id')->on('users');
            $table->string('type');
            $table->string('title');
            $table->string('description',160);
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('notifications');
    }
}
