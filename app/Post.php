<?php

namespace App;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model; 

class Post extends Model{
    
=======
use Illuminate\Database\Eloquent\Model;
use Cog\Laravel\Love\Likeable\Models\Traits\Likeable;
use Cog\Contracts\Love\Likeable\Models\Likeable as LikeableContract;


class Post extends Model implements LikeableContract{

    use Likeable; 
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150

    const PUBLISHED = 1;
    const PENDING   = 2;
    const REJECTED  = 3;

    protected $fillable = [
<<<<<<< HEAD
     	'user_id',  'title', 'slug', 'summary', 'image', 'content', 'state','fecha_publicacion'
=======
     	'user_id', 'title', 'slug', 'summary', 'image', 'description', 'state', 'date_published'
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
<<<<<<< HEAD

    public function archives(){
		return $this->morphOne(Archive::class, 'archiveable');
    }
    
    /*public function tags(){
        return $this->morphToMany(Tag::class, 'taggable');
    }*/

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    
=======
    
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
    //SCOPE
    public function scopeTitle($query, $title){
        
        if(trim($title) != ""){
<<<<<<< HEAD
            return $query->where('title', 'LIKE', "%$title%");
=======
           return $query->where('title', 'LIKE', "%$title%");
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
        }
    }
}