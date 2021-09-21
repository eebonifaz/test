<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprobantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comprobantes', function (Blueprint $table) {
            $table->id();

            $table->string("sociedad");
            $table->string("nombre_del_usuario");

            $table->unsignedBigInteger('client_id');

            $table->string("clase_de_documento");
            $table->string("no_documento");
            $table->string("referencia_a_factura");
            $table->string("referencia");
            $table->string("fecha_de_documento");
            $table->string("fecontabilizacion");
            $table->string("vencimiento_neto");
            $table->string("moneda_del_documento");
            $table->string("importe_en_moneda_doc");
            $table->string("totretec");
            $table->string("sldretec");
            $table->string("asignacion");
            $table->string("indicador_cme");
            $table->string("via_de_pago");
            $table->string("ret_1_base_imponible");
            $table->string("ret_1_importe");
            $table->string("ret_1_porcentaje");
            $table->string("ret_1_tipo_de_retencion");
            $table->string("ret_2_base_imponible");
            $table->string("ret_2_importe");
            $table->string("ret_2_porcentaje");
            $table->string("ret_2_tipo_de_retencion");
            $table->string("ret_3_base_imponible");
            $table->string("ret_3_importe");
            $table->string("ret_3_porcentaje");
            $table->string("ret_3_tipo_de_retencion");
            $table->string("ret_4_base_imponible");
            $table->string("ret_4_importe");
            $table->string("ret_4_porcentaje");
            $table->string("ret_4_tipo_de_retencion");
            $table->string("ret_5_base_imponible");
            $table->string("ret_5_importe");
            $table->string("ret_5_porcentaje");
            $table->string("ret_5_tipo_de_retencion");

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
        Schema::dropIfExists('comprobantes');
    }
}
