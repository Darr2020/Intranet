<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD

class Service extends Model
{
    //
=======
    
class Service extends Model{
    
    protected $table =  'services'; 

    protected $fillable = [
       'user_id', 'name', 'description', 'route', 'state'
    ];          

    public function user(){
        return $this->belongsTo(User::class);
    }
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
}
