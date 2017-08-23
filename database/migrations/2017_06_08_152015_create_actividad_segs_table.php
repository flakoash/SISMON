<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadSegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad_segs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
              $table->integer('actividad_id')->unsigned();
            $table->foreign('actividad_id')->references('id')->on('actividads')
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
        Schema::dropIfExists('actividad_segs');
    }
}
