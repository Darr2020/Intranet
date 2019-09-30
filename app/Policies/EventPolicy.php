<?php

namespace App\Policies;

use App\User;
use App\Event;
use Illuminate\Auth\Access\HandlesAuthorization;

class EventPolicy{
    use HandlesAuthorization;

    public function __construct(){
        
    }


    public function pass(User $user, Event $event){
        return $user->id == $event->user_id;
    }
}
