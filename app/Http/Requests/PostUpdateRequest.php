<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostUpdateRequest extends FormRequest{


    public function authorize(){
        return true;
    }

 
    public function rules(){

         $rules = [
            'title' => 'required',
            //'slug'   => 'required|unique:posts,slug,' . $this->post,
            'user_id' => 'required|integer',
            'tags' => 'required|array',
            'content' => 'required',
            'state' => 'required|in:DRAFT,PUBLISHED',
        ];

        if ($this->get('archivo')) {
            $rules = array_merge($rules, ['archivo' => 'mimes:jpg,jpeg,png']);
        }
        return $rules;
    }
}
