@extends('layouts.app')
@section('content')
<h3>{{ $perguntas->titulo }} </h3>
<ul> 
    <li>
        <p> {{ $perguntas->descricao }} </p>
    </li> 
</ul>
<h3>Sua resposta</h3>
<form action="/home/resposta/" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div class="form-group">
        <label></label>  
        <input type="hidden" name="id" value="{{ $perguntas->id }}" />
        <textarea name="resposta" class="form-control"></textarea>
    </div> 
    <button type="submit" class="btn btn-primary btn-block">Publicar sua resposta</button> 
</form>
@endsection