<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionaRelacionamentoPerguntaResposta extends Migration
{
    public function up()
    {
        Schema::table('respostas', function (Blueprint $table) {
            $table->integer('pergunta_id');
        });
    }

    public function down()
    {
        Schema::table('respostas', function (Blueprint $table) {
            $table->dropColumn('pergunta_id');
        });
    }
}
