<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model{
	
	protected $table = 'events';

	protected $fillable = [
			'user_id', 'title', 'slug', 'color', 'description',
			'date_start', 'date_end', 'hora_start', 'hora_end', 'state'
	];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
