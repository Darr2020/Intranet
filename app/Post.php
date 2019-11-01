<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cog\Contracts\Love\Likeable\Models\Likeable as LikeableContract;
use Cog\Laravel\Love\Likeable\Models\Traits\Likeable;

class Post extends Model implements LikeableContract{

    use Likeable; 

    const PUBLISHED = 1;
    const PENDING   = 2;
    const REJECTED  = 3;

    protected $fillable = [
     	'user_id', 'title', 'slug', 'summary', 'image', 'description', 'state', 'date_published'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function archives(){
		return $this->morphOne(Archive::class, 'archiveable');
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    //SCOPE
    public function scopeTitle($query, $title){
        
        if(trim($title) != ""){
           return $query->where('title', 'LIKE', "%$title%");
        }
    }
}