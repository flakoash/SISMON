<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poms', function (Blueprint $table) {
            $table->increments('id');
              $table->timestamps();
              $table->integer('actividad_id')->unsigned();
            $table->foreign('actividad_id')->references('id')->on('actividads')
                ->onDelete('cascade');
             $table->integer('user_id')->unsigned();
             $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade');
            $table->string('d1',1);
            $table->string('d2',1);
            $table->string('d3',1);
            $table->string('d4',1);
            $table->string('d5',1);
            $table->string('d6',1);
            $table->string('d7',1);
            $table->string('d8',1);
            $table->string('d9',1);
            $table->string('d10',1);
            $table->string('d11',1);
            $table->string('d12',1);
            $table->string('d13',1);
            $table->string('d14',1);
            $table->string('d15',1);
            $table->string('d16',1);
            $table->string('d17',1);
            $table->string('d18',1);
            $table->string('d19',1);
            $table->string('d20',1);
            $table->string('d21',1);
            $table->string('d22',1);
            $table->string('d23',1);
            $table->string('d24',1);
            $table->string('d25',1);
            $table->string('d26',1);
            $table->string('d27',1);
            $table->string('d28',1);
            $table->string('d29',1);
            $table->string('d30',1);
            $table->string('d31',1);
           $table->string('observa',600);
           $table->string('observa_c',600);
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('poms');
    }
}
