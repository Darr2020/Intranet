<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventUpdateRequest extends FormRequest{


    public function authorize(){
        return true;
    }

 
    public function rules(){

         return [
            'user_id' => 'required|integer',
            'title' => 'required',
            'color' => 'required',
            'date_start' => 'required|date',
            'date_end' => 'required|date',
            'description' => 'required',
            'state' => 'required|in:DRAFT,PUBLISHED',
        ];

    }
}
