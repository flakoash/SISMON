<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargosTdrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargos_tdrs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('cargo_id')->unsigned();
            $table->foreign('cargo_id')
                ->references('id')->on('cargos')
                ->onDelete('cascade');
            $table->integer('tdr_id')->unsigned();
            $table->foreign('tdr_id')
                ->references('id')->on('tdrs')
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
        Schema::dropIfExists('cargos_tdrs');
    }
}
