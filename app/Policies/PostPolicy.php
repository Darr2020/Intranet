<?php

namespace App\Policies;

use App\User;
Use App\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy{

    use HandlesAuthorization;


    public function __construct(){
        //
    }

    public function pass(User $user, Post $post){
        return $user->id == $post->user_id;

    }
}
