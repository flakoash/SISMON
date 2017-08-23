<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndicadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicadors', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('descripcion',300);
            $table->integer('numerador');
            $table->integer('denominador');
            $table->integer('fuente_id')->unsigned();
            $table->foreign('fuente_id')
                ->references('id')->on('fuentes')
                ->onDelete('cascade');
            $table->integer('medida_id')->unsigned();
            $table->foreign('medida_id')
                ->references('id')->on('medidas')
                ->onDelete('cascade');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indicadors');
    }
}
