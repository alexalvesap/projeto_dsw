<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RespostasRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'resposta' => 'required|max:100'
        ];
    }

    public function messages() { 
        return [ 
            'required' => 'O :attribute é obrigatório.', 
        ]; 
    }
}
