<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineaPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linea_plan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_plan')->unique()->nullable()->unsigned();
            $table->foreign('id_plan')->references('id')->on('plan');
            $table->string('lp_SKU');
            $table->string('lp_descripcion');
            $table->string('lp_pcb');
            $table->string('lp_cantidad');
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
        Schema::dropIfExists('linea_plan');
    }
}
