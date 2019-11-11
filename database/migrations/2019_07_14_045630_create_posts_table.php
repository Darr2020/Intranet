<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration{

    public function up(){
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();

            $table->string('title', 150);
            $table->string('slug', 150)->unique();
            $table->mediumText('summary')->nullable();
<<<<<<< HEAD
            $table->text('content');
=======
            $table->text('description');
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
            $table->string('image')->nullable();
            $table->enum('state', ['PUBLISHED', 'DRAFT'])->default('DRAFT');
            $table->timestamp('date_published')->nullable();
            $table->timestamps();
            $table->softDeletes();

            //RELATIONS
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

<<<<<<< HEAD
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
=======
    public function down(){
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
        Schema::dropIfExists('posts');
    }
}
