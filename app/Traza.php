<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traza extends Model{
    
    protected $table = 'trazas';

    protected $fillable = [
        'name', 'last_name', 'cedula', 'tlf_emergencia', 'extension', 'email', 'biography', 'last_login'
    ];

}
