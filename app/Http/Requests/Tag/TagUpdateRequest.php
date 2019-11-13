<?php

namespace App\Http\Requests\Tag;

use Illuminate\Foundation\Http\FormRequest;

class TagUpdateRequest extends FormRequest{
    
    public function authorize(){
        return true;
    }

    public function rules(){

        return [
            'name' => 'required',
            'slug'   => 'required|unique:tags' . $this->tag
        ];
    }

    public function attributes(){
        return [
            'name' => 'Nombre',
        ];
    }
}
