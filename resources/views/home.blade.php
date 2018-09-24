@extends('layouts.app')
@section('content')      
<div class="jumbotron">
    <h5 class="display-4">Aprenda, colabore!</h5>
    <span>
        <a class="btn btn-primary" href="/home/nova-pergunta" role="button">Perguntar</a>
    </span>
    <hr class="my-4">
    <p class="lead">Tira dúvida DEV,
    é uma ferramenta de perguntas e respostas para 
    programadores e entusiastas que estão aprendendo tirar suas dúvidas.</p>
</div>
<section>
    <div class="row">
        <div class="col-sm-8">
            <label class="text-left">Categoria</label>  
            <hr class="my-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <a href="#"> MySQL, PHP e HTML</a></div>
                <div class="panel-body">php</div>
            </div>                          
        </div>
        <div class="col-sm-4">
            <label class="text-left">Recentes</label>
            <hr class="my-4">
        </div>
    </div>
</section>
@if(old('titulo')) 
<div class="alert alert-success"> 
    A pergunta  {{ old('titulo') }} foi adicionada com sucesso. 
</div> 
@endif
@endsection 