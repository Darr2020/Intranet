<?php

namespace App\Policies;

use App\User;
Use App\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy{

    use HandlesAuthorization;

<<<<<<< HEAD

=======
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
    public function __construct(){
        //
    }

    public function pass(User $user, Post $post){
        return $user->id == $post->user_id;

    }
}
