<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomeServicio',250);
            $table->string('codigoServicio',5);
            $table->string('condicaoPagar',100);
            $table->float('precoUnitario');
            $table->string('moeda')->default('MZN');
            $table->float('valorIvan');
            $table->float('valorSemIvan');
            $table->float('valorComIvan');
            $table->enum('estado',['Pendente','Finalizado'])->default('Pendente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicos');
    }
}
