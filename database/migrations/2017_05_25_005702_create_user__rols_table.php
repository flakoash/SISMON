<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user__rols', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('user_id')->unsigned();
            $table->integer('rol_id')->unsigned();
            $table->integer('unidad_id')->unsigned();
            $table->integer('cargo_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('rol_id')
                ->references('id')->on('rols')
                ->onDelete('cascade');
            $table->foreign('unidad_id')
                ->references('id')->on('unidads')
                ->onDelete('cascade');
            $table->foreign('cargo_id')
                ->references('id')->on('cargos')
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
        Schema::dropIfExists('user__rols');
    }
}
