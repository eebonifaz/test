<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvocesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoces', function (Blueprint $table) {
            $table->id();
            $table->string("id_n_documento", 255);
            $table->string("referencia_factura", 255);
            $table->string("referencia_sri", 255);

            $table->date("fecha_documento");
            $table->date("fecha_vencimiento");
            $table->date("fecha_contabilizacion");

            $table->double("valor");
            $table->string("text", 255);

            $table->unsignedBigInteger('clase_documento_id');
            $table->unsignedBigInteger('via_pago_id');
            $table->unsignedBigInteger('moneda_id');
            $table->unsignedBigInteger('client_id');


            $table->foreign('clase_documento_id')
                ->references('id')
                ->on('clase_documentos')
                ->onDelete('cascade');

            $table->foreign('moneda_id')
            ->references('id')
            ->on('monedas')
            ->onDelete('cascade');

            $table->foreign('via_pago_id')
                ->references('id')
                ->on('via_pagos')
                ->onDelete('cascade');

            $table->foreign('client_id')
                ->references('id')
                ->on('clients')
                ->onDelete('cascade');


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
        Schema::dropIfExists('invoces');
    }
}
