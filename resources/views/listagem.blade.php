@extends('layouts.app')
@section('content')
<h1>Todas as perguntas</h1>
<hr>
    @foreach($perguntas as $p)
        <div class="form-group">
            <h4>
                <a href="/home/pergunta/{{$p->id}}">
                        {{ $p->titulo }}
                </a>
            </h4>
            <p> {{ $p->descricao }} </p>
            <hr>
        </div>
    @endforeach
@endsection
   