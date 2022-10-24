<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden__detalles', function (Blueprint $table) {
            $table->id();
            $table->string('precio');
            $table->string('cantidad');
            $table->unsignedBigInteger('id_orden');
            $table->foreign('id_orden')->references('id')->on('ordens');

            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_producto')->references('id')->on('productos');

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
        Schema::dropIfExists('orden__detalles');
    }
};
