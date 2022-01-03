<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan', function (Blueprint $table) {
            $table->id();
            $table->string('pla_descripcion');
            $table->unsignedBigInteger('id_proveedor')->unique()->nullable()->unsigned();
            $table->foreign('id_proveedor')->references('id')->on('proveedores');
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
        Schema::dropIfExists('plan');
    }
}
