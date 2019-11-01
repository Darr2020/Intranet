<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\User;
use App\Post;

class newPost extends Notification{

    use Queueable;
    
    public function __construct($post){
        $this->post = $post;
    }

    public function via($notifiable){
        return ['database'];
    }

    public function toDatabase($notifiable){
        return [
            'post' => $this->post,
            'user' => User::all($this->user->id)            
        ];
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
