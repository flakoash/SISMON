<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjetivoEspsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objetivo_esps', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('descripcion',300);
            $table->integer('objetivos_id')->unsigned();
            $table->foreign('objetivos_id')
            ->references('id')->on('objetivos')
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
        Schema::dropIfExists('objetivo_esps');
    }
}
