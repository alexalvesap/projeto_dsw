<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;
use App\Respostas;
use App\Perguntas;
use App\Http\Requests\RespostasRequest;
use App\Http\Controllers\Input;

class RespostasController extends Controller {
    
    public function responder() {
        $respostas = new Respostas(); 
        $respostas->resposta = Request::input('resposta');
        $respostas->pergunta_id = Request::input('id');

        $respostas->save();
        return redirect('/home')->withInput();
    }

}
