<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_plan')->unique()->nullable()->unsigned();
            $table->unsignedBigInteger('id_hora')->unique()->nullable()->unsigned();
            $table->foreign('id_plan')->references('id')->on('plan');
            $table->foreign('id_hora')->references('id')->on('hora_agenda');
            $table->date('a_fecha');
            $table->string('status');
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
        Schema::dropIfExists('agenda');
    }
}
