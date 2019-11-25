<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;

class Notification extends Model{

    const POST = 'Noticia';
    const EVENT = 'Evento';
    const SERVICE = 'Servicio';

    const DESCRIPTION_P = 'ha publicado una noticia';
    const DESCRIPTION_E = 'ha publicado una evento';
    const DESCRIPTION_S = 'ha activado un servicio';

    protected $fillable = [
        'who_id', 'type', 'title', 'description'
    ];


    public function origin(){
        return $this->belongsTo(User::class,'who_id');
    }
}
