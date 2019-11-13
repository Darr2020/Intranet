<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Trace extends Model{

    //ACTIONS
    const POST = 'Noticia';
    const EVENT = 'Evento';
    const SERVICE = 'Servicio';

   

    protected $table = 'traces';

    protected $fillable = [
        'user_id', 'action', 'type_action', 'description'
    ];

    public function typeTrace(){

        $action = $this->action;
        switch ($action) {
            case ($action == Trace::POST):
                return Trace::POST; 
                break;
            case ($action == Trace::EVENT):
                return Trace::EVENT;
                break;
            case ($action == Trace::SERVICE):
                return Trace::SERVICE;
                break;
        }
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
