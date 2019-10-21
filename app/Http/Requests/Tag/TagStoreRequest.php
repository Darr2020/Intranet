<?php

namespace App\Http\Requests\Tag;

use Illuminate\Foundation\Http\FormRequest;

class TagStoreRequest extends FormRequest{

    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'name' => 'required',
            'slug'   => 'required|unique:tags'
        ];
    }
    public function attributes(){
        return [
            'name' => 'nombre'
        ];
    }
}
