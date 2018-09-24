<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respostas extends Model
{
    protected $table = 'respostas';
    public $timestamps = false;

    protected $fillable = array('resposta', 'pergunta_id');

    public function resposta() {        
        return $this->belongsTo('Perguntas::class'); 
    } 
}
