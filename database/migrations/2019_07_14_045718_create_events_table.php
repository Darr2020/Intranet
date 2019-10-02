<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration{

    public function up(){
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();

            $table->string('title', 150);
            $table->string('slug', 150)->unique();
            $table->string('color');
            $table->text('description', 250)->nullable();
            $table->date('date_start');
            $table->date('date_end');
            $table->time('hora_start')->nullable();
            $table->time('hora_end')->nullable();
            $table->enum('state', ['PUBLISHED', 'DRAFT'])->default('DRAFT');
            $table->timestamps();
            $table->softDeletes();

            //RELATIONS
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    public function down(){
        Schema::dropIfExists('events');
    }
}
