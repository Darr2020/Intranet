<?php

namespace App\Http\Requests\Service;

use Illuminate\Foundation\Http\FormRequest;

class ServiceUpdateRequest extends FormRequest{
    
    public function authorize(){
        return true;
    }

    
    public function rules(){
        return [
        	'user_id' => 'required|integer',
            'name' => 'required',
            'description' => 'required',
            'route' => 'required',
            'state' => 'required|in:ACTIVE,DEACTIVATED',
        ];
    }

    public function attributes(){
        return [
            'name' => 'Nombre',
            'description' => 'Descripción',
            'route' => 'Dirección',
            'state' => 'Estado',
        ];
    }
}
