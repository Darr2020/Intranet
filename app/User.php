<?php

namespace App;

use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
    

    use Notifiable, ShinobiTrait;

    protected $table = 'users';

    protected $fillable = [
        'name', 'last_name', 'cedula', 'tlf_emergencia', 'extension', 'email', 'biography', 'last_login'
    ];

    protected $hidden = [ 'password', 'remember_token', ];

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function tasks(){
        return $this->hasMany(Task::class);
    }

    public function events(){
        return $this->hasMany(Event::class);
    }

    public function services(){
        return $this->hasMany(Service::class);
    }

    //SCOPE 
    public function scopeName($query, $name){
        if(trim($name) != ""){
            return $query->where('name', 'LIKE', "%$name%")->orWhere('office', 'LIKE', "%$name%");
        }
    }
}