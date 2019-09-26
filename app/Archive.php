<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archive extends Model{
    
    public function archiveable(){
    	return $this->morphedTo(Post::class, 'taggable');
    }
}
