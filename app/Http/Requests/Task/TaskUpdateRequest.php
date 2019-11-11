<?php

namespace App\Http\Requests\Task;

use Illuminate\Foundation\Http\FormRequest;

class TaskUpdateRequest extends FormRequest{

    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'name' => 'required|min:1|max:30',
            'description' => '|min:1|max:50'
        ];
    }
    public function attributes(){
        return [
            'name' => 'Nombre',
            'description' => 'Descripción',

        ];
    }
}
