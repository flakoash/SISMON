<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadPartidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad_partidas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
             $table->integer('actividad_id')->unsigned();
            $table->foreign('actividad_id')->references('id')->on('actividads')
                ->onDelete('cascade');
             $table->integer('user_id')->unsigned();
             $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade');
                
       /**     $table->double('m1',15,2);
            $table->double('m2',15,2);
            $table->double('m3',15,2);
            $table->double('m4',15,2);
            $table->double('m5',15,2);
            $table->double('m6',15,2);
            $table->double('m7',15,2);
            $table->double('m8',15,2);
            $table->double('m9',15,2);
            $table->double('m10',15,2);
            $table->double('m11',15,2);
            $table->double('m11',15,2);  */

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividad_partidas');
    }
}
