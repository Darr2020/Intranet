<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
    
class Service extends Model{
    
    protected $table =  'services'; 

    protected $fillable = [
        'name', 'description', 'route', 'state'
    ];          

    public function user(){
        return $this->belongsTo(User::class);
    }
}
