<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividads', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('descripcion',300);
            $table->string('producto',300);
            $table->integer('objetivo_esp_id')->unsigned();
            $table->foreign('objetivo_esp_id')->references('id')->on('objetivo_esps')
                ->onDelete('cascade');
               $table->integer('unidad_id')->unsigned();
            $table->foreign('unidad_id')->references('id')->on('unidads')
                ->onDelete('cascade');
            $table->integer('area_id')->unsigned();
            $table->foreign('area_id')->references('id')->on('areas')
                ->onDelete('cascade');
            $table->integer('indicador_id')->unsigned();
            $table->foreign('indicador_id')->references('id')->on('indicadors')
                ->onDelete('cascade');
             $table->integer('user_id')->unsigned();
             $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade');
            $table->string('m1',1);
            $table->string('m2',1);
            $table->string('m3',1);
            $table->string('m4',1);
            $table->string('m5',1);
            $table->string('m6',1);
            $table->string('m7',1);
            $table->string('m8',1);
            $table->string('m9',1);
            $table->string('m10',1);
            $table->string('m11',1);
            $table->string('m12',1);



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividads');
    }
}
