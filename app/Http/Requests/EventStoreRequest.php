<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventStoreRequest extends FormRequest{
  
    public function authorize(){
        return true;
    }

    
    public function rules(){
        return [
        	'user_id' => 'required|integer',
            'title' => 'required',
            //'slug'   => 'required|unique:events,slug',
            'color' => 'required',
            'date_start' => 'required|date',
            'date_end' => 'required|date',
            'description' => 'required',
            'state' => 'required|in:DRAFT,PUBLISHED',
        ];
    }
}

