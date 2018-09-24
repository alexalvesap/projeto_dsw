@extends('layouts.app')
@section('content')
@if (count($errors) > 0)  
    <div class="alert alert-danger">    
        <ul>
            @foreach ($errors->all() as $error)        
                <li>{{ $error }}</li> 
            @endforeach 
        </ul>  
    </div> 
@endif
<h3>Fazer uma pergunta</h3>
<form action="/home/adicionar" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div class="form-group">
        <label>Titulo</label> 
        <input name="titulo" class="form-control"/>    
    </div>
    <div class="form-group">
        <label>Tags</label> 
        <input name="tags" class="form-control"/>    
    </div>
    <div class="form-group">
        <label>Descricao da pergunta</label>  
        <textarea name="descricao" class="form-control"></textarea>
    </div> 
    <button type="submit" class="btn btn-primary btn-block">Publicar sua pergunta</button> 
</form>
@endsection