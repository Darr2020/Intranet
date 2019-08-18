<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{

    const PUBLISHED = 1;
    const PENDING   = 2;
    const REJECTED  = 3;

    protected $fillable = [
     	'user_id',  'title', 'slug', 'summary', 'image', 'content', 'state','fecha_publicacion'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function archives(){
		return $this->belongsToMany(Archive::class);
	}
}