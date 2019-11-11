<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model{

    protected $fillable = ['name', 'slug'];

    /*public function posts(){
    	return $this->morphedByMany(Post::class, 'taggable');
    }*/

    public function posts(){
<<<<<<< HEAD
    	return $this->belongsToMany(Post::class);
=======
        return $this->belongsToMany(Post::class);
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
    }
}
