<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PerguntasRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titulo' => 'required|max:100', 
            'tags' => 'required|max:100',
            'descricao' => 'required|max:255'
        ];
    }

    public function messages() { 
        return [ 
            'required' => 'O :attribute é obrigatório.', 
        ]; 
    }

}


