<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;
use Validator;
use App\Perguntas;
use App\Http\Requests\PerguntasRequest;
use App\Respostas;
use App\Http\Requests\RespostasRequest;

class PerguntasController extends Controller {

    public function novaPergunta() {
        return view('formularioPergunta'); 
    }

    public function adicionar(PerguntasRequest $request) {
        Perguntas::create(Request::all());
        return redirect('/home')->withInput();
    }

    public function lista() {
        $perguntas = Perguntas::all();
        return view('listagem')->with('perguntas', $perguntas);        
    }

    public function pergunta($id) { 
        $perguntas = Perguntas::find($id)->resposta()->where('pergunta_id', '=', $id)->first();
        return view('respostas')->with('perguntas', $perguntas); 
    }
    
    public function responder() {
        $respostas = new Respostas(); 
        $respostas->resposta = Request::input('resposta');
        $respostas->pergunta_id = Request::input('id');

        $respostas->save();
        return redirect('/home')->withInput();
    }

}
