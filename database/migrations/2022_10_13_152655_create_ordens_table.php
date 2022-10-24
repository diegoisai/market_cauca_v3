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
        Schema::create('ordens', function (Blueprint $table) {
            $table->id();

            $table->string('cantidad');
            $table->string('direccion_envio');
            $table->string('direccion_pedido');
            $table->string('direccion_correo');
            $table->date('fecha');
            $table->string('estado');
            $table->unsignedBigInteger('id_user');

            $table->foreign('id_user')->references('id')->on('users');
            
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
        Schema::dropIfExists('ordens');
    }
};
