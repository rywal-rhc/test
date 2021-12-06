<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFlashcardRequest extends FormRequest
{
  
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
         return [
            'name' => 'required|string',
            'content' => 'required|min:8|max:255|string',
            'category' => 'required|min:8|max:255|string',
            'level' => 'required|numeric',
            'image_url' => 'required|min:8|max:255|string',

        ];
    }
}
