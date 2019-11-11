<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class PostUpdateRequest extends FormRequest{


    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'title' => 'required',
            'slug'   => 'required|unique:posts' . $this->post,
            'user_id' => 'required|integer',
            'tags' => 'required|array',
            'description' => 'required',
            'state' => 'required|in:DRAFT,PUBLISHED'
        ];
    }

    public function attributes(){
        return [
            'title' => 'Titulo',
            'tags'  => 'Etiqueta',
            'description' => 'Contenido',
            'state' => 'Estado',
        ];
    }
}
