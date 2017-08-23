<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreaUnidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area_unidads', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('unidad_id')->unsigned();
            $table->foreign('unidad_id')
                ->references('id')->on('unidads')
                ->onDelete('cascade');
                            $table->integer('area_id')->unsigned();
            $table->foreign('area_id')
                ->references('id')->on('areas')
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
        Schema::dropIfExists('area_unidads');
    }
}
