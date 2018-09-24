<?php

namespace App;
use App\Respostas;

use Illuminate\Database\Eloquent\Model;

class Perguntas extends Model
{
    protected $table = 'perguntas';
    public $timestamps = false;

    protected $fillable = array('titulo', 'tags', 'descricao');

    public function pergunta() {        
        return $this->hasMany('Respostas::class'); 
    } 
}
