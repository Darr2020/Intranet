<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model{

    protected $table = 'tasks';

<<<<<<< HEAD
    protected $fillable = [ 'user_id', 'name', 'slug', 'description', 'completed' ];
=======
    protected $fillable = ['name', 'description'];
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
