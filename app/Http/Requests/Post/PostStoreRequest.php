<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest{
  
    public function authorize(){
        return true;
    }

    public function rules(){
        $rules = [
            'title' => 'required',
            'slug'   => 'required|unique:posts',
            'user_id' => 'required|integer',
            'tags' => 'required|array',
            'content' => 'required',
            'state' => 'required|in:DRAFT,PUBLISHED',
        ];
    }
    public function attributes(){
        return [
            'title' => 'Titulo',
            'tags'  => 'Etiqueta',
            'content' => 'Contenido',
            'state' => 'Estado',
        ];
    }
}